<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load config file to get BASE_URL
require_once __DIR__ . "/../secure/config/config.php";
?>
<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL ?>/index.php">
            <img src="<?= BASE_URL ?>/images/logo.jpeg" alt="World of Pets Logo" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/index.php">Home</a>
                <a class="nav-link" href="#dogs">Dogs</a>
                <a class="nav-link" href="#cats">Cats</a>
            </div>
            <!-- Right-aligned Login/Logout and Register buttons -->
            <div class="navbar-nav ms-auto">
                <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                    <span class="navbar-text me-2 text-white">Welcome, <?= htmlspecialchars($_SESSION["fname"]) ?>!</span>
                    <a href="<?= BASE_URL ?>/logout.php" class="btn btn-outline-light btn-lg">Logout</a>
                <?php else: ?>
                    <a href="<?= BASE_URL ?>/login.php" class="btn btn-outline-light me-2 btn-lg">Login</a>
                    <a href="<?= BASE_URL ?>/register.php" class="btn btn-primary btn-lg">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
