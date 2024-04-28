<?php

$host ="localhost:3307";
$username="root";
$password="";
$dbname = "login";
$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn) {    
    die("Connection Failed". mysqli_connect_error());            
}

?>
