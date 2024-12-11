<?php
$servername = getenv('DB_SERVER') ?: "localhost";
$username = getenv('DB_USERNAME') ?: "root";
$password = getenv('DB_PASSWORD') ?: "";
$dbname = getenv('DB_NAME') ?: "crumbsnbrew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Log detailed error
    error_log("Database connection error: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);  // Display error message
}
?>