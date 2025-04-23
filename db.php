<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "logindb";  //YO nam ko database xampp server ma banaunu parcha
// yo database ma users table banaunu parcha ani tesma username ra password ko column huncha

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>