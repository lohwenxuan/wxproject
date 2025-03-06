<?php
// Load config file if not already included
if (!defined("DB_HOST")) {
    require_once __DIR__ . "/config.php";
}

// Debugging: Log the database connection attempt
error_log("DATABASE: Connecting to MySQL with user " . DB_USER);

// Attempt to connect
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    error_log("DATABASE ERROR: " . $conn->connect_error);
    die("Database connection failed: " . $conn->connect_error);
}

error_log("DATABASE: Successfully connected");
?>
