<?php
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
   <p>User Name:
		<input type="text" name="user_name" id="user_name" />
	</p>
    <p>First Name:
            <input type="text" name="first_name" id="first_name" />
    </p>
	<p>Middle Name:
            <input type="text" name="mid_name" id="mid_name" />
    </p>
    <p>Last Name:
            <input type="text" name="last_name" id="last_name" />
	</p>
    <p>About You:
            <input type="text" name="about_you" id="about_you" />
	</p>
    <p>Password:
            <input type="password" name="password" id="password" />
    </p>
	<p>Confirm Password:
            <input type="password" name="conpassword" id="conpassword" />
    </p>
	 <p>Email Address:
            <input type="text" name="email" id="email" />
    </p>
    <p>Phone Number1:
         <input type="text" name="phone_no1" id="phone_no1" />
	</p>
	<p>Phone Number2:
            <input type="text" name="phone_no2" id="phone_no2" />
	</p>
	<p>
    <input type="submit" name="button" id="button" value="submit" />
  </p>
</form>
	
<?php
	
$username = $_POST['user_name'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$first_name=$_POST['first_name'];
$mid_name=$_POST['mid_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$about_you=$_POST['about_you'];
$phone_no1=$_POST['phone_no1'];
$phone_no2=$_POST['phone_no2'];
if($password==$conpassword){
$pwd=$password;
}
else{
echo "<script>alert('Password Incorrect');history.back();</script>";
}
/*$result1=mysql_query("select max(u_id) from user");
if(mysql_num_rows($result1)){
$tmp=1;
$uid=$result1+$tmp;
}
else{
  $uid=00001;
}*/
$uid=00001;
$result2=mysql_query("INSERT INTO user(u_id) values($'uid')");
$result3=mysql_query("INSERT INTO priv_user(user,password,pu_id) values('$username','$pwd','$uid')");
$result4=mysql_query("INSERT INTO individual(about_you,email,first_name,iu_id,last_name,middle_name) values('$about_you','$email','$first_name','$uid','$last_name','$mid_name')");
$result5=mysql_query("INSERT INTO phone_no(phone_no,p_id) values('phone_no1','$uid')");
if (isset($phone_no2)) { 
$result6=mysql_query("INSERT INTO phone_no(phone_no,p_id) values('phone_no1','$uid')");
}
if($result2&&$result3&&$result4&&$result5)
{
echo "<script>alert('Register Success');</script>";
}
else 
{
echo "<script>alert('Register Fail, Please Try Again);</script>";
}
?>
