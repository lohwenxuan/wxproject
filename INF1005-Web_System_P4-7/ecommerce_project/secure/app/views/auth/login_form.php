<?php
if (!defined('BASE_URL')) {
    require_once __DIR__ . "/../../../config/config.php";
}
?>

<form action="<?= BASE_URL ?>/process_login.php" method="POST">
    <!-- Display error messages -->
    <?php if (isset($_SESSION["errorMsg"])): ?>
        <div class="alert alert-danger text-center">
            <?= $_SESSION["errorMsg"]; ?>
        </div>
        <?php unset($_SESSION["errorMsg"]); ?>
    <?php endif; ?>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control"
               placeholder="Enter email" required maxlength="45">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control"
               placeholder="Enter password" required>
    </div>

    <div class="text-center">
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
    </div>
</form>
