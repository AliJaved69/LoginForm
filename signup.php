<?php
include "connection.php";

global $fname;
global $lname;
global $email; 
global $password;
global $sql;

if(isset($_POST["signup-btn"])){
  $fname = $_POST['fname'];
  $lname =$_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
}
$sql = "INSERT INTO login_info (First_Name,Last_Name,Emails,Passwords)
      VALUES ('$fname', '$lname', '$email', '$password');";
if($conn->query($sql) === TRUE){
  header ("Location: loginform.html");
}

?>
