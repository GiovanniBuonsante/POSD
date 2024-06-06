<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /index.php");
    exit();
}

include 'database.php';

// Ottieni i dati dell'utente dalla sessione
$nome_utente = $_SESSION['username'];
$email = $_SESSION['email'];

// Verifica se l'utente ha già inviato una richiesta
$sql = "SELECT id FROM richieste_admin WHERE nome_utente = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome_utente, $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Hai già inviato la richiesta!</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
} else {
    // Prepara e lega
    $stmt = $conn->prepare("INSERT INTO richieste_admin (nome_utente, email, motivo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome_utente, $email, $motivo);

    // Imposta i parametri e esegui
    $motivo = $_POST['reason'];

    if ($stmt->execute()) {
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Richiesta inviata con successo!</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
    } else {
        echo "Errore: " . $stmt->error;
        // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
	}
}
$stmt->close();
$conn->close();
?>
