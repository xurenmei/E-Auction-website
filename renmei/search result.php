
<font face="Impact">
<p><a style='position:absolute;left:1050;top:110'
		href="hub.php"
              
                name="HUB Home"
				>
HUB Home</a></p>
</font> 

<!--<center>-->
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title> Week 6 HTML</title>
  </head>
  <body background="UPLOAD.jpg">


</body>
<center> 
<?php
$find=$_REQUEST['find'];
$item=$_GET['item'];
//echo "Welcome!	".$_SESSION['username']."<br>";
echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
echo "This is your searching result!<br>";
echo "item id =";
echo $item;
/* echo "$find"; */

$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$sql = "select * from item";
$result = mysql_query("SELECT * FROM item WHERE i_name LIKE '%$find%'"); 

while($rs = mysql_fetch_array( $result )) 
 {
 
 //$page=$result['url'];
 //header("location: $page");
 echo "Name:";
 echo $rs['i_name']; echo "<br>"; 
 echo "Item id:";
 echo $rs['i_id']; 
 echo "<br>";  
 echo "<img src=$rs[pict]></img>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 } 


 
?>