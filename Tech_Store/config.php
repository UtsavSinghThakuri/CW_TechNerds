<?php
$servername = "localhost";
$username = "root";
$password = ""; // Adjust if you have a password
$dbname = "online_store"; // Ensure this matches your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
