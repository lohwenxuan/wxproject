<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . "/../secure/bootstrap.php";

// Ensure it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Authenticate user using AuthController
    $auth = new AuthController();
    $result = $auth->login($email, $password);

    if ($result === true) {
        header("Location: " . BASE_URL . "/index.php");
        exit();
    } else {
        $_SESSION["errorMsg"] = "Invalid email or password.";
        header("Location: " . BASE_URL . "/login.php");
        exit();
    }
}

// If accessed directly, redirect to login
header("Location: " . BASE_URL . "/login.php");
exit();
?>
