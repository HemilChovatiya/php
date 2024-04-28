<?php
// Logout the user and destroy the session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header('Location: signin.html');
exit();
?>