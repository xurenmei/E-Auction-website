<?php
session_start();
if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
header("Location: content.php");
}
?>
<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.0 Transitional//EN”>
<html>
<head>
<title> PHP Login </title>
</head>
<body>
<center>
<form method="post" action="login.php">
<!– in this example I link it with login.php to check the password & username–>

<table>
<tr><td>Username:</td><td><input type="text" name="usr"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pswd"></td></tr>
<tr><td><input type="submit" name="login" value="Login"></td>
<td><input type="reset" name="reset" value="Reset"></td></tr>
</table>
</form>
</center>
</body>
</html>