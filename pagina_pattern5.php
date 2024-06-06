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
        <div class="pattern" onclick="toggleDetails(this)" id="firm">
            <h2>021. Firma un accordo per risolvere la mancanza di fiducia nell'utilizzo dei dati privati</h2>
            <p><strong class="strategiaCon">Strategia: Control</strong></p>
            <p>I servizi di un controller possono richiedere agli utenti di firmare contratti che stipulano le loro obbligazioni e gli scopi di elaborazione per i quali gli utenti devono acconsentire all'uso del servizio. Ciò garantisce che gli utenti possano fidarsi del controller poiché è vincolato al contratto che firma.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Gli utenti non fidano innatamente dei controller che forniscono servizi (o prodotti), poiché non hanno assicurazioni su quali siano le vere intenzioni del controller o del suo processore. I controller e i processori mirano tipicamente a fare profitto, ma ciò potrebbe essere a scapito degli utenti se questi non considerano le loro esigenze di privacy. Il controller potrebbe avere impostazioni predefinite ragionevoli o livelli di controllo, ma gli utenti hanno anche bisogno di sentirsi rassicurati sul fatto che le loro scelte vengano rispettate. Questo è particolarmente vero per ciò che concedono o non concedono come Consenso Legittimo.</p>
                <p><strong>MVC:</strong>Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.2 Comprensione e specificazione del contesto di utilizzo</p>
                <p><strong>Articoli del GDPR:</strong>Articolo 6 – Liceità del trattamento, Articolo 7 – Condizioni per il consenso</p>
                <p><strong>Principi di Privacy by Design:</strong> Legalità del trattamento, Condizioni per il consenso</p>
                <p><strong>Rischi di Sicurezza:</strong> A01: Broken Access Control, A02: Cryptographic Failures, A03: Injection, A07: Identification and Authentication Failures</p>
                <p><strong>ID CWE:</strong> CWE-22: Improper Limitation of a Pathname to a Restricted Directory ('Path Traversal'), CWE-862: Missing Authorization, CWE-863: Incorrect Authorization, CWE-276: Incorrect Default Permissions</p>
                <p><strong>Esempio:</strong> Assumiamo un centro sanitario, controller dei dati, un utente interessato e un subappaltatore, fornitore di reti di sensori per monitorare la salute dell'utente. Questo subappaltatore richiede ulteriore consenso specifico, informato, esplicito e liberamente dato da parte tua.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>022. Pseudonymous Messaging</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Un servizio di messaggistica viene potenziato utilizzando un terzo di fiducia per scambiare gli identificatori dei partner di comunicazione tramite pseudonimi.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Questo pattern può essere utilizzato per le comunicazioni online tramite email, attraverso bacheche di messaggi e newsgroup.</p>
                <p><strong>MVC:</strong> Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli del GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy by Design:</strong> Privacy come impostazione predefinita, Rispetto per la privacy degli utenti, Proattivo non reattivo</p>
                <p><strong>Rischi di Sicurezza:</strong> A01: Broken Access Control, A02: Cryptographic Failures, A08: Software and Data Integrity Failures, A09: Security Logging and Monitoring Failures</p>
                <p><strong>ID CWE:</strong> CWE-22: Improper Limitation of a Pathname to a Restricted Directory ('Path Traversal'), CWE-862: Missing Authorization, CWE-863: Incorrect Authorization, CWE-276: Incorrect Default Permissions, CWE-502: Deserialization of Untrusted Data</p>
                <p><strong>Esempio:</strong> Sistemi di comunicazione non monitorati per garantire la libertà di parola. I messaggi pseudonimi non ci consentono di risalire al mittente del messaggio.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>023. Psuedonymous Identity</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Nascondi l'identità utilizzando un pseudonimo e garantisci un'identità pseudonima che non può essere collegata a una vera identità durante le interazioni online.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Questo pattern può essere utilizzato per sistemi in cui gli utenti sono identificati da identità pubbliche.</p>
                <p><strong>MVC:</strong>Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli del GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e per impostazione predefinita, 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy by Design:</strong> Privacy come impostazione predefinita, Rispetto per la privacy degli utenti</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Security Misconfiguration, A07: Identification and Authentication Failures</p>
                <p><strong>ID CWE:</strong> CWE-306: Missing Authentication for Critical Function, CWE-798: Use of Hard-coded Credentials, CWE-287: Improper Authentication</p>
                <p><strong>Esempio:</strong> Mirano a fornire un po' di privacy, ma è importante essere consapevoli delle possibili vulnerabilità nell'uso di un pseudonimo, che possono essere contrastate implementando ulteriori misure di sicurezza se necessario.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>024. Aggregation Gateway</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Encrypt, aggregate and decrypt at different places.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un fornitore di servizi ottiene misurazioni continue di un attributo del servizio collegato a un insieme di utenti del servizio.</p>
                <p><strong>MVC:</strong>Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli del GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy by Design:</strong> Sicurezza end-to-end, Privacy come impostazione predefinita</p>
                <p><strong>Rischi di Sicurezza:</strong> A06: Vulnerable and Outdated Components, A08: Software and Data Integrity Failures</p>
                <p><strong>ID CWE:</strong> CWE-502: Deserialization of Untrusted Data</p>
                <p><strong>Esempio:</strong> Una società elettrica gestisce una rete intelligente con contatori intelligenti che forniscono misurazioni del consumo istantaneo di energia di ciascun utente. La società utilizza queste informazioni per adattare la distribuzione dell'energia in modo dinamico, in base alla domanda degli utenti in ogni momento.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="passw">
            <h2>025. Password sicure informate</h2>
            <p><strong class="strategiaInf">Strategia: Inform</strong></p>
            <p>Ensure that users maintain healthy authentication habits through awareness and understanding.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Le credenziali sono richieste da numerosi servizi (e prodotti) al fine di garantire che solo gli utenti autenticati e autorizzati abbiano accesso a determinate funzionalità.</p>
                <p><strong>MVC:</strong>Controller, View</p>
                <p><strong>ISO 9241-210 Phase</strong> 7.2 Comprendere e specificare il contesto d'uso</p>
                <p><strong>Articoli del GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e per impostazione predefinita</p>
                <p><strong>Principi di Privacy by Design:</strong> Privacy incorporata nel design, Visibilità e trasparenza</p>
                <p><strong>Rischi di Sicurezza:</strong> A02: Fallimenti crittografici, A03: Iniezione, A05: Configurazione errata della sicurezza</p>
                <p><strong>ID CWE:</strong> CWE-20: Validazione di input impropria, CWE-79: Neutralizzazione impropria dell'input durante la generazione della pagina web ('Cross-site Scripting'), CWE-89: Neutralizzazione impropria di elementi speciali utilizzati in un comando SQL ('SQL Injection'), CWE-78: Neutralizzazione impropria di elementi speciali utilizzati in un comando del sistema operativo ('OS Command Injection'), CWE-20: Validazione di input impropria, CWE-77: Neutralizzazione impropria di elementi speciali utilizzati in un comando ('Command Injection'), CWE-94: Controllo improprio della generazione di codice ('Code Injection')</p>
                <p><strong>Esempio:</strong> Ogni sistema che coinvolge l'uso di una password per proteggere i dati personali dovrebbe implementare uno strumento di generazione di password. Questo sistema, oltre a generare password, deve educare gli utenti a creare password sicure.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="data">
        <h2>026. Minimizzazione dei Dati</h2>
        <p><strong class="strategiaMin">Strategia: Minimize</strong></p>
        <p>Questo pattern raccoglie, tratta e conserva solo i dati personali strettamente necessari per raggiungere uno scopo specifico e dichiarato, riducendo il rischio di violazioni della privacy.</p>
        <div class="pattern-details">
            <p><strong>Contesto:</strong> Applicabile in qualsiasi situazione in cui vengano raccolti, trattati o conservati dati personali.</p>
            <p><strong>MVC:</strong> Model, Controller</p>
            <p><strong>ISO 9241-210 Phase:</strong> 6.2 Comprendere e Specificare il Contesto d'Uso</p>
            <p><strong>Articoli GDPR:</strong> Articolo 5 – Principi applicabili al trattamento di dati personali, Articolo 25 – Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita</p>
            <p><strong>Principi di Privacy:</strong> Privacy come impostazione predefinita, Privacy incorporata nel design</p>
            <p><strong>Rischi di Sicurezza:</strong> A06: Esposizione dei Dati Sensibili, A09: Controlli di Accesso Inefficaci</p>
            <p><strong>Common Weakness Enumeration:</strong> CWE-200: Esposizione di Informazioni Sensibili, CWE-359: Esposizione di Informazioni tramite Dati Persistenti</p>
            <p><strong>Esempio:</strong> Una piattaforma di e-commerce raccoglie solo le informazioni necessarie per completare una transazione (es. nome, indirizzo di spedizione e dettagli di pagamento) e non richiede ulteriori dati personali non necessari come il numero di telefono o l'indirizzo email per fini di marketing, a meno che l'utente non dia esplicitamente il consenso.</p>
        </div>
    </div>


    </div>
    <div class="page-num" style="display: flex; justify-content: center; margin-bottom: 20px;">
    	<button class="arrow"onclick="location.href='/pagina_pattern4.php'">
      		<i class="fa-solid fa-arrow-left"></i>
        </button>
      <p style="margin: 10px 20px;">Pagina 5</p>
        <button class="arrow"onclick="location.href=''">
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
</body>
</html>