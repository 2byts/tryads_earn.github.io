<?php
session_start();

// Redirect to the dashboard if the user is already logged in
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Wallet System</h1>
        <div class="buttons">
            <a href="register.php" class="btn">Register</a>
            <a href="login.php" class="btn">Login</a>
        </div>
    </div>
    <script src="assets/scripts.js"></script>
</body>
</html>
