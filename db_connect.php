<?php
// Database credentials
$servername = "localhost";  // Your MySQL server (localhost for XAMPP)
$username = "root";         // Default MySQL username in XAMPP
$password = "";             // Default MySQL password in XAMPP (empty)
$dbname = "apsit_database"; // The name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully to the database!";
?>