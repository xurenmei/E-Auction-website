<?php

$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$sql = "select * from item";
$result = mysql_query("SELECT * FROM item WHERE i_id=1");
$rs=mysql_fetch_array($result);
echo "<img src=$rs[pict]></img>"; 
 
$result = mysql_query("SELECT * FROM phone_no WHERE p_id=24");
$rs=mysql_fetch_array($result);
echo "$rs[phone_no]"; 
?>
