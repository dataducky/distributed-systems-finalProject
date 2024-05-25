<?php
 require_once('userauth_fns.php');
 session_start();
 do_html_header('Demoting User');
 check_admin_user();
 if (!filled_out($_POST)) {
   echo "<p>You have not filled out the form completely.<br/>
         Please try again.</p>";
   do_html_url("index.php", "Back to home page");
   do_html_footer();
   exit;
 } else {
   $username = $_POST['username'];
   $confuser = $_POST['confuser'];
   $password = $_POST['password'];
   if ($username != $confuser) {
      echo "<p>Usernames entered were not the same.  User unaffected.</p>";
   } else {
      // attempt update
      if (demote_user($_SESSION['admin_user'], $username, $password)) {
         echo "<p>User demoted.</p>";
      } else {
         echo "<p>User could not be demoted.</p>";
      }
   }
 }
 do_html_url("index.php", "Back to home page");
 do_html_footer();
?>
