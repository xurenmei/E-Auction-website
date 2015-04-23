<?php
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;

session_start();
echo "<font color='red' size=4 style='position:absolute;left:1130;top:110'>" .$_SESSION['username']."</font>";
$name=$_SESSION['username'];
$result1 = mysql_query("SELECT * FROM priv_user WHERE i_username='$name'");
 while($result = mysql_fetch_array( $result1 )) 
 {
 $u_id=$result['pu_id'];

 echo $u_id;  
 } 
 
$ou_id=$u_id;
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
$a_id=$s_id;
if($card_no!=NULL)
{
$result2=mysql_query("insert into payment(pay_id,u_id,a_id,card_no,ex_date,cvc,name,street,city,statename,country,zipcode) values(NULL,'$u_id','$a_id','$card_no','$ex_date','$cvc','$name','$street','$city','$statename','$country','$zipcode')");

//$result2=mysql_query("insert into payment(a_id,card_no,city,country,cvc,ex_date,name,pay_id,statename,street,u_id,zipcode) values('$a_id','$card_no','$city','$country','$cvc','$ex_date','$name',NULL,'$statename','$street','$u_id','$zipcode')");
if($result2)
{
echo "<script>alert('Successful Paid');</script>";
}
else 
{
echo "<script>alert('Payment Fail, Please Try Again);</script>";
//header("location:hub.php");
}
}
//$ou_id=$_GET['cu_id'];
//$oi_id=$_GET['ci_id'];
$ou_id=1;
$oi_id=$_POST["i_id"];;
echo "$oi_id";

$result1 = mysql_query("SELECT * FROM individual WHERE iu_id='$ou_id'");
$rs1=mysql_fetch_array($result1);
$bonus=$rs1[bonus];
$sql = "select * from item";
$result = mysql_query("SELECT * FROM item WHERE i_id='$oi_id'");
$rs=mysql_fetch_array($result);
$bonus=$bonus+$rs[bide_price];
$result5 =mysql_query("UPDATE individual SET bonus = $bonus WHERE iu_id='$ou_id'");

$result1 = mysql_query("SELECT * FROM item WHERE i_id='$oi_id'");
$rs1=mysql_fetch_array($result1);
$oi_name=$rs1[i_name];
$oi_pict=$rs1[pict];
$oi_description=$rs1[description];
$oi_price=$rs1[bide_price];

$result1 = mysql_query("SELECT * FROM bid_posted WHERE item_posted_id='$oi_id'");
$rs1=mysql_fetch_array($result1);
$os_id=$rs1[bp_id];


$result2 = mysql_query("insert into aorder(oi_id,os_id,ou_id,o_id) values('$oi_id','$os_id','$ou_id',NULL)");
$o_id = mysql_insert_id();
$result3 = mysql_query("delete from cart where ci_id='$oi_id'");

$amount=0;
$result = mysql_query("SELECT count(*) FROM aorder WHERE oi_id='$oi_id'");
while($rs = mysql_fetch_array( $result )) 
{
$amount++;
}
$result4 = mysql_query("SELECT * FROM bid_posted WHERE item_posted_id='$oi_id'");
$rs1=mysql_fetch_array($result4);
$samount=$rs1[b_amount];
//echo "$amount";
//echo "$samount";
//求总和
if($amount>=$samount)
{
$result5 =mysql_query("UPDATE item SET available = '1' WHERE i_id='$oi_id'");
//$result5 = mysql_query("update from item where i_id='$oi_id'");
}
?>



<font face="Impact">
<p><a style='position:absolute;left:1050;top:110'
		href="hub.php"
                target="_blank"
                name="HUB Home"
				>
HUB Home</a></p>



<?php
session_start();
echo "<font color='red' size=4 style='position:absolute;left:1130;top:110'>" .$_SESSION['username']."</font>";
$name=$_SESSION['username'];
$result1 = mysql_query("SELECT * FROM priv_user WHERE i_username='$name'");
 while($result = mysql_fetch_array( $result1 )) 
 {
 $u_id=$result['pu_id'];

 //echo $u_id;  
 } 
 ?>

<!--<center>-->
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title> Week 6 HTML</title>
  </head>
  <body background="order.jpg">

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
          
		  <tr>
            <td width="150px">Order Number Is:</td>
            <td width="300px"> 
			<?php
			echo "$o_id"; 
			?>
			</td>
          </tr>
		  
		  <tr>
            <td width="150px">Item Name:</td>
            <td width="300px"> 
			<?php $sql = "select * from item";
			$result = mysql_query("SELECT * FROM item WHERE i_id='$oi_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[i_name]"; ?>
			</td>
          </tr>
		  
		  <tr>
            <td width="150px">Item Price:</td>
            <td width="300px"> 
			<?php $sql = "select * from item";
			$result = mysql_query("SELECT * FROM item WHERE i_id='$oi_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[bide_price]"; ?>
			</td>
          </tr>
		 
		  
		  <tr>
            <td width="150px">Item Location:</td>
            <td width="300px"> 
			<?php $sql = "select * from item";
			$result = mysql_query("SELECT * FROM item WHERE i_id='$oi_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[location]"; ?>
			</td>
          </tr>
		  
          <tr>
            <td><br>
            </td>
            <td><input type="button" value="Confirm" onclick="javascript:document.location.href='hub.php'" /></td>
          </tr>
		  
        </tbody>
      </table>
    </form>
	</font> 
  </body>


