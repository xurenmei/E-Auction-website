     <?php

         $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }

           mysql_select_db("auctionhub", $con);


           $v1=$_REQUEST['username'];
           $v2=$_REQUEST['password'];
              if($v1==NULL || $v2==NULL)
             {


                $r["re"]="Fill the all fields!!!";
                 print(json_encode($r));
                die('Could not connect: ' . mysql_error());
             }


            else
          {
           $i=mysql_query("select * from priv_user where password='$v2'",$con);
           $check='';
                  while($row = mysql_fetch_array($i))
                    {
  
                          $check=$row['password'];

                     }

           
                   if($check==NULL)
                  {
                       //$result2=mysql_query("insert into user(u_id) values(NULL)");
                       //$uid = mysql_insert_id();
					   //$result3=mysql_query("insert into individual(iu_id,first_name,middle_name,last_name,about_you,email) values('$uid','NULL','NULL','NULL','NULL','NULL')");
                        $q="insert into priv_user values('50','$v1','$v2')";
                        $s= mysql_query($q); 
                        if(!$s)
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
               $r["re"]="User already exists, please change your password";
                 print(json_encode($r));
      
              } 
}
 mysql_close($con);
               
    ?>  