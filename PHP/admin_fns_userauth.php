<?php
// This file contains functions used by the admin interface

function display_password_form() {
// displays html change password form
?>
   <br />
   <form action="change_password.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd" size="16" maxlength="16" /></td>
   </tr>
   <tr><td>New password:</td>
       <td><input type="password" name="new_passwd" size="16" maxlength="16" /></td>
   </tr>
   <tr><td>Repeat new password:</td>
       <td><input type="password" name="new_passwd2" size="16" maxlength="16" /></td>
   </tr>
   <tr><td colspan=2 align="center"><input type="submit" value="Change password">
   </td></tr>
   </table>
   <br />
<?php
}

function display_promote_user_form() {
?>
<br />
   <form action="promote_user.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Username:</td>
       <td><input type="text" name="username"/></td>
   </tr>
   <tr><td>Confirm Username:</td>
       <td><input type="text" name="confuser"/></td>
   </tr>
   <tr><td>Confirm Your Password:</td>
       <td><input type="password" name="password" size="16" maxlength="16" /></td>
   </tr>
   <tr><td colspan=2 align="center"><input type="submit" value="Promote to Administrator">
   </td></tr>
   </table>
   <br />
<?php	
}

function display_demote_user_form() {
?>
<br />
   <form action="demote_user.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Username:</td>
       <td><input type="text" name="username"/></td>
   </tr>
   <tr><td>Confirm Username:</td>
       <td><input type="text" name="confuser"/></td>
   </tr>
   <tr><td>Confirm Your Password:</td>
       <td><input type="password" name="password" size="16" maxlength="16" /></td>
   </tr>
   <tr><td colspan=2 align="center"><input type="submit" value="Demote to User">
   </td></tr>
   </table>
   <br />
<?php	
}
?>
