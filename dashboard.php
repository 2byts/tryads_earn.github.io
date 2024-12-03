<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['fullname']); ?></h1>
    <p>Your balance: $<?php echo number_format($user['balance'], 2); ?></p>

    <form action="withdraw.php" method="post">
        <label for="binance_id">Binance User ID:</label>
        <input type="text" name="binance_id" id="binance_id" required>
        <button type="submit">Withdraw</button>
    </form>
</body>
</html>
