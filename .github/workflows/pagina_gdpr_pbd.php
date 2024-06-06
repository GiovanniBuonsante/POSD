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
        <div class="imagePattern2" style="background-image: url('./img/gdpr.jpg');"> 
        <h1 class="patternH1">GDPR e Privacy by Design</h1></div>
      </section>
      <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      <section class="testo" style="margin: 40px;">
        <h2 style="margin: 30px; text-align: center;">Informazioni sugli Articoli Specifici del GDPR</h2>
        <p>Il Regolamento Generale sulla Protezione dei Dati (GDPR) è una normativa dell'Unione Europea che regola il trattamento dei dati personali. Alcuni articoli chiave del GDPR includono:</p>
        <h3><strong>Articolo 5:</strong> Principi relativi al trattamento dei dati personali</h3>
        <p>Questo articolo stabilisce i principi fondamentali che devono essere seguiti nel trattamento dei dati personali, tra cui liceità, correttezza, trasparenza, limitazione della finalità, minimizzazione dei dati, accuratezza, limitazione della conservazione, integrità e riservatezza.</p>
        <ul>
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern5.php#data">Minimizzazione dei Dati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>

        <h3><strong>Articolo 6:</strong> Liceità del trattamento</h3>
        <p>Questo articolo definisce le condizioni sotto le quali il trattamento dei dati personali è considerato lecito, tra cui il consenso dell'interessato, l'esecuzione di un contratto, l'adempimento di un obbligo legale, la protezione degli interessi vitali, l'esecuzione di un compito di interesse pubblico e il legittimo interesse del titolare del trattamento.</p>
        <ul> 
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern4.php#recip">Reciprocità<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        </ul>
        
        <h3><strong>Articolo 12:</strong> Informazioni, comunicazioni e modalità trasparenti per l'esercizio dei diritti dell'interessato</h3>
        <p>Questo articolo richiede che il titolare del trattamento fornisca all'interessato informazioni chiare e trasparenti sul trattamento dei suoi dati personali, e che le comunicazioni siano facilmente accessibili e comprensibili.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern3.php#poliad">Politiche adesive<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 13:</strong> Informazioni da fornire qualora i dati personali siano raccolti presso l'interessato</h3>
        <p>Questo articolo specifica le informazioni che devono essere fornite all'interessato al momento della raccolta dei suoi dati personali, come l'identità del titolare del trattamento, le finalità del trattamento, i destinatari dei dati, e i diritti dell'interessato.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern4.php#recip">Reciprocità<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 25:</strong> Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita</h3>
        <p>Questo articolo richiede che i principi di protezione dei dati siano integrati nei processi e nei sistemi fin dalle prime fasi di progettazione, e che le impostazioni predefinite garantiscano il massimo livello di protezione dei dati personali.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern2.php#onion">Onion Routing<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            <li><a href="/pagina_pattern5.php#data">Minimizzazione dei Dati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        </ul>
        
        <h3><strong>Articolo 28:</strong> Responsabile del trattamento</h3>
        <p>Questo articolo stabilisce i requisiti per la designazione di responsabili del trattamento dei dati, che devono agire solo su istruzione del titolare del trattamento e adottare misure tecniche e organizzative adeguate per garantire la protezione dei dati personali.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="//pagina_pattern5.php#firm">Firma un accordo per risolvere la mancanza di fiducia nell'utilizzo dei dati privati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern3.php#gestobb">Gestione delle obbligazioni<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 32:</strong> Sicurezza del trattamento</h3>
        <p>Questo articolo richiede che il titolare e il responsabile del trattamento implementino misure tecniche e organizzative adeguate per garantire un livello di sicurezza adeguato al rischio, tra cui la cifratura e la pseudonimizzazione dei dati personali.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern2.php#critto">Crittografia con chiavi gestite dall'utente<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern5.php#passw">Password sicure informate<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 33:</strong> Notifica di una violazione dei dati personali all'autorità di controllo</h3>
        <p>Questo articolo impone al titolare del trattamento di notificare qualsiasi violazione dei dati personali all'autorità di controllo competente entro 72 ore dalla scoperta della violazione, a meno che la violazione non presenti un rischio per i diritti e le libertà delle persone fisiche.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern.php#moddati">Modello di notifica della violazione dei dati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern.php#attins">Attività insolite<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 34:</strong> Comunicazione di una violazione dei dati personali all'interessato</h3>
        <p>Questo articolo richiede che il titolare del trattamento comunichi senza ingiustificato ritardo all'interessato qualsiasi violazione dei dati personali che possa comportare un rischio elevato per i suoi diritti e le sue libertà.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern.php#moddati">Modello di notifica della violazione dei dati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern2.php#assim">Asimmetria Minima dell'Informazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <h3><strong>Articolo 35:</strong> Valutazione d'impatto sulla protezione dei dati</h3>
        <p>Questo articolo richiede che il titolare del trattamento effettui una valutazione d'impatto sulla protezione dei dati quando un tipo di trattamento può comportare un rischio elevato per i diritti e le libertà delle persone fisiche, descrivendo le operazioni di trattamento previste e le misure per mitigare i rischi.</p>
        <ul>
            
            <p style="margin: 10px 0;"><strong>Pattern da utilizzare:</strong></p>
            <li><a href="/pagina_pattern2.php#valfed">Valutazione dell'impatto sulla privacy federata<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_pattern3.php#gestobb">Gestione delle obbligazioni<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>
        
        <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px; margin-top: 30px;"></div>
        <h2 style="margin: 30px; text-align: center;">Principi della Privacy by Design (PbD)</h2>
        <p>La Privacy by Design è un approccio alla protezione dei dati che prevede l'incorporazione della privacy fin dalle prime fasi della progettazione dei sistemi. I principi della PbD includono:</p>

        <h3 id="proattivita"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">1</strong>Proattività, Non Reattività</h3>
        <p>Il principio della proattività prevede che le misure di protezione dei dati siano adottate preventivamente, prima che si verifichino problemi di privacy. Si tratta di anticipare e prevenire i rischi alla privacy, piuttosto che reagire dopo che si sono verificati.</p>

        <h3 id="privacyPred"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">2</strong>Privacy come Impostazione Predefinita</h3>
        <p>Questo principio garantisce che i dati personali siano automaticamente protetti, senza che l'utente debba intervenire per garantire la propria privacy. Le impostazioni di default dei sistemi devono essere configurate per offrire il massimo livello di protezione della privacy.</p>

        <h3 id="privacyProg"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">3</strong>Privacy Integrata nella Progettazione</h3>
        <p>La privacy deve essere un componente essenziale di qualsiasi sistema o processo, non un'aggiunta successiva. Questo principio prevede che la protezione dei dati personali sia incorporata nel design e nell'architettura dei sistemi IT e delle pratiche commerciali.</p>

        <h3 id="funzTot"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">4</strong>Funzionalità Totale - Zero-Sum</h3>
        <p>La progettazione di sistemi deve cercare di soddisfare tutte le esigenze, sia di privacy che di sicurezza, senza compromessi. Non dovrebbe esserci uno scambio tra funzionalità e privacy: entrambe devono essere ottimizzate.</p>

        <h3 id="sicuEnd"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">5</strong>Sicurezza End-to-End</h3>
        <p>I dati personali devono essere protetti durante tutto il loro ciclo di vita, dalla raccolta alla cancellazione. Questo principio assicura che tutte le fasi del trattamento dei dati siano sicure e che i dati siano protetti in ogni momento.</p>

        <h3 id="visTras"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">6</strong>Visibilità e Trasparenza</h3>
        <p>Gli utenti devono essere informati su come i loro dati sono raccolti, utilizzati e protetti, assicurando trasparenza nelle operazioni di trattamento dei dati. Questo principio richiede che le organizzazioni siano aperte e trasparenti nelle loro pratiche di gestione dei dati.</p>

        <h3 id="rispetto"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(255, 77, 77); color: #fff; margin-right: 10px;">7</strong>Rispetto per la Privacy degli Utenti</h3>
        <p>Le preferenze e i diritti degli utenti devono essere al centro delle decisioni relative alla privacy. Questo principio implica che tutte le azioni di protezione dei dati devono essere orientate al rispetto dei diritti degli individui e alla protezione della loro privacy.</p>

        <h2>Applicazione dei Principi della Privacy by Design</h2>
        <p>Per applicare i principi della PbD, le organizzazioni possono adottare le seguenti pratiche:</p>
        <ul>
            <li>・Effettuare regolarmente valutazioni d'impatto sulla protezione dei dati (DPIA).</li>
            <li>・Implementare controlli di accesso rigorosi per proteggere i dati personali.</li>
            <li>・Utilizzare tecniche di minimizzazione dei dati, raccogliendo solo le informazioni strettamente necessarie.</li>
            <li>・Criptare i dati personali sia in transito che a riposo.</li>
            <li>・Fornire formazione continua al personale sui principi della privacy e sicurezza dei dati.</li>
        </ul>

        <h2>Link a Risorse Esterne</h2>
        <ul>
            <li><a href="https://eur-lex.europa.eu/legal-content/IT/TXT/?uri=CELEX%3A32016R0679" target="_blank">Regolamento Generale sulla Protezione dei Dati (GDPR)</a></li>
            <li><a href="https://www.garanteprivacy.it/web/guest/home/docweb/-/docweb-display/docweb/9787904" target="_blank">Linee guida sul GDPR - Garante per la protezione dei dati personali</a></li>
            <li><a href="https://iapp.org/news/a/the-seven-foundational-principles-of-privacy-by-design/" target="_blank">I sette principi fondamentali della Privacy by Design</a></li>
            <li><a href="https://www.enisa.europa.eu/topics/data-protection/privacy-by-design" target="_blank">Privacy by Design - ENISA</a></li>
        </ul>
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