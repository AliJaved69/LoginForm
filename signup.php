<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "newdb";

$conn = mysqli_connect($host,$username,$password,$db_name);

if($conn->connect_error){
  die("Connection Failed: " . $conn->connect_error);
}

$fname = $lname = $email = $password = "";

if(isset($_POST["signup"])){
  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
}

$sql = "INSERT INTO login_info (First_Name,Last_Name,Emails,Passwords)
        VALUES ('$fname', '$lname', '$email', '$password');";
if($conn->query($sql) === TRUE){
  include "loginform.html";
}

if(empty($fname) || empty($lname) || $empty($email) || empty($password)){ 
}
?>
