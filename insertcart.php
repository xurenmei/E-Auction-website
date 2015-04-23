<?php
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$u_id=1;
$i_id=$_POST["i_id"];
$add=$_POST["add"];
//echo "$add";
$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
$rs=mysql_fetch_array($result);
$price=$rs[bide_price];
$price=$price+$add;
$result2=mysql_query("insert into cart(ci_id,cu_id) values('$i_id','$u_id')");
$result5 =mysql_query("UPDATE item SET bide_price = $price WHERE i_id='$i_id'");
echo "<script>alert('Successful Bid');</script>";
$url = 'hub.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>