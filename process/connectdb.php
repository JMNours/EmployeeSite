<?php
$servername = "localhost";
$database = "employees";
$username = "root";
$password = "root";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>