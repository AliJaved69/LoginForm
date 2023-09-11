<?php
include "connection.php";

global $email,$password,$errorMessage,$result;

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT Passwords FROM login_info WHERE emails = '$email'; ";
$result = $conn->query($sql);
$dec_password = $result->fetch_assoc();


$verify = password_verify($password, $dec_password['Passwords']);

if($verify){
  header("Location: homepage.html");
} else {
  $errorMessage = "Invalid credentials. Please try again.";
  header("Location: loginform.php?error=" . urlencode($errorMessage));
  exit();
}



$conn->close();
?>
