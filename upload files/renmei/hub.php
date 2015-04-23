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
</script> 

  
</head>
 <?php
 //This is only displayed if they have submitted the form 
 if (isset($_POST['search'])) 
 { 
 echo "<h2>Results</h2><p>";
 $find=$_POST['find'];
 //If they did not enter a search term we give them an error 
 if ($find == "") 
 { 
 echo "<p>You forgot to enter a search term"; 
 exit; 
 } 
 
 // Otherwise we connect to our Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("test") or die(mysql_error());
 // We preform a bit of filtering 
 //$find = strtoupper($find);
 $find = strip_tags($find); 
 $find = trim ($find); 
 
 //Now we search for our search term, in the field the user specified 
 $data = mysql_query("SELECT * FROM item WHERE name LIKE '%$find%'"); 
 
 //And we display the results 
 while($result = mysql_fetch_array( $data )) 
 {
 

 $page=$result['url'];
 header("location: $page");
 echo $result['name'];
 echo $result['id']; 
 echo "<br>";  
 } 


 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
 $anymatches=mysql_num_rows($data); 
 if ($anymatches == 0) 
 { 
 echo "Sorry, but we can not find an entry to match your query<br><br>"; 
 } 
 
 //And we remind them what they searched for 
 echo "<b>Searched For:</b> " .$find; 
 } 
 
 ?> 
 
<body id="itemPage">
<header class="blogHeader pageHeader">
  <h1>Auction Hub<a href="E:\Semester 2\Database\Ex_Files_HTML5_UX_eCom\Ex_Files_HTML5_UX_eCom\Exercise Files\Chapter 1\01_01\empty.html" title="home"></a></h1>

  <nav id="pageNav" class="cf">
    <ul id="navigation"> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/today">Collections</a> 
<ul> 
<li style=“color:#F00;font-size:9px;”><a href="#">Today's collections</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Top sellers</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Recommendations</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Sales</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.motors.ebay.com">Motors</a> 
<ul> 
<li style=“color:#F00;font-size:9px;”><a href="#">Cars & Trucks</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Motorcycles</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Parts & Accessories</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Boats</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Other Vehicles</a></li> 
</ul> 
</li> 
<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Fashion</a> 
<ul> 
<li style=“color:#F00;font-size:9px;”><a href="#">Men's</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Women's</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Kids & Baby</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Jewelry & Watches</a></li> 
</ul> 

<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Electronics</a> 
<ul> 
<li style=“color:#F00;font-size:9px;”><a href="#">Cell Phones </a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Cameras & Photo </a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Computers & Tablets</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Video Games </a></li> 
</ul> 

<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)"> 
<a href="http://www.ebay.com/vrt/fashion">Sporting goods</a> 
<ul> 
<li style=“color:#F00;font-size:9px;”><a href="#">Basketball </a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Football </a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Golf</a></li> 
<li style=“color:#F00;font-size:9px;”><a href="#">Cycling </a></li> 
</ul> 



  </nav>
</header>
<div id="contentWrapper">


<article id="mainContent">
    <h1>What's hot on Auction Hub</h1>
    <article class="post">
      <h2><a href="#">Cool items. Hot prices.</a></h2>
      <p>See Today's Collections </p>
 	</article>
    <article id="gallery" class="post">
      <div id="painting1" class="painting" draggable="true"><img src="_images/paintings/coat.jpg" width="190" height="190" alt="Coat">
        <p>Coat - <span class="price">$50</span></p>
      </div>
      <div id="painting2" class="painting" draggable="true"> <img src="_images/paintings/womensweater.jpg" width="190" height="190" alt="womensweater">
        <p>womensweater - <span class="price">$100</span></p>
      </div>
      <div id="painting3" class="painting lastOne" draggable="true"> <img src="_images/paintings/chair.jpg" width="190" height="190" alt="chair">
        <p>chair - <span class="price">$175</span></p>
      </div>
      <div id="painting4" class="painting" draggable="true"><img src="_images/paintings/bed.jpg" width="190" height="190" alt="bed">
        <p>bed - <span class="price">$150</span></p>
      </div>
      <div id="painting5" class="painting" draggable="true"><img src="_images/paintings/patterns.jpg" width="190" height="190" alt="Patterns">
        <p>Patterns - <span class="price">$200</span></p>
      </div>
      <div id="painting6" class="painting lastOne" draggable="true"> <img src="_images/paintings/rabbit.jpg" width="190" height="190" alt="Rabbigt">
        <p>Rabbit - <span class="price">$350</span></p>
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
echo $_SESSION['username'];
/*  header("Location: test3.php"); */

?>
<h2><a href="./logout.php">Logout</a></h2>
</center>


    <section class="info">
      <div class="widget">
	   <form class="form-wrapper" name="search" method="post">
	   <input type="text" name="find" placeholder="Searching here" id="search" /> 
	   <input type="hidden" name="searching" value="yes" />
	   <input type="submit" name="search" value="go" id="submit"/>
	   </form> 
	  


        <h2>Price Slider</h2>
        <form name="form1" method="post" action="">
          <p>
          
          <input id="slider" type="range" min="50" max="400" step="25" value="400"  onchange="printValue('slider','rangeValue')"/>
          <input id="rangeValue" type="text" size="2"/>
          </p>
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
