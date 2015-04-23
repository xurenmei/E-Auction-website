<html>
<head>
<meta charset="UTF-8">
<title>Roux Academy: Store</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="../_scripts/respond.min.js"></script>
<![endif]-->
<link href="_css/main.css" rel="stylesheet" media="screen, projection">
<link href="_css/range.css" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
<script src="_scripts/jquery-1.8.2.min.js"></script>



<style type="text/css"> 

#navigation, #navigation li ul { 
list-style-type:none; 
} 
#navigation { 
margin:20px; 
} 
#navigation li { 
float:left; 
text-align:center; 
position:relative; 
} 
#navigation li a:link, #navigation li a:visited { 
display:block; 
text-decoration:none; 
color:#fff ;
width:130px; 
height:40px; 
line-height:40px; 
border:0px solid transparent; 
border-width:1px 1px 0 0; 
background:transparent; 
padding-left:0px; 
} 
#navigation li a:hover { 
display:block; 
color:#000; 
background:#6b839c; 
} 
#navigation li ul li a:hover { 
display:block; 
color:#000; 
background:#6b839c; 

} 
#navigation li ul { 
display:none; 
position:absolute; 
color:#fff;
background:rgba(35, 31, 32, .8);
top:39px; 
left:-32; 
margin-top:1px; 
width:130px; 
} 
#navigation li ul li ul { 
display:none; 
position:absolute; 
top:0px; 
left:119px; 
margin-top:0; 
margin-left:1px; 
width:120px; 
color:#000;
} 

.search-suggestions { border: 1px solid #999; background: #fff; cursor: default; overflow: auto; }
.search-suggestion { padding: 10px 5px; font-size: 1.2em; white-space: nowrap; overflow: hidden; }
.search-selected { background: #f0f0f0; }
.search-suggestions strong { font-weight: normal; color: #3399ff; }

 .form-wrapper {
    width: 300px;
    padding: 8px;
    margin: 0px auto;  /* change margin from top */
    overflow: hidden;
    border-width: 1px;
    border-style: solid;
    border-color: #dedede #bababa #aaa #bababa;
    box-shadow: 0 3px 3px rgba(255,255,255,.1), 0 3px 0 #bbb, 0 4px 0 #aaa, 0 5px 5px #580000 ;
    border-radius: 10px;    
    background-color: #f6f6f6;
    background-image: linear-gradient(top, #f6f6f6, #eae8e8);
}

.form-wrapper #search {
    width: 220px;
    height: 32px;
	margin-top:1px;
    padding: 10px 5px;
    float: left;    
    font: bold 17px 'Arial', 'Helvetica', 'sans-serif';
    border: 1px solid #ccc;
    box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #fff;
    border-radius: 3px;      
}

.form-wrapper #search:focus {
    outline: 0; 
    border-color: #aaa;
    box-shadow: 0 1px 1px #bbb inset;  
}

.form-wrapper #search::-webkit-input-placeholder {
   color: #999;
   font-weight: normal;
}

.form-wrapper #submit {
    float: right;    
    border: 1px solid #00748f;
    height: 32px;
	margin-top:1px; 
    width: 70px;
    padding: 0;
    cursor: pointer;
    font: bold 15px Arial, Helvetica;
    color: #fafafa;
    text-transform: uppercase;    
    background-color: #800000;
    background-image: linear-gradient(top, #31b2c3, #0483a0);
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;      
    text-shadow: 0 1px 0 rgba(0, 0 ,0, .3);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset, 0 1px 0 #fff;
}
  
.form-wrapper #submit:hover,
.form-wrapper #submit:focus {       
    background-color: #CC00FF;
    background-image: linear-gradient(top, #0483a0, #31b2c3);
}   
  
.form-wrapper #submit:active {
    outline: 0;    
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;    
}
  
.form-wrapper #submit::-moz-focus-inner {
    border: 0;
}

</style> 



