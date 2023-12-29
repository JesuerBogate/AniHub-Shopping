<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sample1';

// Create a database connection
$conn = mysqli_connect("localhost", "root", "", "sample1");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
