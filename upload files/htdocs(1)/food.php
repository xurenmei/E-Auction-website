<?php
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
?>



<font face="Arial">
<p><a style='position:absolute;left:1050;top:110'
		href="http://www.w3schools.com/html/html5_form_input_types.asp"
                target="_blank"
                name="HUB Home"
				>
HUB Home</a></p>
<p><a style='position:absolute;left:1150;top:110'
		href="http://www.w3schools.com/html/html5_form_input_types.asp"
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
          
            <td>Food Type:</td>
            <td><select name="catagory1">
                <option value="Drink">Drink</option>
                <option value="Meat">Meat</option>
                <option value="Snacks">Snacks</option>
				<option value="Others">Others</option>
              </select>Days</td>
          </tr>
          
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
$category1=$_POST['category1'];
$category=$_GET['category'];
$i_id=$_GET['i_id'];

$result1=mysql_query("insert into category(i_id,category,category1) values('$i_id','$category','$category1')");

if($result1)
{
echo "<script>alert('Upload Successfully!');</script>";
}
else 
{
echo "<script>alert('Upload Fail, Please Try Again);</script>";
}
?>