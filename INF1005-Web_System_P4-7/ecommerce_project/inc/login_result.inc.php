<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once __DIR__ . "/head.inc.php"; 
    ?>
    <title>Login Results</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/main.css"> //relook at this 
</head>

<body>
    <main class="container text-center mt-5">
        <div class="card p-4 shadow-sm">
            <?php if ($success): ?>
                <h2 class="text-success">Login successful!</h2>
                <p>Welcome back, <?= htmlspecialchars($_SESSION["fname"]) ?>.</p>
                <a href="<?= BASE_URL ?>/index.php" class="btn btn-success">Return to Home</a>
            <?php else: ?>
                <h2 class="text-danger">Oops!</h2>
                <p>The following errors were detected:</p>
                <p class="text-muted"><?= htmlspecialchars($errorMsg) ?></p>
                <a href="<?= BASE_URL ?>/login.php" class="btn btn-warning">Return to Login</a>
            <?php endif; ?>
        </div>
        <p class="mt-4 text-muted">Copyright &copy; 2023 World of Pets Pte. Ltd.</p>
    </main>
</body>

</html>