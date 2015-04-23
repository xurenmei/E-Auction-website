<?php
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;

//$ou_id=$_GET['cu_id'];
//$oi_id=$_GET['ci_id'];
$ou_id=1;
$oi_id=5;

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
<p><a style='position:absolute;left:1150;top:110'
		href="login.php"
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


