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
        <div style="text-align: center; margin-bottom: 40px; margin-top: 40px;">
        	<a href="/pagina_strategie.php" class="buttonPattern">Strategie</a>
        </div>
        
        <div class="pattern" onclick="toggleDetails(this)" id="assim">
            <h2>006. Asimmetria Minima dell'Informazione</h2>
            <p><strong class="strategiaInf">Strategia: Inform</strong></p>
            <p>Prevenire che gli utenti siano svantaggiati dalla loro mancanza di familiarità con le politiche, i rischi potenziali e la loro capacità d'azione nel trattamento dei dati.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Gli utenti interagiscono frequentemente con i titolari di servizi (o prodotti) che non hanno utilizzato in precedenza. A questo punto, la conoscenza che l'utente ha del titolare e delle sue pratiche, in particolare riguardo alla privacy, è tipicamente inesistente. Il titolare nel suo insieme ha una comprensione molto più chiara delle sue politiche. Inizia anche a conoscere molto sull'utente in un breve periodo di tempo, se non è già ben informato. L'utente deve compiere uno sforzo sufficiente per indagare sul titolare per conoscere le sue pratiche e fornire un consenso valido. Il titolare ha bisogno di questo consenso valido per trattare legalmente le informazioni dell'utente.</p>
                <p><strong>MVC:</strong> Titolare del trattamento, Modello</p>
                <p><strong>ISO 9241-210 Phase</strong> 7.2 Comprendere e specificare il contesto d'uso</p>
                <p><strong>Articoli GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita, Articolo 12 – Informazioni trasparenti, comunicazioni e modalità di esercizio dei diritti dell'interessato</p>
                <p><strong>Principi di Privacy:</strong> Visibilità e Trasparenza, Proattivo non Reattivo, Privacy Integrata nella Progettazione</p>
                <p><strong>Rischi di sicurezza:</strong> A04: Progettazione Insicura, A05: Configurazione di Sicurezza Errata</p>
                <p><strong>ID CWE:</strong> CWE-269: Gestione dei Privilegi Non Corretta, CWE-434: Caricamento Non Limitato di File di Tipo Pericoloso</p>
                <p><strong>Esempio:</strong> Molte organizzazioni online forniscono segnali ai loro clienti. Spesso sono pubblicamente e liberamente disponibili, ma possono anche essere acquistati da terzi. Il sito di aste online, eBay, ad esempio, utilizza un sistema di reputazione per aiutare altri acquirenti a sentirsi più a loro agio nell'acquistare da un venditore sconosciuto. Molti altri siti di e-commerce (come Amazon) si basano fortemente sui sistemi di reputazione e referenza per aiutare i clienti a prendere una decisione più informata.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="onion">
            <h2>007. Onion Routing</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Questo modello garantisce la non rintracciabilità tra mittenti e destinatari incapsulando i dati in diversi strati di crittografia, limitando la conoscenza di ciascun nodo lungo il percorso di consegna.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un sistema in cui i dati vengono instradati tra diversi nodi.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita, Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di privacy:</strong> Privacy Integrata nella Progettazione, Proattivo non Reattivo, Sicurezza End-to-End</p>
                <p><strong>Rischi di sicurezza:</strong> A02: Fallimenti crittografici, A04: Progettazione insicura, A05: Configurazione di sicurezza errata, A08: Fallimenti di integrità del software e dei dati, A07: Fallimenti di identificazione e autenticazione</p>
                <p><strong>ID CWE:</strong> CWE-269: Gestione dei privilegi non corretta, CWE-434: Caricamento non limitato di file di tipo pericoloso, CWE-306: Autenticazione mancante per funzione critica, CWE-798: Uso di credenziali codificate, CWE-287: Autenticazione non corretta, CWE-502: Deserializzazione di dati non attendibili</p>
                <p><strong>Esempio 1:</strong> Alice è una whistle-blower e cerca di inviare dati a Bob che lavora per la stampa. Invia i documenti corrispondenti come allegato e-mail. Eve monitora il traffico e può vedere chi ha inviato questa mail a chi. Il giorno dopo, la polizia perquisisce l'appartamento di Alice e la manda in prigione. L'account di posta di Bob viene sequestrato.</p>
                <p><strong>Esempio 2:</strong> Il TOR-browser, un browser web appositamente progettato per garantire l'anonimato, fa ampio uso dell'Onion Routing.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="critto">
            <h2>008. Crittografia con chiavi gestite dall'utente</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong><strong class="strategiaCon">Strategia: control</strong></p>
            <p>Usa la crittografia in modo tale che il fornitore di servizi non possa decrittografare le informazioni dell'utente poiché l'utente gestisce le chiavi.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> L'utente desidera archiviare o trasferire i propri dati personali tramite un servizio online e vuole proteggere la propria privacy, in particolare la riservatezza delle proprie informazioni personali. I rischi di accesso non autorizzato possono includere il fornitore di servizi online stesso, o terze parti come i suoi partner, ad esempio per il backup, o la sorveglianza governativa a seconda delle geografie in cui i dati sono archiviati o trasferiti.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>Fasi di progettazione:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita</p>
                <p><strong>Principi di privacy:</strong> Piena Funzionalità, Sicurezza End-to-End</p>
                <p><strong>Rischi di sicurezza:</strong> A02: Fallimenti crittografici, A04: Progettazione insicura</p>
                <p><strong>ID CWE:</strong> CWE-269: Gestione dei privilegi non corretta, CWE-434: Caricamento non limitato di file di tipo pericoloso</p>
                <p><strong>Esempio 1:</strong> Least Authority: sistema di backup sicuro off-site con crittografia lato client.</p>
                <p><strong>Esempio 2:</strong> LastPass: credenziali crittografate e database di informazioni personali con chiavi di crittografia gestite dall'utente.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>009. Uso di dati fittizi</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong></p>
            <p>Questo pattern nasconde le azioni intraprese da un utente aggiungendo azioni false che sono indistinguibili da quelle reali.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Questo pattern è applicabile quando non è possibile evitare l'esecuzione, il ritardo o l'offuscamento del contenuto di un'azione.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>Fasi di progettazione:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di privacy:</strong> Proattivo non reattivo, Privacy come impostazione predefinita, Rispetto per la privacy dell'utente, Privacy incorporata nel design</p>
                <p><strong>Rischi di sicurezza:</strong> A01: Controllo degli accessi non valido, A03: Iniezione, A05: Configurazione di sicurezza errata, A07: Fallimenti di identificazione e autenticazione, A10: Server-Side Request Forgery (SSRF)</p>
                <p><strong>ID CWE:</strong> CWE-22: Limitazione impropria di un percorso di nome file a una directory limitata ('Path Traversal'), CWE-862: Autorizzazione mancante, CWE-863: Autorizzazione errata, CWE-276: Permessi predefiniti errati, CWE-20: Validazione input impropria, CWE-79: Neutralizzazione impropria degli input durante la generazione di una pagina web ('Cross-site Scripting'), CWE-89: Neutralizzazione impropria di elementi speciali utilizzati in un comando SQL ('SQL Injection'), CWE-78: Neutralizzazione impropria di elementi speciali utilizzati in un comando OS ('OS Command Injection'), CWE-20: Validazione input impropria, CWE-77: Neutralizzazione impropria di elementi speciali utilizzati in un comando ('Command Injection'), CWE-94: Controllo improprio della generazione del codice ('Code Injection'), CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione errata, CWE-918: Server-Side Request Forgery (SSRF)</p>
                <p><strong>Esempio:</strong> Alice vuole cercare una clinica per aborti su Google, ma non vuole rivelare le sue intenzioni di abortire a un avversario che potrebbe intercettare questa ricerca (ad esempio, il provider ISP, l'amministratore di sistema del suo posto di lavoro, ecc.).</p>
            </div>
        </div>
         <div class="pattern" onclick="toggleDetails(this)" id="valfed">
            <h2>010. Valutazione dell'impatto sulla privacy federata</h2>
            <p><strong class="strategiaEnf">Strategia: Enforce</strong></p>
            <p>L'impatto delle informazioni personali in una federazione è maggiore rispetto all'impatto nella federata.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Scenari di gestione dell'identità (cioè, quando i ruoli del fornitore di identità e del fornitore di servizi sono separati).</p>
                <p><strong>MVC:</strong>Model</p>
                <p><strong>Fasi di progettazione:</strong> 7.5 Valutazione della progettazione</p>
                <p><strong>Articoli GDPR:</strong> Articolo 35 – Valutazione dell'impatto sulla protezione dei dati</p>
                <p><strong>Principi di privacy:</strong> Privacy incorporata nel design, Rispetto per la privacy dell'utente, Visibilità e trasparenza</p>
                <p><strong>Rischi di sicurezza:</strong> A01: Controllo degli accessi non valido, A05: Configurazione di sicurezza errata, A07: Fallimenti di identificazione e autenticazione</p>
                <p><strong>ID CWE:</strong> CWE-22: Limitazione impropria di un percorso di nome file a una directory limitata ('Path Traversal'), CWE-862: Autorizzazione mancante, CWE-863: Autorizzazione errata, CWE-276: Permessi predefiniti errati, CWE-306: Autenticazione mancante per funzione critica, CWE-798: Utilizzo di credenziali codificate, CWE-287: Autenticazione errata</p>
                <p><strong>Esempio:</strong> Un fornitore di identità emette pseudonimi per autenticare gli utenti presso fornitori di servizi terzi, che a loro volta possono verificare l'autenticità di questi pseudonimi presso il fornitore di identità, senza conoscere l'identità reale dell'utente. Tuttavia, il fornitore di identità conosce tutti i servizi richiesti dagli utenti, il che rivela informazioni personali al fornitore di identità e gli consente di profilare gli utenti.</p>
            </div>
        </div>
        
        
        
        
        <!-- Inserisci qui altre sezioni simili per gli altri 24 pattern -->
    </div>
    <div class="page-num" style="display: flex; justify-content: center; margin-bottom: 20px;">
    	<button class="arrow"onclick="location.href='/pagina_pattern.php'">
      		<i class="fa-solid fa-arrow-left"></i>
        </button>
      <p style="margin: 10px 20px;">Pagina 2</p>
        <button class="arrow"onclick="location.href='/pagina_pattern3.php'">
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