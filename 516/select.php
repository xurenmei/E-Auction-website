<?php
 $db_con = mysql_connect("localhost", "root", "") or die('could not connect');
 $db_name  = "test"; 
 mysql_select_db($db_name);
 $sql = "SELECT * FROM users";
 $result = mysql_query($sql);
 while($row=mysql_fetch_assoc($result))
  $output[]=$row;
 print(json_encode($output));
 mysql_close();   
?>
