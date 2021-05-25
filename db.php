<?php
   $host        = "host = ec2-52-23-45-36.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d4p4rjecq20101";
   $credentials = "user = keqzxjpszqluhn password=9dd7554552f2ca8d072368bd5710aab21b92f8ef4b9c26855569150b2c6b4139";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {

      $sql="create table tbl_users(id serial primary key, 
                username varchar(100),password(100))";  
     echo $result = pg_query($db, $sql);   
     echo '<br/>';
     $sql="insert into tbl_users(username,password)values('admin','admin1234')";  
     echo $result = pg_query($db, $sql);   
     echo '<br/>';

     $sql="insert into tbl_users(username,password)values('user','user1234')";  
    echo $result = pg_query($db, $sql);   
    echo '<br/>';

    pg_close($db);
      echo "Opened database successfully\n";
   }
?>