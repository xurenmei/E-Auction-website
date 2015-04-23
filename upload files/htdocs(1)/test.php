<?php
$conn = @ mysql_connect("localhost","root","") or die ("数据库链接错误");
mysql_select_db("hw5",$conn);
mysql_query("set names 'GBK'");//使用GBK中文编码;
 ?> 


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <input type="text" name="age" id="age" />
  </p>
  <p>
    <input type="text" name="ename" id="ename" />
  </p>
  <p>
    <input type="text" name="salary" id="salary" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="submit" />
  </p>
</form>
 <?php
$age = $_POST['age'];
$ename = $_POST['ename'];
$salary = $_POST['salary'];

$res = mysql_query("INSERT INTO emp(age,eid,ename,salary) VALUES('$age','61','$ename','$salary')");
if($res){
    echo '添加成功！';
    exit();
}
?>