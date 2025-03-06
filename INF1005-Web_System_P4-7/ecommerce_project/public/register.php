<!DOCTYPE html>
<html lang="en">

<head>
    <?php include  __DIR__ . "/../inc/head.inc.php"; ?>
    <title>Register</title>
    <link rel="stylesheet" href="main.css"> <!-- Ensure CSS is linked properly -->
</head>

<body>
    <?php include __DIR__ . "/../inc/nav.inc.php"; ?>

    <main class="container mt-4">
        <h1 class="mb-3">Member Registration</h1>
        <p>Already a member? <a href="login.php">Sign in here</a>.</p>

        <form action="process_register.php" method="post">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter first name">
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter last name" required maxlength="45">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required maxlength="45">
            </div>

            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter password" required minlength="6">
            </div>

            <div class="mb-3">
                <label for="pwd_confirm" class="form-label">Confirm Password:</label>
                <input type="password" id="pwd_confirm" name="pwd_confirm" class="form-control" placeholder="Confirm password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="agree" id="agree" class="form-check-input" required>
                <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </main>

    <?php include __DIR__ . "/../inc/footer.inc.php"; ?>
</body>

</html>