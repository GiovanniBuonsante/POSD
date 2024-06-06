<?php
//session_start();
//if (isset($_SESSION['user_id'])) {
//    header("Location: indexLoggato.php");
//    exit();
//}
//?>

<?php
session_start();
// Controlla se l'utente è loggato
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<html lang="en">
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
    
    <?php
    if ($isLoggedIn) {
    	if (file_exists(__DIR__ . '/blocco_notifiche.php')) {
                include __DIR__ . '/blocco_notifiche.php';
            } else {
                echo "<p>Errore: La pagina di richiesta non è disponibile.</p>";
            }
    } else {
        if (file_exists(__DIR__ . '/blocco_richiesta.php')) {
                include __DIR__ . '/blocco_richiesta.php';
            } else {
                echo "<p>Errore: La pagina di richiesta non è disponibile.</p>";
            }
    }
    ?> 

 
    <?php
		include './php/footer.php';
	?>
    <?php
        include './php/script.php';
    ?>
  </body>
</html>