<script type="text/javascript"> 
function displaySubMenu(li) { 
var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "block"; 
} 
function hideSubMenu(li) { 
var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "none"; 
} 
function clickHandler(categoryId){
var category = document.getElementById(categoryId).value;
//document.location.href(".\option.html?category="+category);  
}
</script> 

  
</head>
 
 
<body id="itemPage">
<header class="blogHeader pageHeader">
  <h1>Auction Hub<a href="./hub-login.php" title="home"></a></h1>

  <nav id="pageNav" class="cf">
    <ul id="navigation"> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/today">Collections</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c11" name="hi" value="11" onClick="clickHandler('c11')"><a href="search result2.php?category=book">book</a></li>
<li style=“color:#F00;font-size:9px;” id="c12" name="hi" value="12" onClick="clickHandler('c12')"><a href="search result2.php?category=Top sellers">Top sellers</a></li> 
<li style=“color:#F00;font-size:9px;” id="c13" name="hi" value="13" onClick="clickHandler('c13')"><a href="search result2.php?category=Recommendations">Recommendations</a></li> 
<li style=“color:#F00;font-size:9px;” id="c14" name="hi" value="14" onClick="clickHandler('c14')"><a href="search result2.php?category=Sales">Sales</a></li> 

</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.motors.ebay.com">Motors</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c21" name="hi" value="21" onClick="clickHandler('c21')"><a href="search result2.php?category=Cars & Trucks">Cars & Trucks</a></li> 
<li style=“color:#F00;font-size:9px;” id="c22" name="hi" value="22" onClick="clickHandler('c22')"><a href="search result2.php?category=Motorcycles">Motorcycles</a></li> 
<li style=“color:#F00;font-size:9px;” id="c23" name="hi" value="23" onClick="clickHandler('c23')"><a href="search result2.php?category=Parts & Accessories">Parts & Accessories</a></li> 
<li style=“color:#F00;font-size:9px;” id="c24" name="hi" value="24" onClick="clickHandler('c24')"><a href="search result2.php?category=Boats">Boats</a></li> 
<li style=“color:#F00;font-size:9px;” id="c25" name="hi" value="25" onClick="clickHandler('c25')"><a href="search result2.php?category=Other Vehicles">Other Vehicles</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Fashion</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c31" name="hi" value="31" onClick="clickHandler('c31')"><a href="search result2.php?category=Coat">Coat</a></li> 
<li style=“color:#F00;font-size:9px;” id="c32" name="hi" value="32" onClick="clickHandler('c32')"><a href="search result2.php?category=Hoody">Hoody</a></li> 
<li style=“color:#F00;font-size:9px;” id="c33" name="hi" value="33" onClick="clickHandler('c33')"><a href="search result2.php?category=Kids & Baby">Kids & Baby</a></li> 
<li style=“color:#F00;font-size:9px;” id="c34" name="hi" value="34" onClick="clickHandler('c34')"><a href="search result2.php?category=Jewelry & Watches">Jewelry & Watches</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Electronics</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c41" name="hi" value="41" onClick="clickHandler('c41')"><a href="search result2.php?category=Cell Phones">Cell Phones </a></li> 
<li style=“color:#F00;font-size:9px;” id="c42" name="hi" value="42" onClick="clickHandler('c42')"><a href="search result2.php?category=Cameras & Photo">Cameras & Photo </a></li> 
<li style=“color:#F00;font-size:9px;” id="c43" name="hi" value="43" onClick="clickHandler('c43')"><a href="search result2.php?category=Computers & Tablets">Computers & Tablets</a></li> 
<li style=“color:#F00;font-size:9px;” id="c44" name="hi" value="44" onClick="clickHandler('c44')"><a href="search result2.php?category=Video Games">Video Games </a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Sporting goods</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c51" name="hi" value="12" onClick="clickHandler('c51')"><a href="search result2.php?category=Basketball">Basketball </a></li> 
<li style=“color:#F00;font-size:9px;” id="c52" name="hi" value="12" onClick="clickHandler('c52')"><a href="search result2.php?category=Football">Football </a></li> 
<li style=“color:#F00;font-size:9px;” id="c53" name="hi" value="12" onClick="clickHandler('c53')"><a href="search result2.php?category=Golf">Golf</a></li> 
<li style=“color:#F00;font-size:9px;” id="c54" name="hi" value="12" onClick="clickHandler('c54')"><a href="search result2.php?category=Cycling">Cycling </a></li> 
</ul> 
</li>



  </nav>
