<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("refresh:2;http://posd.altervista.org");
    exit();
}

include 'database.php';

$user_id = $_SESSION['user_id'];

// Recupera i dati dell'utente
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $email);
$stmt->fetch();
$stmt->close();

// Recupera le notifiche dal database
$notifications = [];
$stmt = $conn->prepare("SELECT title, message, created_at FROM notifications ORDER BY created_at DESC");
$stmt->execute();
$stmt->bind_result($title, $message, $created_at);
while ($stmt->fetch()) {
    $notifications[] = [
        'title' => $title,
        'message' => $message,
        'created_at' => $created_at
    ];
}
$stmt->close();
$conn->close();

// Salvare i dati dell'utente nella sessione per usarli nella pagina HTML
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

// Reindirizzamento alla pagina HTML
header("Location: /index.php");
exit();
?>
