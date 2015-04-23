<?php
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
?>



<font face="Arial">
<p><a style='position:absolute;left:1050;top:110'
		href="hub-login.php"
                target="_blank"
                name="HUB Home"
				>
HUB Home</a></p>
<p><a style='position:absolute;left:1150;top:110'
		href="hub-login.php"
                target="_blank"
                name="Login"
				>
Login</a></p>
</font> 

<!--<center>-->
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title> Week 6 HTML</title>
  </head>
  <body background="background1.jpg">

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<font face="Impact">

<!-- 
    <h1>  <img src="logo_525696_web.jpg" border="0" usemap="#planetmap" alt="Planets" /><font color="red">Register User</font></h1> -->
    <!-- <p>Done in Blue Griffon. Created HTML page</p> -->
    <form action="" method="POST"  target="_User" name="Web Form" enctype="multipart/form-data"
      accept-charset="utf-8">
      <table border="1px" bordercolor="white" cellpadding="3px" cellspacing="0">
        <tbody>
          <!-- <tr>
            <td colspan="2">Basic HTML Web Form Input Types</td>
          </tr> -->
		  <tr>
            <td width="150px">User Name:</td>
            <td width="300px"> 
			<input name="user_name" size="40" maxlength="40"
                   required="required"
				   type="text"
				   id="user_name"/>
			</td>
          </tr>
          <tr>
            <td width="150px">First Name:</td>
            <td width="300px"> <input name="first_name" size="40" maxlength="40"
                required="required"
                type="text"
				id="first_name"/></td>
          </tr>
		  <tr>
            <td>Middle Name:</td>
            <td><input name="mid_name" type="text" id="mid_name"/></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input name="last_name" required="required" type="text" id="last_name"/></td>
          </tr>
          
          <tr>
            <td>About You:</td>
            <td> <textarea rows="10" cols="50"  input name="about_you" type="text" id="about_you"/>Tell us about yourself.</textarea>
			</td>
          </tr>
          <tr>
            <td> Password:</td>
            <td> <input name="password" required="required" type="password" id="password"/></td>
          </tr>
		  <tr>
            <td>Confirm Password:</td>
            <td><input name="conpassword" required="required" type="password" id="conpassword"/></td>
          </tr>
		  <tr>
            <td>Email Address:</td>
            <td><input name="email" required="required" type="text" id="email"/></td>
          </tr>
          
		  <tr>
            <td>Phone Number1:</td>
            <td><input name="phone_no1" required="required" type="text" id="phone_no1"/></td>
		  </tr>
		  <tr>
            <td>Phone Number2:</td>
            <td><input name="phone_no2" type="text" id="phone_no2"/></td>
		  </tr>
		  <!-- <tr>
            <td>I drive a:</td>
            <td> <input name="vehicle" value="Unicyle" type="checkbox">Unicycle
              <input name="vehicle" value="Bicycle" type="checkbox">Bicycle <input
                name="vehicle"
                value="Car"
                type="checkbox">Car</td>
          </tr> -->
          <!-- <tr>
            <td>My Web Browser:</td>
            <td><input list="browsers"> <datalist id="browsers">
                <option value="Internet Explorer"></option>
                <option value="Firefox"></option>
                <option value="Chrome"></option>
                <option value="Opera"></option>
                <option value="Safari"></option>
              </datalist>(Datalist doesn't work in Safari)</td>
          </tr> -->
          <!-- <tr>
            <td>Number Of Phone Number:</td>
            <td>
              <select name="Number">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
              </select>
            </td>
          </tr> -->
		  <!-- <tr>
            <td>Phone Number:</td>
			<td>
            <body>
				<script>var i=1</script>
				<input type=button onclick="document.body.insertAdjacentHTML(<tr><td>'beforeEnd','<input type=phone_no name='+i+'> '</td></tr>)" value=Add>
			</body>
			</td>
          </tr> -->
         <!--  </tr>
            <td colspan="2"> New HTML 5 Web Form Input Types</td>
          </tr> -->
          <!-- <tr>
            <td>Color:</td>
            <td><a href="http://www.w3schools.com/html/html5_form_input_types.asp"
                target="_blank"
                name="Demo">
                Demos</a></td>
          </tr> -->
          <!-- <tr>
            <td>Date</td>
            <td><input name="date" type="date"></td>
            </td>
          </tr> -->
          <tr>
            <td><br>
            </td>
            <td><input value="Submit" type="submit"> <input value="Reset" type="reset"></td>
          </tr>
        </tbody>
      </table>
    </form>
	</font> 
  </body>


<?php
error_reporting(0);
$username=$_POST['user_name'];
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
//$result = mysql_query("SELECT * FROM individual WHERE i_username=$username");
//$rs=mysql_fetch_array($result);
//if($rs[phone_no]) 
//$result1=mysql_query("SELECT max(u_id) FROM user");
//if(mysql_num_rows($result1))
//{
//$tmp=1;
//$result1++;
//$uid=$result1;
//}
/*else
{
  $uid=1;
}*/
if($username!=NULL)
{
$result2=mysql_query("insert into user(u_id) values(NULL)");
$uid = mysql_insert_id();

$result3=mysql_query("insert into individual(iu_id,first_name,middle_name,last_name,about_you,email) values('$uid','$first_name','$mid_name','$last_name','$about_you','$email')");
$result4=mysql_query("insert into priv_user(pu_id,i_username,password) values('$uid','$username','$pwd')");
$result5=mysql_query("insert into phone_no(phone_no,p_id) values('$phone_no1','$uid')");
if ($phone_no2!=NULL&&$phone_no2!=$phone_no1) { 
$result6=mysql_query("insert into phone_no(phone_no,p_id) values('$phone_no2','$uid')");
}
}
if($username!=NULL&&$result2&&$result3&&$result4&&$result5)
{
echo "<script>alert('Register Success');</script>";
$url = 'hub.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
}
else 
{
echo "<script>alert('Register Fail, Please Try Again);</script>";
}
?>