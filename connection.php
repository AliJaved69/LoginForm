<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "newdb";

$conn = mysqli_connect($host,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}
?>