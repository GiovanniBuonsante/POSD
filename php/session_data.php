<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'Non autorizzato']);
    exit();
}

$response = [
    'username' => $_SESSION['username'],
    'email' => $_SESSION['email']
];

echo json_encode($response);
