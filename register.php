<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname'];

    $users = loadUsers();

    // Check if the username or email already exists
    foreach ($users as $user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            echo "Username or email already exists!";
            exit;
        }
    }

    // Add the new user
    $users[] = [
        'username' => $username,
        'email' => $email,
        'phone' => $phone,
        'fullname' => $fullname,
        'balance' => 0.0 // Default balance
    ];
    saveUsers($users);

    echo "Registration successful!";
}
?>
