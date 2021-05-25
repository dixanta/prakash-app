<?php
   $host        = "host = ec2-52-23-45-36.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d4p4rjecq20101";
   $credentials = "user = keqzxjpszqluhn password=9dd7554552f2ca8d072368bd5710aab21b92f8ef4b9c26855569150b2c6b4139";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {

      $sql="select * from tbl_users";  
    $result = pg_query($db, $sql); 
    ?>
    <ul>
    <?php
    while($row = pg_fetch_array($result,NULL, PGSQL_ASSOC)) { 
        print_r($row);
    ?>
    <li><?php //echo $row['username'];?></li>
     
 
   <?php  
    } 
    pg_close($db);
    
   }
?>
</ul>