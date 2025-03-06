<?php
error_log("BOOTSTRAP: Starting bootstrap.php");

// Define the correct base path for the secure directory
define("BASE_PATH", __DIR__);
error_log("BOOTSTRAP: BASE_PATH set to " . BASE_PATH);

// Load configuration files
require_once BASE_PATH . "/config/config.php";
require_once BASE_PATH . "/config/database.php";

// ✅ Corrected path: Load AuthController.php properly
require_once BASE_PATH . "/app/controllers/AuthController.php";  

// Start the session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Instantiate controllers
$auth = new AuthController();

error_log("BOOTSTRAP: Completed bootstrap.php");
?>
