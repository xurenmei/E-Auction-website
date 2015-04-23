<!-- <!-- <!-- <!-- <!-- <label for="country">Category</label><br />
        <select name="category" id="category">
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>

        </select>


        <tr>
    <td valign=top><strong>Sites:</strong></td>
    <td> <select name="cities">
    <option selected>Select</option>
    <option>London</option>
    <option>Paris</option>
    <option>New York</option>
    </select>
    </tr>
    </td> -->

<!-- 
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

<!-- <meta name="viewport" content="initial-scale=1.0" />
<script src="_scripts/jquery-1.8.2.min.js"></script>



<style type="text/css"> 

#navigation, #navigation li ul { 
list-style-type:none; 
} 
#navigation { 
margin:10px; 
} 
#navigation li { 
float:left; 
text-align:center; 
position:relative; 
} 
#navigation li a:link, #navigation li a:visited { 
display:block; 
text-decoration:none; 
color:#000 ;
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
width:140px;
background:#6b839c; 
left:-30px; 
margin-left:-40px; 

} 
#navigation li ul { 
display:none; 
position:absolute; 
color:#000;
background:rgba(35, 31, 32, .8);
top:0px; 
left:130; 
margin-top:1px; 
width:100px; 
} 
#navigation li ul li ul { 
display:none; 
position:absolute; 
top:0px; 
left:10px; 
margin-top:0; 
margin-left:-20px; 
width:100px; 
color:#000;
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
 -->


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>JavaScript下拉菜单</title>

    <style type="text/css">

        * {

            padding:0;

            margin:0;

        }

        body {

            font-family:verdana, sans-serif;

            font-size:small;

        }

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

            color:#000;

            width:120px;

            height:40px;

            line-height:40px;

            border:1px solid #fff;

            border-width:1px 1px 0 0;

            background:#c5dbf2;

            padding-left:10px;

        }

        #navigation li a:hover {

            color:#fff;

            background:#2687eb;

        }

        #navigation li ul li a:hover {

            color:#fff;

            background:#6b839c;

        }

        #navigation li ul {

            display:none;

            position:absolute;

            top:40px;

            left:0;

            margin-top:1px;

            width:120px;

        }

        #navigation li ul li ul {

            display:none;

            position:absolute;

            top:0px;

            left:130px;

            margin-top:0;

            margin-left:1px;

            width:120px;

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

<body>

    <ul id="navigation">

        <li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">

            <a href="#">Category</a>   

            <ul>
            	<li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">
                <a href="#">Collections</a>
                	<ul>

                        <li><a href="#">book</a></li>

                        <li><a href="#">art</a></li>

                        <li><a href="#">painting</a></li>

                        <li><a href="#">antique</a></li>

                    </ul>
                </li>

                <li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">
                <a href="#">Collections</a>
                	<ul>

                        <li><a href="#">book</a></li>

                        <li><a href="#">art</a></li>

                        <li><a href="#">painting</a></li>

                        <li><a href="#">antique</a></li>

                    </ul>
                </li>

                <li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">
                <a href="#">Collections</a>
                	<ul>

                        <li><a href="#">book</a></li>

                        <li><a href="#">art</a></li>

                        <li><a href="#">painting</a></li>

                        <li><a href="#">antique</a></li>

                    </ul>
                </li>

                <li onmouseover="displaySubMenu(this)" onmouseout="hideSubMenu(this)">
                <a href="#">Collections</a>
                	<ul>

                        <li><a href="#">book</a></li>

                        <li><a href="#">art</a></li>

                        <li><a href="#">painting</a></li>

                        <li><a href="#">antique</a></li>

                    </ul>
                </li>

            </ul>

        </li>


    </ul>

<div style="width:100%; background:#f00; height:100px;">asfsadga</div>

</body>

</html>