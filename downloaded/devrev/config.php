<?php
$servername = "localhost:3307";
$username = "root";
$psw = "";
$database = "flight_booking";

$conn = new mysqli($servername, $username, $psw, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>