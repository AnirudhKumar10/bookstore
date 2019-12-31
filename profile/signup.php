<?php

include "../database/connect.php";
  
$stmt = $conn->prepare("INSERT INTO user(id, firstName, lastName, email, phone, password, photo_link) VALUES(?,?,?,?,?,?,?)");
$stmt->bind_param("issssss", $id, $firstname, $lastname, $email, $phone, $pass, $photo);
$id="NULL";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['password'];
$photo="";
if($stmt->execute()){
      header("Location:http://test/shopping/books.php");
}else{
      echo "Failed";
}

$stmt->close();
$conn->close();
   
?>