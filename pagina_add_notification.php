<?php
session_start();
// Controlla se l'utente è loggato
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

// Controlla se l'utente è un amministratore (implementa il controllo in base alle tue necessità)
//if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
//    header("Location: /index.php");
//    exit();
//}
global $conn;
include './php/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $message = $_POST['message'];
    $link = isset($_POST['link']) ? $_POST['link'] : null; // Aggiunto il campo link

    $stmt = $conn->prepare("INSERT INTO notifications (title, message, link) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Errore nella preparazione dello statement: " . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("sss", $title, $message, $link);

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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Password aggiornata con successo!</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section>               
                </body>
            </html>';
            
            // Reindirizza alla home page dopo 2 secondi
            header("refresh:2;http://posd.altervista.org");
        
      
    } else {
        echo "Errore: " . $stmt->error;
        header("refresh:2;url=/pagina_add_notification.php");
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="it">
	<?php
	include './php/head.php';
	?>
    <style>
    .containerAlter {
            margin: 50px auto;
            width: 90%;
            max-width: 800px;
            background-color: #dbdbdb;
            /* border: 2px solid #000000; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-shadow: -12px 22px 26px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
        }
        .logoAlter {
            margin: 40px;
            max-width: 50%;
            height: auto;
            width: 100px;
        }
        .message {
            margin: 40px;
            font-size: 1.2em;
            color: #333333;
        }
        </style>
	<body>
	<?php
    if ($isLoggedIn) {
        include './php/navbar.php';
    } else {
        include './php/navbar_normal.php';
    }
    ?> 
    
    
    
        <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
        <div class="containerPattern">
            <section class="imagePattern">
              <div class="imagePattern2" style="background-image: url('./img/report.jpg');"> 
              <h1 class="patternH1">Segnala Vulnerabilità</h1></div>
            </section>
            <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
            
            <form action="pagina_add_notification.php" method="post" style="margin: 40px;">
                <label for="title" style="font-size: 20px;">Titolo:</label>
                <input class="inputLogin" type="text" id="title" name="title" style="background: rgb(236,236,236); border: none" placeholder="Inserisci titolo..." required>
                <label for="message" style="font-size: 20px;">Messaggio:</label>
                <textarea id="message" name="message" style="width: 100%; margin-top: 6px; margin-bottom: 0; height: 120px; background: rgb(236,236,236); border: none" placeholder="Inserisci messaggio..." required></textarea>
                <label for="link" style="font-size: 20px;">Link:</label>
        		<input class="inputLogin" type="url" id="link" name="link" style="background: rgb(236,236,236); /* border: none; */ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: none; box-sizing: border-box; border-radius: 20px;" placeholder="Inserisci il link (opzionale)">
                <button class="buttonLogin" type="submit" style="margin-top: 20px;">Aggiungi</button>
            </form>
        </div>
        <?php else: ?>
        
         <div class="containerAlter">
        	<i class="fa-solid fa-ban" aria-hidden="true" style="margin: 50px; font-size: 90px; /* width: 0px; */"></i>
            
        	<div class="message">Non sei un amministratore. Non hai i permessi necessari per accedere a questa pagina.</div>
            <a href="/pagina_richiesta.php" class="buttonCard" style="margin: 40px">Fai richiesta</a>
        </div>
         
        <?php endif; ?>

    <?php
	include './php/footer.php';
	?>
    <?php
	include './php/script.php';
	?>
</body>
</html>
