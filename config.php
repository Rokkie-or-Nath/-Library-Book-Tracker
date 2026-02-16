<?php 
$host = "localhost";
$user = "root";
$passrowd = "";
$database = "users_db";

$conn = mysqli_connect($host, $user, $passrowd, $database);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>