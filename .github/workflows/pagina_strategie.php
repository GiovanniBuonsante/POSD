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
      <div class="imagePattern2" style="background-image: url('./img/strategy.jpeg');"> 
      <h1 class="patternH1">Strategie</h1></div>
    </section>
        <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      	<div style="text-align: center; margin-bottom: 40px; margin-top: 40px;">
        	<a href="/pagina_pattern.php" class="buttonPattern">Pattern</a>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaMin" style="text-align: center;">Minimize (Minimizzare)</h2>
            <p><strong>Obiettivo:</strong> Ridurre al minimo la raccolta e l'uso dei dati personali.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Raccolta Dati:</strong> Raccogli solo i dati strettamente necessari per il funzionamento del servizio.</p>
                <ul>
                    <li>・Esempio: Invece di raccogliere la data di nascita completa, raccogli solo l'età se è sufficiente.</li>
                </ul>
                <p><strong>Retenzione Dati:</strong> Elimina i dati personali non appena non sono più necessari.</p>
                <ul>
                    <li>・Esempio: Implementare una politica di eliminazione automatica dei dati dopo un periodo di inattività dell'utente.</li>
                </ul>
                <p><strong>Anonimizzazione:</strong> Utilizza tecniche di anonimizzazione per rimuovere informazioni identificabili.</p>
                <ul>
                    <li>・Esempio: Rimuovere gli identificatori univoci dai set di dati prima di utilizzarli per l'analisi.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaHid" style="text-align: center;">Hide (Nascondere)</h2>
            <p><strong>Obiettivo:</strong> Nascondere i dati personali o rendere difficile l'accesso non autorizzato.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Crittografia:</strong> Crittografa i dati sia in transito che a riposo.</p>
                <ul>
                    <li>・Esempio: Utilizzare TLS per proteggere i dati durante la trasmissione e AES per i dati archiviati.</li>
                </ul>
                <p><strong>Pseudonimizzazione:</strong> Sostituisci i dati identificativi con pseudonimi.</p>
                <ul>
                    <li>・Esempio: Utilizzare ID utente generati casualmente invece di nomi reali.</li>
                </ul>
                <p><strong>Accesso Limitato:</strong> Implementa controlli di accesso rigorosi basati sui ruoli.</p>
                <ul>
                    <li>・Esempio: Consentire l'accesso ai dati personali solo a personale autorizzato.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaAbs" style="text-align: center;">Abstract (Astrarre)</h2>
            <p><strong>Obiettivo:</strong> Generalizzare i dati personali per ridurre la specificità.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Livelli di Dettaglio:</strong> Fornisci opzioni per condividere dati con diversi livelli di dettaglio.</p>
                <ul>
                    <li>・Esempio: Consentire agli utenti di condividere la loro posizione a livello di città piuttosto che di indirizzo preciso.</li>
                </ul>
                <p><strong>Dati Aggregati:</strong> Utilizza dati aggregati anziché individuali per analisi e reporting.</p>
                <ul>
                    <li>・Esempio: Pubblicare statistiche sui gruppi di utenti senza rivelare informazioni personali specifiche.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaInf" style="text-align: center;">Inform (Informare)</h2>
            <p><strong>Obiettivo:</strong> Garantire che gli utenti siano consapevoli di come vengono trattati i loro dati.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Trasparenza:</strong> Fornire informative sulla privacy chiare e dettagliate.</p>
                <ul>
                    <li>・Esempio: Creare una sezione FAQ che spieghi in modo semplice come vengono raccolti, utilizzati e protetti i dati.</li>
                </ul>
                <p><strong>Notifiche:</strong> Informare gli utenti quando ci sono modifiche alle politiche sulla privacy.</p>
                <ul>
                    <li>・Esempio: Inviare email o notifiche in-app in caso di aggiornamenti alle policy.</li>
                </ul>
                <p><strong>Educazione:</strong> Offrire suggerimenti e consigli su come mantenere i propri dati al sicuro.</p>
                <ul>
                    <li>・Esempio: Implementare una guida interattiva sulla creazione di password sicure.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaCon" style="text-align: center;">Control (Controllare)</h2>
            <p><strong>Obiettivo:</strong> Dare agli utenti il controllo sui propri dati personali.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Consenso:</strong> Raccogliere il consenso esplicito degli utenti prima di trattare i loro dati.</p>
                <ul>
                    <li>・Esempio: Utilizzare caselle di controllo per ottenere il consenso informato durante la registrazione.</li>
                </ul>
                <p><strong>Preferenze Utente:</strong> Fornire strumenti per la gestione delle preferenze di privacy.</p>
                <ul>
                    <li>・Esempio: Consentire agli utenti di selezionare quali dati vogliono condividere e con chi.</li>
                </ul>
                <p><strong>Accesso e Rettifica:</strong> Consentire agli utenti di accedere, modificare e cancellare i propri dati.</p>
                <ul>
                    <li>・Esempio: Implementare un portale utente dove possono visualizzare e aggiornare le loro informazioni personali.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaEnf" style="text-align: center;">Enforce (Applicare)</h2>
            <p><strong>Obiettivo:</strong> Assicurarsi che le politiche di privacy siano seguite.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Policy di Conformità:</strong> Implementare politiche rigorose per la gestione dei dati.</p>
                <ul>
                    <li>・Esempio: Creare una politica interna per garantire che tutte le operazioni di trattamento dati siano conformi al GDPR.</li>
                </ul>
                <p><strong>Monitoraggio e Auditing:</strong> Effettuare controlli regolari per garantire la conformità alle politiche.</p>
                <ul>
                    <li>・Esempio: Utilizzare strumenti di monitoraggio per rilevare e segnalare eventuali violazioni delle politiche.</li>
                </ul>
                <p><strong>Sanzioni:</strong> Stabilire conseguenze per la non conformità.</p>
                <ul>
                    <li>・Esempio: Definire penalità per i dipendenti che non rispettano le linee guida sulla privacy.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2 class="strategiaSep" style="text-align: center;">Separate (Separare)</h2>
            <p><strong>Obiettivo:</strong> Separare i dati personali dai dati non personali per ridurre i rischi.</p>
            <div class="pattern-details">
                <p><strong>Implementazione:</strong></p>
                <p><strong>Architettura di Sistema:</strong> Progettare sistemi in modo che i dati personali siano separati dai dati operativi.</p>
                <ul>
                    <li>・Esempio: Utilizzare database separati per i dati personali e per i dati anonimi o aggregati.</li>
                </ul>
                <p><strong>Isolamento delle Funzioni:</strong> Isolare le funzioni che trattano dati personali da quelle che non lo fanno.</p>
                <ul>
                    <li>・Esempio: Implementare microservizi distinti per gestire i dati personali e altre funzionalità dell'applicazione.</li>
                </ul>
                <p><strong>Controllo degli Accessi:</strong> Utilizzare controlli di accesso granulari per separare i livelli di accesso ai dati.</p>
                <ul>
                    <li>・Esempio: Implementare ruoli e permessi specifici per garantire che solo personale autorizzato possa accedere ai dati personali.</li>
                </ul>
            </div>
        </div>
               

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