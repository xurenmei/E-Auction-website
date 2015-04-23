     <?php

         $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }

           mysql_select_db("test", $con);


           $v1=$_REQUEST['username'];
           $v2=$_REQUEST['phone'];
           $v3=$_REQUEST['lat'];
 		   $v4=$_REQUEST['long'];
           $v5=$_REQUEST['comments'];

              if($v1==NULL || $v2==NULL || $v3==NULL)
             {


                $r["re"]="Fill the all fields!!!";
                 print(json_encode($r));
                die('Could not connect: ' . mysql_error());
             }


            else
          {
           $i=mysql_query("select * from users where username='$v1'",$con);
           $check='';
                  while($row = mysql_fetch_array($i))
                    {
  
                          $check=$row['username'];

                     }

           
                   if($check==NULL)
                  {

                        $q="insert into users values('$v1','$v2','$v3','$v4','$v5')";
                        $s= mysql_query($q); 
                        if(!$s)
                          {
                                $r["re"]="Inserting problem in batabase";
                  
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
               $r["re"]="Record is repeated";
                 print(json_encode($r));
      
              } 
}
 mysql_close($con);
               
    ?>  