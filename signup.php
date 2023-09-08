<?php
include "connection.php";

global $fname;
global $lname;
global $email; 
global $password;
global $sql;

if(isset($_POST["signup-btn"])){
  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $email =$_POST['email'];
  $password = $_POST['password'];

  if(!preg_match("/^[a-zA-Z-' ]*$/",$fname) || !preg_match("/^[a-zA-Z-' ]*$/",$lname) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMessage = "Invalid Format";
    header("Location: signupform.php?error=" . urlencode($errorMessage));
  }
}
$sql = "INSERT INTO login_info (First_Name,Last_Name,Emails,Passwords)
      VALUES ('$fname', '$lname', '$email', '$password');";
if($conn->query($sql) === TRUE){
  header("Location: loginform.php");
}
?>
