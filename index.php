<?php
// No more require_once or Dotenv stuff

// Just manually set your DB config here:
$servername = "localhost";
$username = "root";
$password = "Pass@4321";
$dbname = "docnet"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
