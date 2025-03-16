<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP
$dbname = "apsit_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database is working and connected successfully!";
?>