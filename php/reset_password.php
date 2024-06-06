<?php
include 'database.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verifica il token
    $stmt = $conn->prepare("SELECT id, reset_token_expires FROM users WHERE reset_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $expires);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && strtotime($expires) > time()) {
        // Token valido, mostra il modulo di reimpostazione della password
        echo '
        <!DOCTYPE html>
        <html lang="it">
        <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Business website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
        padding-top: 60px;
      }
      
      .modal-content {
        max-width: 600px;
        border-radius: 20px;
        background-color: #fff;
        margin: 5px auto;
        width: 80%;
      }
      
      .containerLogin {
        padding: 16px;
        border-radius: 20px;
      }
      
      .inputLogin[type=text], .inputLogin[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 20px;
      }
      
      .buttonLogin {
        background-color: #232323;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 20px;
    	}
    </style>
    </head>
        <body>
            <div class="modal" style="display: block;">
              <form class="modal-content animate" action="update_password.php" method="post" onsubmit="return validatePassword()">
                <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
                <div class="containerLogin">
                	<h2>Reimposta Password</h2>
					<label for="password"><b>Nuova password</b></label>
                    <input class="inputLogin" type="password" id="new_password" placeholder="Inserisci nuova password" name="new_password" required>
					
                    <label for="password-confirm"><b>Conferma Password</b></label>
					<input class="inputLogin" type="password" placeholder="Conferma Password" name="password_confirm" id="password_confirm" required="">
                    
                    <button class="buttonLogin" type="submit">Aggiorna password</button>

                </div>

              </div>
            </form>
          </div>
          <script>
                  function validatePassword() {
                    var password = document.getElementById("new_password").value;
                    var confirmPassword = document.getElementById("password_confirm").value;
                    if (password !== confirmPassword) {
                      alert("Le password non corrispondono. Per favore, riprova.");
                      return false;
                    }
                    return true;
                  }
                </script>
        </body>
        </html>';
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Token non valido o scaduto.</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
                	<div class="loader"></div>
                </section> 
                </body>                
            </html>';
            header("refresh:2;http://posd.altervista.org");
    }

    $stmt->close();
    $conn->close();
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
                    <p style="color: #fff; margin-top: 100px; font-weight: bold; font-size: 20px;">Nessun token fornito.</p>
                    <p style="color: #fff;">Attendi qualche secondo, verrai indirizzato alla homepage.</p> 
					<div class="loader"></div>	
               </section>               
                </body>
            </html>';
            header("refresh:2;http://posd.altervista.org");
}
?>
