<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /index.php");
    exit();
}

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Controlla se l'username o l'email sono già in uso da un altro utente
    $stmt = $conn->prepare("SELECT id FROM users WHERE (username = ? OR email = ?) AND id != ?");
    $stmt->bind_param("ssi", $username, $email, $user_id);
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Errore: Username o email già in uso.</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
    } else {
        $stmt->close();

        // Aggiorna i dati dell'utente
        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $user_id);

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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Dati aggiornati con successo!</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;url=account.php");
        } else {
            echo "Errore: " . $stmt->error;
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
        }
    }

    $stmt->close();
    $conn->close();
}
?>
