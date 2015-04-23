<?php
error_reporting(0);
$conn = @ mysql_connect("localhost","root","") or die ("connection error");
mysql_select_db("auctionhub",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
$u_id=1;
?>

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

<font face="Impact">
<p><a style='position:absolute;left:1050;top:110'
		href="hub.php"
                target="_blank"
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
          <!-- <tr>
            <td colspan="2">Basic HTML Web Form Input Types</td>
          </tr> -->
          <tr>
            <td width="150px">Item Name:</td>
            <td width="300px"> <input name="i_name" size="40" maxlength="40"
                required="required"
                type="text"
				id="i_name"/></td>
          </tr>
		  <tr>
            <td>Color:</td>
            <td><select name="color">
                <option value="red">red</option>
                <option value="blue">blue</option>
                <option value="orange">orange</option>
                <option value="green">green</option>
                <option value="purple">purple</option>
                <option value="yellow">yellow</option>
                <option value="white">white</option>
                <option value="black">black</option>
              </select></td>
          </tr>
		  <!--<tr>
            <td>Category:</td>
            <td><select name="category">
                <option value="cloth">cloth</option>
                <option value="food">food</option>
                <option value="electric_device">electric device</option>
                <option value="publish">publish</option>
				<option value="others">Others</option>
              </select></td>
          </tr>-->
        
		 <tr>
            <td> Category:</td>
            <td> <input name="category" required="required" type="text" id="category"/></td>
          </tr>
		  <tr>
            <td> Category1:</td>
            <td> <input name="category1" required="required" type="text" id="category1"/></td>
          </tr>
          <tr>
            <td>Description:</td>
            <td> <textarea rows="10" cols="50"  input name="description" type="text" id="description"/>Tell us about yourself.</textarea>
			</td>
          </tr>
		  <tr>
            <td>Deadline:</td>
            <td><select name="deadline">
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="7">7</option>
              </select>Days</td>
          </tr>
          <tr>
            <td> location:</td>
            <td> <input name="location" required="required" type="text" id="location"/></td>
          </tr>
		  
		  <tr>
            <td>Picture:</td>
            <td><input name="pict" required="required" type="file" id="pict"/></td>
          </tr>
		  <tr>
            <td>Price:</td>
            <td><input name="price" required="required" type="text" id="price"/></td>
          </tr>
		  <tr>
            <td>Amount:</td>
            <td><input name="amount" required="required" type="text" id="amount"/></td>
          </tr>
		  <!-- <tr>
            <td>I drive a:</td>
            <td> <input name="vehicle" value="Unicyle" type="checkbox">Unicycle
              <input name="vehicle" value="Bicycle" type="checkbox">Bicycle <input
                name="vehicle"
                value="Car"
                type="checkbox">Car</td>
          </tr> -->
          
          <!-- <tr>
            <td>Number Of Phone Number:</td>
            <td>
              <select name="Number">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
              </select>
            </td>
          </tr> -->
		  <!-- <tr>
            <td>Phone Number:</td>
			<td>
            <body>
				<script>var i=1</script>
				<input type=button onclick="document.body.insertAdjacentHTML(<tr><td>'beforeEnd','<input type=phone_no name='+i+'> '</td></tr>)" value=Add>
			</body>
			</td>
          </tr> -->
         <!--  </tr>
            <td colspan="2"> New HTML 5 Web Form Input Types</td>
          </tr> -->
          <!-- <tr>
            <td>Color:</td>
            <td><a href="http://www.w3schools.com/html/html5_form_input_types.asp"
                target="_blank"
                name="Demo">
                Demos</a></td>
          </tr> -->
          <!-- <tr>
            <td>Date</td>
            <td><input name="date" type="date"></td>
            </td>
          </tr> -->
          <tr>
            <td><br>
            </td>
            <td><input value="Submit" type="submit"> <input value="Reset" type="reset"></td>
          </tr>
        </tbody>
      </table>
    </form>
	</font> 
  </body>

<?php
error_reporting(0);
$i_name=$_POST['i_name'];
$color=$_POST['color'];
$tmp=$_POST['deadline'];
$location=$_POST['location'];
$description=$_POST['description'];
$pict=$_POST['pict'];
$price=$_POST['price'];
$amount=$_POST['amount'];
$category=$_POST['category'];

$subcategory1=$_POST['category1'];


if($i_name!=NULL)
{
//$p_id = mysql_insert_id()+1;

/*
$src_img=imagecreatefromjpeg($pict);

$ow=imagesx($src_img);	 //取得原图的宽
$oh=imagesy($src_img);	 //取得原图的高
if($ow>500||$oh>500)
{
$nw=500;	 //计算新图的宽度
$nh=500;	 //计算新图的高度

$desc_img=imagecreatetruecolor($nw,$nh);	//建立新图
imagecopyresampled($desc_img,$src_img,0,0,0,0,$nw,$nh,$ow,$oh);

imagejpeg($desc_img);
}
else
{
$desc_img=$src_img;
}
//$tmp=$_FILES["file"]["tmp_name"];
//$fp = fopen($tmp,'rb');
//$data = bin2hex(fread($fp,$size));
*/
date_default_timezone_set('America/New_York');
$time1=date('Y-m-d H:i:s');
$deadline=date('Y-m-d H:i:s',time()+$tmp*24*3600); 

$result1=mysql_query("insert into item(i_id,i_name,color,deadline,description,location,pict,bide_price,available) values(NULL,'$i_name','$color','$deadline','$description','$location','0','$price','0')");
$i_id = mysql_insert_id();
$result2=mysql_query("insert into category(i_id,category,subcategory1) values('$i_id','$category','$subcategory1')");
$result2=mysql_query("insert into bid_posted(bp_id,b_amount,b_time,item_posted_id) values('$u_id','$amount','$time1','$i_id')");

if($_FILES["pict"]["size"]!=NULL)
{
if ((($_FILES["pict"]["type"] == "image/pjpeg")
|| ($_FILES["pict"]["type"] == "image/jpeg"))
&& ($_FILES["pict"]["size"] < 100000))
  {
  if ($_FILES["pict"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["pict"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["pict"]["name"] . "<br />";
    echo "Type: " . $_FILES["pict"]["type"] . "<br />";
    echo "Size: " . ($_FILES["pict"]["size"] / 1024) . " Kb<br />";
    echo "Temp pict: " . $_FILES["pict"]["tmp_name"] . "<br />";

    move_uploaded_file($_FILES["pict"]["tmp_name"],
    "upload/" . $i_id.".jpg");
    echo "Stored in: " . "upload/" . $i_id .".jpg";
    $picture = 'upload/'. $i_id .".jpg";
    $result3=mysql_query("update item set pict='$picture' where i_id=$i_id");
    }
  }
else
  {
  echo "Invalid file";
  $result5 = mysql_query("delete from item where i_id='$i_id'");
  }
  }
  $picture = 'upload/'. $i_id.".jpg";
  $result3 = mysql_query("UPDATE item SET pict = $picture WHERE i_id = '$i_id'");
}
if($i_name!=NULL&&$result1)
{
//echo "<script>alert('Please Specific the Details');</script>";
$url = 'hub.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
}
else 
{
echo "<script>alert('Upload Fail, Please Try Again);</script>";
}
/*if($category=='food')
{
$url = 'food.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";

//header("location:localhost/food.php?category=category");
//echo "<script>window.close();</script>";
}*/
?>