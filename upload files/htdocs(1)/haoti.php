<?php
$db=mysql_connect("localhost","root","");
$sqlname="MESSAGE";
mysql_select_db($sqlname,$db);
mysql_query("SET NAMES 'gbk'",$db);
if($_POST['tj']){
$username=$_POST['username'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
if($password==$conpassword){
$pwd=$password;
}
else{
echo "<script>alert('Password Incorrect');history.back();</script>";
}
$sql="insert into MESSAGE(user,password) values('".$username."','".$pwd."')";
$result=mysql_query($sql);
if($result)
{
echo "<script>alert('Register Success');</script>";
}
else 
{
echo "<script>alert('Register Fail, Please Try Again);</script>";
}
}
?>

<form method="post" action="#">
  <p>*Username:
  <input type="text" name="username" id="username">
  </p>
  <p>*Password:
    <input type="password" name="password" id="password">
  </p>
  <p>*Confirm Password:
    <input type="password" name="conpassword" id="conpassword">
  </p>
</form>

<?php 
echo "User Information";

			//date_default_timezone_set('PRC')
 echo date("Y-m-d");
?>
<form method="post" action="#">
  <p>*First Name:
    <input type="fisrt_name" name="first_name" id="first_name">
  </p>
  <p>Middle Name:
    <input type="middle_name" name="middle_name" id="middle_name">
  </p>
  <p>*Last Name:
    <input type="last_name" name="last_name" id="last_name">
  </p>
  <p>
    <input type="submit" name="tj" id="tj" value="Submit">
    <input type="reset" value="Reset">
  </p>
</form>