<?php
include "connection.php";

global $fname,$lname,$email,$password,$sql;

if(isset($_POST["signup-btn"])){
  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $email =$_POST['email'];
  $password = $_POST['password'];

  $errorMessage = "";

  if (preg_match("/^[a-zA-Z]*$/", $fname) && preg_match("/^[a-zA-Z]*$/", $lname) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: loginform.php");
  } else {
    $errorMessage = "Invalid Format";
    header("Location: signupform.php?error=" . urlencode($errorMessage));
    exit(); 
  }
  
}
$enc_password = password_hash($password, PASSWORD_DEFAULT);       //encrypting password

$sql = "INSERT INTO login_info (First_Name,Last_Name,Emails,Passwords)
      VALUES ('$fname', '$lname', '$email', '$enc_password');";
if($conn->query($sql) === TRUE){
  header("Location: loginform.php");
}
?>
