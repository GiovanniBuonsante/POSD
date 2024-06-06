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
            <div class="imagePattern2"> 
            <h1 class="patternH1">Privacy Pattern</h1></div>
        </section>
        <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
        <div style="text-align: center; margin-bottom: 40px; margin-top: 40px">
        	<a href="/pagina_strategie.php" class="buttonPattern">Strategie</a>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="gestobb">
            <h2>011. Gestione delle obbligazioni</h2>
            <p><strong class="strategiaEnf">Strategia: Enforce</strong></p>
            <p>Il pattern consente di trasferire e gestire le obbligazioni relative alla condivisione, archiviazione e elaborazione dei dati quando i dati vengono condivisi tra più parti.</p>
            <div class="pattern-details">
                <p><strong>Obiettivo dello sviluppatore:</strong> Garantire che più parti siano consapevoli e rispettino le politiche utente/organizzative richieste mentre i dati personali e sensibili vengono condivisi successivamente tra una serie di parti che archiviano o elaborano tali dati.</p>
                <p><strong>Contesto:</strong> Scenari di comprensione e specificazione del contesto d'uso</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Understanding and specifying the context of use</p>
                <p><strong>Articoli GDPR:</strong> Articolo 28 – Responsabile del trattamento</p>
                <p><strong>Principi di privacy:</strong> Funzionalità completa</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Configurazione di sicurezza errata, A07: Fallimenti di identificazione e autenticazione, A08: Fallimenti di integrità del software e dei dati, A09: Fallimenti di registrazione e monitoraggio della sicurezza</p>
                <p><strong>ID CWE:</strong> CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione errata, CWE-502: Deserializzazione di dati non attendibili</p>
                <p><strong>Esempio:</strong> Un fornitore di servizi subappalta servizi, ma richiede che i dati siano eliminati dopo un certo tempo e che il fornitore di servizi sia informato in caso di ulteriore subappalto.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="poliad">
            <h2>012. Politiche adesive</h2>
            <p><strong class="strategiaEnf">Strategia: Enforce</strong></p>
            <p>Le politiche leggibili da macchina vengono attaccate ai dati per definire l'uso consentito e gli obblighi mentre viaggiano attraverso più parti, consentendo agli utenti di migliorare il controllo sulle proprie informazioni personali.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Le parti multiple sono consapevoli e agiscono in base a una determinata politica quando i dati sensibili alla privacy vengono passati lungo le varie parti successive che archiviano, elaborano e condividono tali dati.</p>
                <p><strong>MVC:</strong> Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Producing design solutions</p>
                <p><strong>Articoli GDPR:</strong> Articolo 25 – Protezione dei dati mediante progettazione e impostazioni predefinite, Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di privacy by design:</strong> Funzionalità completa, Privacy integrata nel design</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Configurazione di sicurezza errata, A07: Fallimenti di identificazione e autenticazione, A08: Fallimenti di integrità del software e dei dati, A09: Fallimenti di registrazione e monitoraggio della sicurezza</p>
                <p><strong>ID CWE:</strong> CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione errata, CWE-502: Deserializzazione di dati non attendibili</p>
                <p><strong>Esempio 1:</strong> Quando i dati vengono condivisi da un'organizzazione, possono utilizzare politiche di riservatezza per far rispettare la privacy degli utenti da parte di organizzazioni terze che utilizzano, elaborano e archiviano tali dati. Ad esempio, un ospedale può condividere dati con organizzazioni terze che richiedono di aderire a specifiche politiche sulla privacy associate ai dati.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>013. Archivio di dati personali</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong><strong class="strategiaSep">Strategia: Separate</strong></p>
            <p>Le persone mantengono il controllo sui loro dati personali archiviati su un dispositivo personale.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Il pattern è applicabile a tutti i dati prodotti dal soggetto dei dati (o originariamente sotto il suo controllo) rispetto ai dati su di lui prodotti da terze parti.</p>
                <p><strong>MVC:</strong> Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Producing design solutions</p>
                <p><strong>Articolo GDPR:</strong> Articolo 25 – Protezione dei dati mediante progettazione e impostazioni predefinite</p>
                <p><strong>Principi di privacy by design:</strong> Privacy integrata nel design, Rispetto della privacy dell'utente, Privacy come impostazione predefinita</p>
                <p><strong>Rischi di Sicurezza:</strong> A08: Fallimenti di integrità del software e dei dati, A09: Fallimenti di registrazione e monitoraggio della sicurezza</p>
                <p><strong>ID CWE:</strong> CWE-502: Deserializzazione di dati non attendibili</p>
                <p><strong>Esempio 1:</strong> Nel settore sanitario, i pazienti desiderano mantenere il controllo sui loro dati sanitari ma anche concedere accesso specifico a alcuni professionisti sanitari.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>014. Modello di confinamento dei dati degli utenti</h2>
            <p><strong class="strategiaSep">Strategia: Separate</strong></p>
            <p>Evitare la raccolta centralizzata di dati personali spostando una certa quantità di elaborazione dei dati personali in ambienti fidati dagli utenti (ad es. i propri dispositivi). Consentire agli utenti di controllare esattamente i dati che condividono con i fornitori di servizi.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Questo pattern può essere utilizzato ogni volta che la raccolta di dati personali con uno scopo specifico e legittimo rappresenta comunque un livello rilevante di minaccia per la privacy degli utenti.</p>
                <p><strong>MVC:</strong>Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Producing design solutions</p>
                <p><strong>Articolo GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di privacy by design:</strong> Proattivo, non reattivo, Privacy integrata nel design</p>
                <p><strong>Rischi di Sicurezza:</strong> A01: Controllo di accesso non valido, A07: Fallimenti di identificazione e autenticazione</p>
                <p><strong>ID CWE:</strong> CWE-22: Limitazione non valida di un percorso a una directory restritta ('Trasversale del percorso'), CWE-862: Autorizzazione mancante, CWE-863: Autorizzazione non corretta, CWE-276: Autorizzazioni predefinite non corrette, CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione non corretta</p>
                <p><strong>Esempio:</strong> NA</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>015. Blacklist basata sulla reputazione anonima</h2>
            <p><strong class="strategiaSep">Strategia: Separate</strong><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Sbarazzarsi dei teppisti senza neanche sapere chi siano.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un fornitore di servizi fornisce un servizio agli utenti che accedono anonimamente e che potrebbero fare un cattivo uso del servizio.</p>
                <p><strong>MVC:</strong>Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Understanding and specifying the context of use, 7.4 Producing design solutions</p>
                <p><strong>Articolo GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di privacy by design:</strong> Privacy integrata nel design, Funzionalità completa</p>
                <p><strong>Rischi di Sicurezza:</strong> A07: Fallimenti di identificazione e autenticazione</p>
                <p><strong>ID CWE:</strong> CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione non corretta</p>
                <p><strong>Esempio:</strong> Wikipedia consente a qualsiasi visitatore di modificare i suoi contenuti, anche senza essere stati autenticati. Alcuni visitatori malintenzionati possono vandalizzare i contenuti. Se un visitatore proveniente dallo stesso indirizzo IP continua a vandalizzare il sito, acquisirà una cattiva reputazione e il suo IP verrà vietato di modificare ulteriormente i contenuti (tuttavia, gli utenti che accedono tramite un proxy di rete di anonimato Tor non possono essere identificati dai loro IP e quindi la loro reputazione non può essere tracciata).</p>
            </div>
        </div>


    </div>
    <div class="page-num" style="display: flex; justify-content: center; margin-bottom: 20px;">
    	<button class="arrow"onclick="location.href='/pagina_pattern2.php'">
      		<i class="fa-solid fa-arrow-left"></i>
        </button>
      <p style="margin: 10px 20px;">Pagina 3</p>
        <button class="arrow"onclick="location.href='/pagina_pattern4.php'">
      		<i class="fa-solid fa-arrow-right"></i>
        </button>
      
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