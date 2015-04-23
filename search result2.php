<?php
$category=$_GET["category"];
//echo "Welcome!	".$_SESSION['username']."<br>";
echo "This is your searching result!<br>";
echo "$category";

$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$sql = "select * from item";
$result = mysql_query("SELECT * FROM item WHERE i_name LIKE '%$category%'"); ;
$rs=mysql_fetch_array($result);
echo $result;
echo "<img src=$rs[pict]></img>"; 
 
?>