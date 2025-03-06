<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../../config/database.php"; // Database connection

class AuthController
{
    public function login() {
        $email = isset($_POST["email"]) ? $this->sanitize($_POST["email"]) : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $errorMsg = "";
        $success = true;

        if (empty($email) || empty($password)) {
            $errorMsg = "Email and password are required.";
            $success = false;
        }

        if ($success) {
            $success = $this->authenticateUser($email, $password, $errorMsg);
        }

        include BASE_PATH . "/../inc/login_result.inc.php";
        exit();
    }

    public function register()
    {
        $fname = isset($_POST["fname"]) ? $this->sanitize($_POST["fname"]) : "";
        $lname = isset($_POST["lname"]) ? $this->sanitize($_POST["lname"]) : "";
        $email = isset($_POST["email"]) ? $this->sanitize($_POST["email"]) : "";
        $pwd = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        $pwd_confirm = isset($_POST["pwd_confirm"]) ? $_POST["pwd_confirm"] : "";
        $success = true;
        $errorMsg = "";

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Invalid email format.";
            $success = false;
        }
        if ($pwd !== $pwd_confirm) {
            $errorMsg = "Passwords do not match.";
            $success = false;
        }

        if ($success) {
            $this->saveUser($fname, $lname, $email, $pwd);
        }

        include "../../views/auth/register_result.inc.php";
    }

    private function authenticateUser($email, $pwd, &$errorMsg)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pwd, $row["password"])) {
                $_SESSION["loggedin"] = true;
                $_SESSION["email"] = $email;
                $_SESSION["fname"] = $row["fname"];
                $_SESSION["lname"] = $row["lname"];
                return true;
            } else {
                $errorMsg = "Invalid credentials.";
            }
        } else {
            $errorMsg = "User not found.";
        }

        $stmt->close();
        return false;
    }

    private function saveUser($fname, $lname, $email, $pwd)
    {
        global $conn;
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPwd);

        if ($stmt->execute()) {
            $_SESSION["successMsg"] = "Registration successful! Please log in.";
        } else {
            $_SESSION["errorMsg"] = "Registration failed.";
        }

        $stmt->close();
    }

    private function sanitize($data)
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }
}

// Handle form requests
$auth = new AuthController();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["login"])) {
        $auth->login();
    } elseif (isset($_POST["register"])) {
        $auth->register();
    }
}
