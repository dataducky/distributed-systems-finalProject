<?php
 require_once('userauth_fns.php');
 do_html_header("Log in");

 display_login_form();
 ?>
<div class="centercontent">
<?php
 do_html_URL("registration.php", "Register your account");
?>
</div>
<?php
 do_html_footer();
?>
