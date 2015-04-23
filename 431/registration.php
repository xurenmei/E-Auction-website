     <?php

         $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }

           mysql_select_db("auctionhub", $con);


           $v1=$_REQUEST['first'];
           $v2=$_REQUEST['middle'];
		   $v3=$_REQUEST['last'];
		   $v4=$_REQUEST['about'];
		   $v5=$_REQUEST['email'];
              if($v1==NULL ||$v3==NULL|| $v4==NULL|| $v5==NULL)
             {


                $r["re"]="Fill the all fields!!!";
                 print(json_encode($r));
                die('Could not connect: ' . mysql_error());
             }


            else
          {
           $i=mysql_query("select * from individual where email='$v5'",$con);
           $check='';
                  while($row = mysql_fetch_array($i))
                    {
  
                          $check=$row['email'];

                     }

           
                   if($check==NULL)				   
                  {    $result2=mysql_query("insert into user(u_id) values(NULL)");
                       $uid = mysql_insert_id();
                       $result3=mysql_query("insert into individual values('50','$v1','$v2','$v3','$v4','$v5')");
                       if(!$result3)
                          {
                                $r["re"]="Inserting problem in database";
                               print(json_encode($r));
                           }
                         else
                          {
                             $r["re"]="Record inserted successfully";
                              print(json_encode($r));
                           }
             }
            else
             {
               $r["re"]="Email already exists";
                 print(json_encode($r));
      
              } 
}
 mysql_close($con);
               
    ?>  