<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
global $conn;
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, admin FROM users WHERE username = ?");
    if ($stmt === false) {
        die("Errore nella preparazione dello statement: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password, $admin);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Creare una sessione
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = ($admin == 1);
        header("Location: account.php");
        exit();
    } else {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            	<head>
                	<meta name="viewport" content="width=device-width, initial-scale=1.0">
                	<meta charset="UTF-8">
                	<title>POSD</title>
                	<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
                	<link rel="shortcut icon" type="images/x-icon" href="/favicon.ico">
                	<link rel="preconnect" href="https://fonts.googleapis.com">
                	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
                	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                	<link rel="stylesheet" href="/styles.css">
                	<script src="https://kit.fontawesome.com/b151178780.js"></script>
            	</head>
            	<body> 
                <section style="margin: 20px; border-radius: 50px; /* margin-top: 200px; */ height: 500px; background: #555; text-align: center; padding: 50px;">
					<img src="/img/logo.png" alt="POSD" style="width: 120px;">
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Username o password errati.</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            
            // Reindirizza alla home page dopo 3 secondi
            header("refresh:2;http://posd.altervista.org");
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Richiesta non valida.";
    // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
}
