<?php
function loadUsers() {
    if (!file_exists("db.txt")) {
        return [];
    }
    $data = file_get_contents("db.txt");
    return json_decode($data, true) ?? [];
}

function saveUsers($users) {
    file_put_contents("db.txt", json_encode($users, JSON_PRETTY_PRINT));
}
?>
