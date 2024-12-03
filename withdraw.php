<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$binance_id = $_POST['binance_id'];
$users = loadUsers();
$userIndex = null;

foreach ($users as $index => $user) {
    if ($user['username'] === $_SESSION['user']['username']) {
        $userIndex = $index;
        break;
    }
}

if ($userIndex !== null && $users[$userIndex]['balance'] >= 1) { // Minimum withdrawal condition
    $amount = $users[$userIndex]['balance'];
    $users[$userIndex]['balance'] = 0; // Deduct balance

    saveUsers($users);

    // Log withdrawal
    $log = [
        'username' => $users[$userIndex]['username'],
        'binance_id' => $binance_id,
        'amount' => $amount,
        'date' => date('Y-m-d H:i:s')
    ];
    file_put_contents("withdraw.txt", json_encode($log) . PHP_EOL, FILE_APPEND);

    echo "Withdrawal of $$amount successful! Transaction logged.";
} else {
    echo "Insufficient balance!";
}
?>
