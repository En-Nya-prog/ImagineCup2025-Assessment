<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "school_system";

// Creating connection connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection between forms and database
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
