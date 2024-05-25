<?php
 require_once('userauth_fns.php');
 session_start();
 do_html_header("Demote User");
 check_admin_user();
 ?>
<div class="centercontent">
<?php
 display_demote_user_form();
 ?>
</div>
<?php
 do_html_url("index.php", "Back to home page");
 do_html_footer();
?>
