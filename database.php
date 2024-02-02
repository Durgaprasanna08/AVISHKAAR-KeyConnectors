<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "4257";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// $conn = mysqli_connect('localhost', 'root', 'your_password', 'login_register');

if (!$conn) {
    die("Something went wrong;");
}

?>
