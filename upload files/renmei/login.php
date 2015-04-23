<?php

$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
session_start();

 /*if($_REQUEST['username']=="ABC" && $_REQUEST['password']=="123"){
 $_SESSION['username'] = "ABC";
 $_SESSION['password'] = "123";
 header("Location: hub.php");
 }*/
?>
 <center>
  Invalid username and password!<br><br>
  <font face="Impact">
  <form name="login" method="post" action="login.php">
   Username: <input type="text" name="username" id="username"><br>
   Password: <input type="password" name="password"><br>
   Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
   <input type="submit" name="submit" value="Login">
   <input type="submit" name="register" value="Register"><br>
   </font>
  </form>
  </center>
  
<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username!=NULL)
{
$res=mysql_query("select * from priv_user where i_username='$username'")or die(mysql_error());
echo $res;
$res1=mysql_fetch_array($res);
echo "$res1[i_username]";
echo "$res1[password]";
if($res[i_username]!=NULL)
{
if($res[password]==$password)
{

$_POST['username'] = $username;
$_POST['password'] = $password;
 header("Location: hub.php");
}
else 
{
echo "<script>alert('Password Incorrect');history.back();</script>";
}
}
else
{
echo "<script>alert('Username Incorrect');history.back();</script>";
}
}
?>