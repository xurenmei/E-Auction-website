<?php
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$i_id=$_GET['item'];
$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
$rs=mysql_fetch_array($result);
$bin=$rs[buy_it_now];
?>

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

.form-submit {
    width: 70px;
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


.form-submit #submit {
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
 <?php
 //This is only displayed if they have submitted the form 
 if (isset($_POST['search'])) 
 { 
 $find=$_POST['find'];
 } 
 ?> 
 
<body id="itemPage">
<header class="blogHeader pageHeader">
  <h1>Auction Hub<a href="hub-login.php" title="home"></a></h1>

  <nav id="pageNav" class="cf">
    <ul id="navigation"> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/today">Collections</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c11" name="hi" value="11" onClick="clickHandler('c11')"><a href="search test.php?category=book">book</a></li>
<li style=“color:#F00;font-size:9px;” id="c12" name="hi" value="12" onClick="clickHandler('c12')"><a href="search test.php?category=Top sellers">Top sellers</a></li> 
<li style=“color:#F00;font-size:9px;” id="c13" name="hi" value="13" onClick="clickHandler('c13')"><a href="search test.php?category=Recommendations">Recommendations</a></li> 
<li style=“color:#F00;font-size:9px;” id="c14" name="hi" value="14" onClick="clickHandler('c14')"><a href="search test.php?category=Sales">Sales</a></li> 

</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.motors.ebay.com">Motors</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c21" name="hi" value="21" onClick="clickHandler('c21')"><a href="search test.php?category=Cars & Trucks">Cars & Trucks</a></li> 
<li style=“color:#F00;font-size:9px;” id="c22" name="hi" value="22" onClick="clickHandler('c22')"><a href="search test.php?category=Motorcycles">Motorcycles</a></li> 
<li style=“color:#F00;font-size:9px;” id="c23" name="hi" value="23" onClick="clickHandler('c23')"><a href="search test.php?category=Parts & Accessories">Parts & Accessories</a></li> 
<li style=“color:#F00;font-size:9px;” id="c24" name="hi" value="24" onClick="clickHandler('c24')"><a href="search test.php?category=Boats">Boats</a></li> 
<li style=“color:#F00;font-size:9px;” id="c25" name="hi" value="25" onClick="clickHandler('c25')"><a href="search test.php?category=Other Vehicles">Other Vehicles</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Fashion</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c31" name="hi" value="31" onClick="clickHandler('c31')"><a href="search test.php?category=Coat">Coat</a></li> 
<li style=“color:#F00;font-size:9px;” id="c32" name="hi" value="32" onClick="clickHandler('c32')"><a href="search test.php?category=Hoody">Hoody</a></li> 
<li style=“color:#F00;font-size:9px;” id="c33" name="hi" value="33" onClick="clickHandler('c33')"><a href="search test.php?category=Kids & Baby">Kids & Baby</a></li> 
<li style=“color:#F00;font-size:9px;” id="c34" name="hi" value="34" onClick="clickHandler('c34')"><a href="search test.php?category=Jewelry & Watches">Jewelry & Watches</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Electronics</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c41" name="hi" value="41" onClick="clickHandler('c41')"><a href="search test.php?category=Cell Phones">Cell Phones </a></li> 
<li style=“color:#F00;font-size:9px;” id="c42" name="hi" value="42" onClick="clickHandler('c42')"><a href="search test.php?category=Cameras & Photo">Cameras & Photo </a></li> 
<li style=“color:#F00;font-size:9px;” id="c43" name="hi" value="43" onClick="clickHandler('c43')"><a href="search test.php?category=Computers & Tablets">Computers & Tablets</a></li> 
<li style=“color:#F00;font-size:9px;” id="c44" name="hi" value="44" onClick="clickHandler('c44')"><a href="search test.php?category=Video Games">Video Games </a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Sporting goods</a> 
<ul> 
<li style=“color:#F00;font-size:9px;” id="c51" name="hi" value="12" onClick="clickHandler('c51')"><a href="search test.php?category=Basketball">Basketball </a></li> 
<li style=“color:#F00;font-size:9px;” id="c52" name="hi" value="12" onClick="clickHandler('c52')"><a href="search test.php?category=Football">Football </a></li> 
<li style=“color:#F00;font-size:9px;” id="c53" name="hi" value="12" onClick="clickHandler('c53')"><a href="search test.php?category=Golf">Golf</a></li> 
<li style=“color:#F00;font-size:9px;” id="c54" name="hi" value="12" onClick="clickHandler('c54')"><a href="search test.php?category=Cycling">Cycling </a></li> 
</ul> 
</li>



  </nav>
</header>
<div id="contentWrapper">


<article id="mainContent">
    <h1>ITEM: <?php $sql = "select * from item";
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[i_name]"; ?></h1>
	
	

    <style type="text/css"> 
     .myButton:active {
	  position:relative;
	  top:2px;
      left:2px;
     }
    </style>
    </FORM>
	
    
    <article id="gallery" class="post">
      <div id="painting1" class="painting" draggable="true">
			<?php $sql = "select * from item";
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "<img src=$rs[pict] width='240' height='240'></img>"; ?>
	  </div>
	  <div>
	    <p>Seller - 
		    <?php 
			$result = mysql_query("SELECT * FROM bid_posted WHERE item_posted_id='$i_id'");
			$rs=mysql_fetch_array($result);
			$u_id=$rs[bp_id];
			$result = mysql_query("SELECT * FROM priv_user WHERE pu_id='$u_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[i_username]";
			?></p>
        <p>Description - 
		    <?php 
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[description]"; ?></p>
		<p>Deadline - 
		    <?php
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[deadline]"; ?></p>
		<p>Location - 
		    <?php 
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[location]"; ?></p>
		<p>BUY IT NOW - 
		    <?php 
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[buy_it_now]"; ?></p>
		<p>Price: 
		    <?php
			$result = mysql_query("SELECT * FROM item WHERE i_id='$i_id'");
			$rs=mysql_fetch_array($result);
			echo "$rs[bide_price]"; ?></p>	
      </div>
	  <div>
	  <form class="form-submit" name="submit" method="post" action='insertcart.php'>
	   <input type="hidden" name="i_id" value=<?php echo "$i_id";?> /> 
	   <input type="hidden" name="price" value=<?php echo "$bin";?> /> 
	   <input name="add" type="text" value="markup" onclick="javascript:if(this.value=='markup') this.value='';" required="required" id="add" size="2"/>
	   <input type="submit" name="search" value="BID" id="submit"/>
	   </form> 
	   </div>
	   </br>
	   <div>
	   <form class="form-submit" name="submit" method="post" action='payment2.php'>
	   <input type="hidden" name="i_id" value=<?php echo "$i_id";?> /> 
	   <input type="hidden" name="price" value=<?php echo "$bin";?> /> 
	   <input type="submit" name="search" value="BUYNOW" id="submit"/>
	   </form> 
	  </div>
    </article>
  </article>
  
<aside>

<center>
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: user-login.php");
} 
echo "<font color='red' size=5>" .$_SESSION['username']."</font>";
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
</script>
  
</html>