</header>
<div id="contentWrapper">


<article id="mainContent">
    <h1>This is your shopping cart:</h1>
    <article class="post">
      
 	</article>

    <article id="gallery" class="post">
      <?php

      error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: user-login.php");
} 
$user = $_SESSION['username'];
//echo $_SESSION['username'];

//echo "Welcome!  ".$_SESSION['username']."<br>";
echo "<br>"; 

/* echo "$find"; */
$result2 = mysql_query("SELECT * FROM item where i_id=2"); 
$rs2=mysql_fetch_array($result2);
$deadline=$rs2[deadline];
if (date("Y-m-d",time())>$deadline){

  echo '1';
}
else
echo '2';
//echo date("Y-m-d",time($asd));
$time1=date('Y-m-d H:i:s');

$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
//echo $_SESSION['username'];
$sql = "select * from item";
$result1 = mysql_query("SELECT * FROM priv_user WHERE i_username = '$user'"); 
$rs1=mysql_fetch_array($result1);
$id=$rs1[pu_id];
$result = mysql_query("SELECT * FROM cart WHERE cu_id = '$id' "); 

while($rs = mysql_fetch_array( $result )) 
 {
 //echo TO_DAYS(NOW()) - TO_DAYS($deadline);
 //$page=$result['url'];
 //header("location: $page");
 echo "<br>";
 echo "<br>"; 
 echo "Item id:";
 echo $rs['ci_id']; 
 echo "<br>";  
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 } 


 
?>
    </article>
  </article>
  
<aside>

<center>
<br>
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: user-login.php");
} 
echo $_SESSION['username'];
/*  header("Location: test3.php"); */

?>
<h2><a href="./logout.php">Logout</a></h2>
</center>


    <section class="info">
      <div class="widget">
	   <form class="form-wrapper" name="search" method="post" action='search test.php'>
	   <input type="text" name="find" placeholder="Searching here" id="search" /> 
	   <input type="hidden" name="searching" value="yes" />
	   <input type="submit" name="search" value="go" id="submit"/>
	   </form> 
	
         
     
    </section>
  </aside>
</div>

<!-- <script type="text/javascript" src="E:\xampp\htdocs\renmei\test3.php"></script> -->
<script type="text/javascript" src="_scripts/jquery.ndd.js"></script>
<script type="text/javascript" src="_scripts/dragdrop.js"></script>
<script>

        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }

        window.onload = function() { printValue('slider', 'rangeValue') }

    </script>
<script>
	
	$('#painting1').data({ id:1, price:50 });
	$('#painting2').data({ id:2, price:100 });
	$('#painting3').data({ id:3, price:175 });
	$('#painting4').data({ id:4, price:150 });
	$('#painting5').data({ id:5, price:200 });
	$('#painting6').data({ id:6, price:350 });

	$(document).ready(function () {
		var theValue;

		$("#slider").change(function() {
			theValue = $("#rangeValue").val();
			filterItems(theValue) ;
		});
		
		
	});

	function filterItems(priceCriteria)
	{
		$.each($('#gallery div'), function(i, item) {
			$item = $(item); 
			itemData = $item.data();
			if(itemData.price <= priceCriteria) 
			{
				$item.animate({opacity: 1});
				itemData.matching = true;
			}
			else
			{
				$item.animate({opacity: 0.5});
				itemData.matching = false;
			}
		});
	}
	
	$(function() {
    var find = [
      "Book",
      "Car",
	  "Coat",
      "Hoody"
    ];
    $( "#search" ).autocomplete({
      source: find
    });
  });
</script>
  
</html>


