<?php
// Ensure session is only started once
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load config file
// require_once __DIR__ . "/../secure/config/config.php";

//load bootstrap
require_once __DIR__ . "/../secure/bootstrap.php";

// Load head section (this already includes Bootstrap & CSS)
require_once __DIR__ . "/../inc/head.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member Login</title>
</head>

<body>
    <?php include __DIR__ . "/../inc/nav.inc.php"; ?>

    <main class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-3 text-center">Member Login</h1>
                <p class="text-center">
                    Existing members log in here. For new members, please go to the
                    <a href="register.php">Member Registration page</a>.
                </p>

                <!-- Include the actual login form -->
                <?php include __DIR__ . "/../secure/app/views/auth/login_form.php"; ?>

                <p class="text-center mt-3">
                    <small>&copy; 2023 World of Pets Pte. Ltd.</small>
                </p>
            </div>
        </div>
    </main>

    <?php include __DIR__ . "/../inc/footer.inc.php"; ?>
</body>
</html>
