<?php
session_start();
// Controlla se l'utente è loggato
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<html lang="it">
	<?php
	include './php/head.php';
	?> 
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .testo h1, h2, h3 {
            color: #2c3e50;
        }
        .testo a {
            color: #2980b9;
            text-decoration: none;
        }
        .testo a:hover {
            text-decoration: underline;
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
    <div class="containerPattern">
    
      <section class="imagePattern">
        <div class="imagePattern2" style="background-image: url('./img/tele.jpg');"> 
        <h1 class="patternH1">PKB</h1></div>
      </section>
      <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      	
      <section class="testo" style="margin: 40px;">
		<h1 style="text-align: center;">Benvenuti nella Privacy Knowledge Base: La tua Guida Affidabile per la Conformità alla Privacy</h1>
    <p>Ciao e benvenuti nella Privacy Knowledge Base (PKB)! Sappiamo che il mondo della privacy dei dati può essere complicato e, a volte, un po' spaventoso. Per questo siamo qui: per aiutarti a navigare in questo panorama complesso e assicurarti di essere sempre in regola con le normative.</p>
    <p>In un'epoca in cui la protezione delle informazioni personali è fondamentale, la nostra PKB è il tuo faro di orientamento. Se stai cercando risorse affidabili per garantire la sicurezza dei tuoi dati e la conformità alle leggi, sei nel posto giusto.</p>
    <p>La nostra PKB è una miniera di informazioni, strumenti e risorse pensate per supportare te e la tua organizzazione. Che tu sia uno sviluppatore che sta creando software sicuro, un responsabile della sicurezza informatica in cerca di strategie per proteggere i dati aziendali, o un'azienda che vuole essere sempre in regola con le normative sulla privacy, siamo qui per aiutarti.</p>
    <h2 style="text-align: center;">Ecco cosa puoi trovare nella nostra PKB:</h2>
    <ul>
        <li><strong>Privacy Patterns:</strong> Soluzioni pratiche che ti aiutano a mitigare le vulnerabilità e a proteggere i dati.</li>
        <li><strong>Normative come il GDPR:</strong> Informazioni dettagliate sui requisiti legali e le migliori pratiche per essere sempre conformi.</li>
        <li><strong>Principi della Privacy by Design:</strong> Approcci proattivi per integrare la privacy direttamente nella progettazione dei tuoi sistemi.</li>
        <li><strong>ISO 9241-210:</strong> Linee guida per la progettazione centrata sull'utente</li>
        <li><strong>Notifiche e aggiornamenti:</strong> Aggiornameti su tutte le informazioni che trovi nella pkb.         </li>
    </ul>
    <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; /* width: 50%; */ margin: 50px 200px 50px 200px;"></div>
    <p>Ma non finisce qui. La nostra PKB è interattiva e ti offre strumenti per esplorare visivamente le connessioni tra i vari elementi. Puoi anche contribuire attivamente segnalando nuove vulnerabilità e aiutando a migliorare continuamente le risorse che offriamo.</p>
    <p>Vogliamo creare una cultura della privacy e della sicurezza dei dati. La nostra missione è fornire a te tutte le conoscenze e le risorse di cui hai bisogno per affrontare con fiducia il mondo della privacy dei dati.</p>
    <p style="font-size: 100px; margin: 30px 0 0 0; text-align: center;"><i class="fa-solid fa-users" aria-hidden="true"></i></p>
    <p style="margin: 50px; text-align: center;">Grazie per essere qui. Insieme, possiamo costruire un futuro digitale sicuro e conforme.</p>

       
      </section>
    </div>
    <?php
      include './php/footer.php';
      ?>
      <script>
        function toggleDetails(element) {
            element.classList.toggle('active');
        }
    </script>
    <?php
      include './php/script.php';
      ?>
</body>
</html>