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
      	
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>016. Granularità della posizione</h2>
            <p><strong class="strategiaAbs">Strategia: Abstract</strong></p>
            <p>Supporto alla minimizzazione della raccolta e distribuzione dei dati. Importante quando un servizio sta raccogliendo dati sulla posizione da o su un utente, o sta trasmettendo dati sulla posizione di un utente a un terzo.</p>            
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Quando un servizio sta raccogliendo dati sulla posizione da o su un utente, o sta trasmettendo dati sulla posizione di un utente a un terzo.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Producing design solutions</p>
                <p><strong>Articoli GDPR:</strong> Articolo 5 – Principi relativi al trattamento dei dati personali, Articolo 25 – Protezione dei dati mediante progettazione predefinita e predefinita</p>
                <p><strong>Principi di Privacy by Design:</strong> Proattivo non reattivo, Privacy integrata nel design</p>
                <p><strong>Rischi di Sicurezza:</strong> A01: Controllo degli accessi compromesso, A05: Configurazione di sicurezza non corretta</p>
                <p><strong>ID CWE:</strong> CWE-22: Limitazione impropria di un percorso a una directory ristretta ('Traversing del percorso'), CWE-862: Autorizzazione mancante, CWE-863: Autorizzazione non corretta, CWE-276: Autorizzazioni predefinite non corrette</p>
                <p><strong>Esempi:</strong></p>
                <ul>
                    <li>Yahoo! Fire Eagle consente all'utente di fornire informazioni sulla posizione alle applicazioni utilizzando otto diverse "livelli" di granularità nella loro gerarchia: Nessuna informazione, Il più preciso possibile, Codice postale, Quartiere, Città, Regione, Stato e Paese. Fire Eagle richiede specificamente che le applicazioni riceventi siano scritte per gestire i dati a ciascuno dei livelli, e consente di aggiornare la posizione dell'utente a qualsiasi livello di granularità.</li>
                    <li>Twitter consente agli utenti di aggiungere un tweet con coordinate esatte, un "luogo" Twitter (una città, un quartiere o un luogo) o entrambi.</li>
                    <li>Una delle precursori della W3C Geolocation API, la funzionalità Geode sperimentale di Firefox consentiva l'accesso JavaScript alla posizione attuale a quattro diversi livelli di granularità.</li>
                </ul>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>017. Dissuasione delle strategie generalizzate</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong></p>
            <p>Offrire agli utenti la possibilità di definire un livello di privacy da una serie di opzioni ogni volta che condividono contenuti.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Servizi orientati socialmente su Internet permettono alla loro utenza spesso diversificata di condividere contenuti. Queste masse di utenti e contenuti condivisi sono abbastanza variegate da scoraggiare l'attenzione individuale. I controller preferiscono proteggersi dalla complessità aggiuntiva e dagli investimenti in funzionalità che forniscono loro meno dati. Gli utenti, tuttavia, sentono la necessità di impostazioni della privacy per distinguere il loro appetito per il rischio personale da quello della norma. Ognuno ha le proprie idee sulle sensibilità delle proprie informazioni, il che rende difficile implementare controlli sufficienti.</p>
                <p><strong>MVC:</strong> Controller, View</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Comprendere e specificare il contesto d'uso</p>
                <p><strong>Articolo GDPR:</strong> Articolo 12 – Informazioni trasparenti, comunicazione e modalità per l'esercizio dei diritti dell'interessato</p>
                <p><strong>Principi di Privacy by Design:</strong> Privacy integrata nel design, Rispetto della privacy dell'utente</p>
                <p><strong>Rischi di Sicurezza:</strong> A04: Progettazione non sicura, A07: Fallimenti di identificazione e autenticazione</p>
                <p><strong>ID CWE:</strong> CWE-269: Gestione dei privilegi impropria, CWE-434: Caricamento non limitato di file con tipo pericoloso, CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione non corretta</p>
                <p><strong>Esempio:</strong> Su Facebook, prima di pubblicare un post, puoi impostare uno dei tre livelli di privacy per il post che possono essere "Tutti", "Solo amici", "Privato". Nel primo caso, il post può essere visto da qualsiasi utente di Facebook, nel secondo caso il post può essere visto solo dagli amici dell'utente del post, infine, nell'ultimo caso il post non è visibile a nessuno tranne che al proprietario.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="recip">
            <h2>018. Reciprocità</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong></p>
            <p>Permetti agli utenti di beneficiare in base ai contributi che fanno.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Nei servizi in cui gli utenti possono contribuire socialmente o collaborativamente, la partecipazione può essere alla base del modello di business del servizio. In queste situazioni, la qualità e la frequenza dei contenuti influenzano il successo del servizio, e quindi gli utenti hanno un grande impatto sulla sua sopravvivenza. Se un singolo utente contribuisce o meno, gioca un ruolo nella redditività, il che mette il controller in una posizione per incoraggiare o imporre una partecipazione equa. Gli utenti potrebbero rispondere negativamente a tali idee, tuttavia, specialmente se non vedono potenziali guadagni degni del loro sforzo e rischi personali per la privacy.</p>
                <p><strong>MVC:</strong> Controller</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Comprendere e specificare il contesto d'uso</p>
                <p><strong>Principi di Privacy by Design:</strong> Rispetto della privacy dell'utente</p>
                <p><strong>Rischi di Sicurezza:</strong> A10: Server-Side Request Forgery (SSRF)</p>
                <p><strong>ID CWE:</strong> CWE-918: Server-Side Request Forgery (SSRF)</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>019. Partecipazione incentivata</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong></p>
            <p>Gli utenti sono più inclini a fornire input preziosi quando possono farlo senza rivelare dati personali, o percepiscono uno scambio di valore pari o maggiore sia monetario che sociale.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un controller dei dati ricava vari valori dalla partecipazione dei suoi utenti (cioè dei soggetti dei dati). Più questi utenti partecipano, fornendo esplicitamente contesto e implicitamente metadati (ad esempio, statistiche e telemetria), migliore è la situazione del controller sotto diversi aspetti. Nonostante questa relazione chiave, la condivisione eccessiva può violare gravemente il diritto alla privacy di un utente. Molti controller pertanto mirano a rispettare questo diritto quando traggono vantaggio dalle interazioni degli utenti. Poiché il controller dovrebbe riconoscere la necessità di consenso legittimo specifico, informato e liberamente dato, gli utenti sono resi consapevoli dei rischi di un tale sistema. Poiché sono informati, forse attraverso una combinazione di un cruscotto privacy o un feed di consapevolezza, gli utenti possono bilanciare i compromessi legati alla privacy. Ciò riduce al minimo i rischi per la privacy secondo le scelte personali e informate dell'utente, e protegge il controller dall'indebolire involontariamente la privacy dell'utente. Il controller desidera comunque la partecipazione e può quindi fare ulteriori concessioni o disposizioni per rendere il compromesso vantaggioso o inesistente. Il controller può completare la sua strategia con scelte più granulari per ottenere ciò, come con la Divulgazione Selettiva e la Disruzione Selettiva.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Comprensione e specificazione del contesto di utilizzo, 6. Pianificazione del processo di design centrato sull'utente</p>
                <p><strong>Articoli GDPR:</strong> Articolo 5 – Principi relativi al trattamento dei dati personali, Articolo 25 – Protezione dei dati mediante progettazione predefinita e predefinita</p>
                <p><strong>Principi di Privacy by Design:</strong> Rispetto della privacy dell'utente</p>
                <p><strong>Rischi di Sicurezza:</strong> A08: Software and Data Integrity Failures</p>
                <p><strong>ID CWE:</strong> CWE-502: Deserialization of Untrusted Data</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>020. Outsourcing [con consenso]</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong></p>
            <p>Il controller deve ottenere ulteriore consenso specifico, informato, esplicito e liberamente dato prima di esternalizzare l'elaborazione dei dati a un terzo.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> I controller spesso non hanno i mezzi per elaborare in modo fattibile o sufficiente i dati che supervisionano nella misura desiderata. In questi casi cercano un elaboratore esterno o un terzo per gestire il processo. Questo confligge tipicamente con il consenso già ottenuto dai loro utenti (i soggetti dei dati), poiché ulteriori elaborazioni da parte di un terzo non sono necessariamente compatibili con gli scopi concordati. In queste situazioni il controller non ha ottenuto legalmente il consenso per questa elaborazione e sarà responsabile se la porterà a termine.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Comprensione e specificazione del contesto di utilizzo, 7.3 Specificare i requisiti</p>
                <p><strong>Articoli GDPR:</strong> Articolo 13 – Informazioni da fornire qualora i dati personali siano raccolti presso l'interessato</p>
                <p><strong>Principi di Privacy by Design:</strong> Informazioni da fornire quando i dati personali sono raccolti dal soggetto dei dati</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Security Misconfiguration, A07: Identification and Authentication Failures, A08: Software and Data Integrity Failures</p>
                <p><strong>ID CWE:</strong> CWE-306: Missing Authentication for Critical Function, CWE-798: Use of Hard-coded Credentials, CWE-287: Improper Authentication, CWE-502: Deserialization of Untrusted Data</p>
                <p><strong>Esempio:</strong> Assumiamo un centro sanitario, controller dei dati, un utente interessato e un subappaltatore, fornitore di reti di sensori per monitorare la salute dell'utente. Questo subappaltatore richiede ulteriore consenso specifico, informato, esplicito e liberamente dato da parte tua.</p>
            </div>
        </div>


    </div>
    <div class="page-num" style="display: flex; justify-content: center; margin-bottom: 20px;">
    	<button class="arrow"onclick="location.href='/pagina_pattern3.php'">
      		<i class="fa-solid fa-arrow-left"></i>
        </button>
      <p style="margin: 10px 20px;">Pagina 4</p>
        <button class="arrow"onclick="location.href='/pagina_pattern5.php'">
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