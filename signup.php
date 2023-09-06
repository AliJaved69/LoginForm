<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "newdb";

$conn = mysqli_connect($host,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection error: " .$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
    echo "Please fill in all the fields.";
  } else {
    header("Location: signupform.html", 302);
  }
}


?>
