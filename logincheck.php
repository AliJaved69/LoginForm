<?php
include "connection.php";

global $email,$password,$errorMessage;

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM login_info WHERE emails = '$email' AND passwords = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location: homepage.html");
} else {
  $errorMessage = "Invalid credentials. Please try again.";
  header("Location: loginform.php?error=" . urlencode($errorMessage));
  exit();
}

$conn->close();
?>
