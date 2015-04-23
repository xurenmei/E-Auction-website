 <form class="form-wrapper" name="search" method="post">
 <input type="text" name="find" placeholder="Searching here" id="search" /> 
 <input type="hidden" name="searching" value="yes" />
 <input type="submit" name="search" value="go" id="submit"/>
 </form> 
 
 <script>
  $(function() {
    var find = [
      "Book",
      "Coat",
      "Shoes"
    ];
    $( "#search" ).autocomplete({
      source: find
    });
  });
  </script>

 <style type="text/css">
.search-suggestions { border: 1px solid #999; background: #fff; cursor: default; overflow: auto; }
.search-suggestion { padding: 10px 5px; font-size: 1.2em; white-space: nowrap; overflow: hidden; }
.search-selected { background: #f0f0f0; }
.search-suggestions strong { font-weight: normal; color: #3399ff; }

 .form-wrapper {
    width: 650px;
    padding: 8px;
    margin: 100px auto;  /* change margin from top */
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
    width: 530px;
    height: 32px;
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
    width: 100px;
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
 
 echo $result['name'];
 $page=$result['url'];
 header("location: $page");
 echo $page;
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