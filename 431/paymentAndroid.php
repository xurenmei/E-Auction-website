     <?php

         $con = mysql_connect("localhost","root","");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }

           mysql_select_db("auctionhub", $con);


           $v1=$_REQUEST['cardnum'];
           $v2=$_REQUEST['expdate'];
		   $v3=$_REQUEST['cvc'];
		   $v4=$_REQUEST['name'];
		   $v5=$_REQUEST['street'];
		   $v6=$_REQUEST['city'];
		   $v7=$_REQUEST['state'];
		   $v8=$_REQUEST['country'];
		   $v9=$_REQUEST['zip'];
              if($v1==NULL || $v3==NULL|| $v4==NULL|| $v5==NULL|| $v6==NULL|| $v7==NULL|| $v8==NULL|| $v9==NULL)
             {


                $r["re"]="Fill the all fields!!!";
                 print(json_encode($r));
                die('Could not connect: ' . mysql_error());
             }


            else
          {
           $i=mysql_query("select * from payment where card_no='$v1'",$con);
           $check='';
                  while($row = mysql_fetch_array($i))
                    {
  
                          $check=$row['card_no'];

                     }

           
                   if($check==NULL)
                  {
                      // $result2=mysql_query("insert into user(u_id) values(NULL)");
                       //$uid = mysql_insert_id();
                       $a_id =4;
					   //$a_id=1;
					   $result3=mysql_query("insert into payment values('50','$a_id','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')");
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
               $r["re"]="Payment info already exists";
                 print(json_encode($r));
      
              } 
}
 mysql_close($con);
               
    ?>  