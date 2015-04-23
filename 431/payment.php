<?php
session_start();
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;

//$u_id=$_GET['cu_id'];
//$i_id=$_GET['ci_id'];
$u_id=1;
$i_id=5;


$result1 = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
$rs1=mysql_fetch_array($result1);
$price=$rs1[bide_price];
//$sprice=$price*$o_amount;
$result1 = mysql_query("SELECT * FROM bid_posted WHERE item_posted_id='$i_id'");
$rs1=mysql_fetch_array($result1);
$s_id=$rs1[bp_id];
echo "$rs[bp_id]"; 
$result1 = mysql_query("SELECT * FROM address WHERE a_id='$u_id'");
$rs1=mysql_fetch_array($result1);
$ucity=$rs1[city];
$ustreet=$rs1[street];
$uapartment=$rs1[apartment];
$ucountry=$rs1[country];
$ustate=$rs1[state];
$uzipcode=$rs1[zipcode];

?>

<font face="Impact">
<p><a style='position:absolute;left:1050;top:110'
		href="hub.php"
                target="_blank"
                name="HUB Home"
				>
HUB Home</a></p>
<p><a style='position:absolute;left:1150;top:110'
		href="login.php"
                target="_blank"
                name="Login"
				>
Login</a></p>
<p><a style='position:absolute;left:15;top:180'>
    Shipment Address:
	<?php 
	echo "$ucountry $ustate $ucity $ustreet $uapartment $uzipcode";
	?>
</a></p>
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
</br>
</br>
<font face="Impact">


    <form action="" method="POST"  target="_User" name="Web Form" enctype="multipart/form-data"
      accept-charset="utf-8">
      <table border="1px" bordercolor="white" cellpadding="3px" cellspacing="0">
        <tbody>
		  <tr>
            <td width="150px">Card Number:</td>
            <td width="300px"> 
			<input name="card_no" size="40" maxlength="40"
                   required="required"
				   type="text"
				   id="card_no"/>
			</td>
          </tr>
          <tr>
            <td width="150px">Expire Date:</td>
            <td width="300px"> <input name="ex_date"
                required="required"
                type="text"
				id="ex_date"/></td>
          </tr>
		  <tr>
            <td>CVC:</td>
            <td><input name="cvc" type="text" required="required" id="cvc"/></td>
          </tr>
          <tr>
            <td>Holder's Name:</td>
            <td><input name="name" required="required" type="text" id="name"/></td>
          </tr>
		  
           <tr>
            <td>Address:</td>
          </tr>
          
		  <tr>
            <td>Street:</td>
            <td><input name="street" required="required" type="text" id="street"/></td>
          </tr>
          
		  <tr>
            <td>City:</td>
            <td><input name="city" required="required" type="text" id="city"/></td>
		  </tr>
		  <tr>
            <td>State:</td>
            <td><input name="state" required="required" type="text" id="state"/></td>
		  </tr>
		  <tr>
            <td>Country:</td>
            <td><input name="country" required="required" type="text" id="country"/></td>
		  </tr>
		  <tr>
            <td>Zipcode:</td>
            <td><input name="zipcode" required="required" type="text" id="zipcode"/></td>
		  </tr>
		  <tr>
            <td width="150px">Total Amount Is:</td>
            <td width="300px"> 
			$ <?php
			echo "$price"; 
			?>
			</td>
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
error_reporting(0);

$card_no=$_POST['card_no'];
$cvc=$_POST['cvc'];
//$ex_date=date('Y-m-d H:i:s');
$ex_date=$_POST['ex_date'];
$name=$_POST['name'];
$city=$_POST['city'];
$street=$_POST['street'];
$country=$_POST['country'];
$statename=$_POST['state'];
$zipcode=$_POST['zipcode'];
$a_id=1;
if($card_no!=NULL)
{
//$result2=mysql_query("insert into payment values('$u_id','$a_id','$card_no','$ex_date','$cvc','$name','$street','$city','$statename','$country','$zipcode')");

$result2=mysql_query("insert into payment(a_id,card_no,city,country,cvc,ex_date,name,statename,street,u_id,zipcode) values('$a_id','$card_no','$city','$country','$cvc','$ex_date','$name','$statename','$street','$u_id','$zipcode')");
if($result2)
{
echo "<script>alert('Successful Paid');</script>";
$url = 'order.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
}
else 
{
echo "<script>alert('Payment Fail, Please Try Again);</script>";
}
}
?>