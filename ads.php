<?php
session_start();

// Redirect to the dashboard if the user is logged in
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
    <title>Advertisements</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <div class="container">
        <h1>Advertisements</h1>
        <div class="ads">
            <div class="ad">Ad 1: Get $10 bonus on your first deposit!</div>
            <div class="ad">Ad 2: Refer a friend and earn more!</div>
            <div class="ad">Ad 3: Join our Binance partnership program.</div>
        </div>
        <div class="buttons">
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
    <script src="assets/scripts.js"></script>
</body>
</html>
