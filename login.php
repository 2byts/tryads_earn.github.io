<?php
include 'db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $users = loadUsers();

    foreach ($users as $user) {
        if ($user['username'] === $username) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php");
            exit;
        }
    }

    echo "Invalid username!";
}
?>
