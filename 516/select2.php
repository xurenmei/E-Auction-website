   <?php
mysql_connect("localhost","root","");
mysql_select_db("test");
        /*  $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           } */

          // mysql_select_db("test", $con);
               $i=mysql_query("select * from users");
              /*  $check='';
               while($row = mysql_fetch_array($i))
                {
  
                  $r[]=$row;
                  $check=$row['ID'];
                 }
                  if($check==NULL)
                   {             */
                      /* $r["re"]="Record is not available";
					  //$lat=$row['loc_lat'];
					  //$long=$row['loc_long'];
                      print(json_encode($r));
					  //print(json_encode($loc_long));
                 
                     }
                   else
                     { */
                        //$r["re"]="success";
                        //retrieve every record and put it into an array that we can later turn into JSON
                   while($row = mysql_fetch_assoc($i)){
                  // $rows[] = $r; has the same effect, without the superfluous data attribute
                $output[]=$row;}
                print(json_encode($output));// this will print the output in json
                mysql_close();


// now all the rows have been fetched, it can be encoded
//echo json_encode($rows);
                              
                      //} 
            
    ?> 