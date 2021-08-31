<?php
$servername = "localhost";
$database = "employees";
$username = "root";
$password = "root";

$connect = new mysqli($servername, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>