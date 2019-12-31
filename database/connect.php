<?php

   $server="test";
   $user="admin";
   $password="admin123";
   $db="bookstore";

   $conn = new mysqli($server, $user, $password, $db);
   if($conn->connect_error){
       die("Connection failed: ". $conn->connect_error);
   }else{
       
   }
   
?>