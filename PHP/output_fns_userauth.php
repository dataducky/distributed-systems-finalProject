<?php

function do_html_header($title = '') {
  // print an HTML header

  // declare the session variables we want access to inside the function
?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>

    </style>
	<script>
	function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
	}
	</script>
	<link rel="stylesheet" type="text/css" href="src/navbar.css">
  </head>
  <body>
  <div class="floatright">
  <?php
     if(isset($_SESSION['admin_user'])) {
       display_button('admin.php', 'admin-menu', 'Admin Menu');
     }
  ?>
  <?php
	if((isset($_SESSION['admin_user']))or(isset($_SESSION['user']))) {
		display_button('logout.php', 'log-out', 'Log Out');
	} else {
		display_button('login.php', 'login', 'Log into your account');
	}
  ?>
  </div>
<?php
}

function do_html_footer() {
  // print an HTML footer
?>
  </body>
  </html>
<?php
}

function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo htmlspecialchars($heading); ?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($name, ENT_QUOTES); ?></a><br />
<?php
}

function do_html_cat_URL($url, $name) {
  // output URL as link and br
?>
  <a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($name, ENT_QUOTES); ?></a>
<?php
}

function do_html_URL_img($url, $imgLink) {
  // output URL as link and background image
?>
  <a href="<?php echo htmlspecialchars($url); ?>"><img <?php echo htmlspecialchars($imgLink, ENT_NOQUOTES); ?>></a><br />
<?php
}

function display_login_form() {
  // dispaly form asking for name and password
?>
 <form method="post" action="index.php" class="centercontent">
 <table bgcolor="#cccccc">
   <tr>
     <td>Username:</td>
     <td><input type="text" name="username"/></td></tr>
   <tr>
     <td>Password:</td>
     <td><input type="password" name="password"/></td></tr>
   <tr>
     <td colspan="2" align="center">
     <input type="submit" value="Log in"/></td></tr>
   <tr>
 </table></form>
<?php
}

function display_registration_form() {
  // dispaly form asking for name and password
?>
 <form method="post" action="registered.php" class="centercontent">
 <table bgcolor="#cccccc">
   <tr>
     <td>Set Username:</td>
     <td><input type="text" name="username"/></td></tr>
   <tr>
     <td>Set Password:</td>
     <td><input type="password" name="password" size="16" maxlength="16" /></td></tr>
	<tr>
     <td>Confirm Password:</td>
     <td><input type="password" name="confpass" size="16" maxlength="16" /></td></tr>
   <tr>
     <td colspan="2" align="center">
     <input type="submit" value="Register"/></td></tr>
   <tr>
 </table></form>
<?php
}

function display_admin_menu() {
?>
<div>
<h1>Administrative Functions</h1>
<ul style="background-color:#E8D9AE;width:50%;margin:13px;">
<li><a href="change_password_form.php">Change admin password</a></li><br />
<li><a href="promote_user_form.php">Promote user to admin</a></li><br />
<li><a href="demote_user_form.php">Demote admin to user</a></li><br />
</ul>
</div>
<?php
}

function display_button($target, $image, $alt) {
  echo "<a href=\"".htmlspecialchars($target)."\" class=\"button\" style=\"padding:2.5px;\">
          <img src=\"icons/".htmlspecialchars($image).".gif\"
           alt=\"".htmlspecialchars($alt)."\" border=\"0\" height=\"50\"
           width=\"135\"/></a>";
}

function display_form_button($image, $alt) {
  echo "<div align=\"center\"><input type=\"image\"
           src=\"icons/".htmlspecialchars($image).".gif\"
           alt=\"".htmlspecialchars($alt)."\" border=\"0\" height=\"50\"
           width=\"135\"/></div>";
}
?>