<?php
$servername = "localhost";
$username = "u454985297_ezresumetech";
$password = "Madhur@2005";
$dbname = "u454985297_ezresumetech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>