<form action="/app/controllers/AuthController.php" method="POST">
    <label for="fname">First Name:</label>
    <input type="text" name="fname" required>

    <label for="lname">Last Name:</label>
    <input type="text" name="lname" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="password_confirm">Confirm Password:</label>
    <input type="password" name="password_confirm" required>

    <button type="submit" name="register">Register</button>
</form>
