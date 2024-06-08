<?php
global $conn;
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    // Verifica che il token non sia vuoto
    if (empty($token)) {
        echo "Token non fornito.";
        exit();
    }

    // Verifica che la nuova password non sia vuota
    if (empty($new_password)) {
        echo "La nuova password non può essere vuota.";
        exit();
    }

    // Verifica il token e la sua scadenza
    $stmt = $conn->prepare("SELECT id FROM users WHERE reset_token = ? AND reset_token_expires > NOW()");
    if ($stmt === false) {
        echo "Errore nella preparazione dello statement: " . $conn->error;
        exit();
    }

    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        // Token valido, aggiorna la password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Aggiorna la password nel database e rimuovi il token di reset
        $update_stmt = $conn->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_token_expires = NULL WHERE id = ?");
        if ($update_stmt === false) {
            echo "Errore nella preparazione dello statement di aggiornamento: " . $conn->error;
            exit();
        }

        $update_stmt->bind_param("si", $hashed_password, $user_id);

        if ($update_stmt->execute()) {
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Password aggiornata con successo!</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
        } else {
            echo "Errore durante l'aggiornamento della password: " . $update_stmt->error;
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
        }

        $update_stmt->close();
    } else {
        echo "Token non valido o scaduto.";
        // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Richiesta non valida.";
}
