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
        
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>001. Protezione contro il Tracciamento</h2>
            <p><strong class="strategiaMin">Strategia: Minimize</strong></p>
            <p>Questo pattern evita il tracciamento dei visitatori del sito attraverso i cookie. Lo fa eliminandoli a intervalli regolari o disabilitandoli completamente.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Informazioni personali identificabili vengono tracciate tramite strumenti software, protocolli o meccanismi come i cookie.</p>
                <p><strong>MVC:</strong> Controller, Model, View</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy:</strong> Privacy come impostazione predefinita, Privacy incorporata nel design, Visibilità e Trasparenza, Proattivo non Reattivo</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Misconfigurazione della Sicurezza, A07: Fallimenti di Identificazione e Autenticazione</p>
                <p><strong>Common Weakness Enumeration:</strong> CWE-306: Mancata Autenticazione per Funzione Critica, CWE-798: Uso di Credenziali Codificate, CWE-287: Autenticazione Impropria</p>
                <p><strong>Esempio:</strong> Alice vuole comprare delle scarpe e decide di fare shopping online. Va su un negozio online e cerca delle scarpe ma non riesce a decidere quali vuole, quindi non ne compra nessuna. Il giorno dopo trova un paio di email nella sua casella di posta, con suggerimenti per altre scarpe e notifiche sulle scarpe che aveva visto che sono ora in saldo.</p>
            </div>
        </div>
        
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>002. Strip Invisible Metadata</h2>
            <p><strong class="strategiaMin">Strategia: Minimize</strong></p>
            <p>Elimina i metadati potenzialmente sensibili che non sono visibili direttamente all'utente finale.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un servizio richiede che un utente importi dati da fonti esterne (ad es., immagini, tweet, documenti), vari tipi di metadati possono essere trasmessi. Gli utenti potrebbero non essere consapevoli dei metadati poiché possono essere generati automaticamente o non visibili direttamente. I servizi possono essere involontariamente responsabili di esporre metadati privati o di andare contro le aspettative degli utenti.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 25 – Protezione dei dati fin dalla progettazione e per impostazione predefinita, Articolo 5 – Principi relativi al trattamento dei dati personali</p>
                <p><strong>Principi di Privacy:</strong> Rispetto della Privacy dell'Utente, Visibilità e Trasparenza, Privacy Incorporata nel Design</p>
                <p><strong>Rischi di Sicurezza:</strong> A04: Design Insicuro, A05: Misconfigurazione della Sicurezza</p>
                <p><strong>Common Weakness Enumeration:</strong> CWE-269: Gestione Inadeguata dei Privilegi, CWE-434: Caricamento Non Restrittivo di File con Tipo Pericoloso</p>
                <p><strong>Esempio 1:</strong> Twitter.com rimuove i dati EXIF dalle immagini caricate sul loro servizio di condivisione di immagini. In passato ci sono state molte violazioni della privacy della posizione personale utilizzando i dati EXIF condivisi dai servizi di condivisione di immagini.</p>
                <p><strong>Esempio 2:</strong> Flickr.com è un sistema basato sui metadati, la condivisione dei metadati è una parte importante della comunità degli utenti. Flickr.com permette agli utenti di nascondere i loro dati EXIF dalla visualizzazione pubblica e fornisce anche un'interfaccia per gli utenti per vedere facilmente se stanno condividendo la posizione come parte del caricamento delle loro immagini.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)">
            <h2>003. Added-noise measurement obfuscation</h2>
            <p><strong class="strategiaHid">Strategia: Hide</strong><strong class="strategiaAbs">Strategia:  Abstract</strong></p>
            <p> Aggiungi un po' di rumore alle misurazioni del funzionamento del servizio, ma fallo annullare a lungo termine.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> Un fornitore di servizi ottiene misurazioni continue di un attributo del servizio collegato a un individuo del servizio.</p>
                <p><strong>MVC:</strong> Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy:</strong> Privacy Incorporata nel Design, Visibilità e Trasparenza</p>
                <p><strong>Rischi di Sicurezza:</strong> A04: Design Insicuro, A05: Misconfigurazione della Sicurezza, A09: Fallimenti di Logging e Monitoraggio della Sicurezza, A07: Fallimenti di Identificazione e Autenticazione</p>
                <p><strong>Common Weakness Enumeration:</strong> CWE-269: Gestione Inadeguata dei Privilegi, CWE-434: Caricamento Non Restrittivo di File con Tipo Pericoloso, CWE-306: Mancata Autenticazione per Funzione Critica, CWE-798: Uso di Credenziali Codificate, CWE-287: Autenticazione Impropria</p>
                <p><strong>Esempio 1:</strong> Un'azienda elettrica gestisce una rete di smart grid con smart meter che forniscono misurazioni del consumo istantaneo di energia di ciascun utente. L'azienda utilizza tali informazioni per adattare la distribuzione dell'energia in modo dinamico, in base alla domanda degli utenti in ogni momento, e per fatturare periodicamente ciascun cliente, in base al suo consumo aggregato nel periodo di fatturazione. Tuttavia, queste informazioni possono anche essere sfruttate per dedurre informazioni sensibili sull'utente (ad esempio, a che ora lascia e torna a casa, ecc.).</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="moddati">
            <h2>004. Modello di notifica della violazione dei dati</h2>
            <p><strong class="strategiaInf">Strategia: Inform</strong></p>
            <p> I responsabili dei servizi (o prodotti) forniti agli utenti raccolgono grandi quantità di dati, molti dei quali personali, per migliorare la qualità e l'esperienza dell'utente di quel servizio. Tutto ciò deve essere fatto con il consenso informato dell'utente, che deve comprendere adeguatamente i rischi associati ai suoi dati. Uno di questi rischi è l'accesso non autorizzato, la modifica, la rimozione o la condivisione dei dati. Se si verifica una violazione dei dati, è necessaria una notifica.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> I responsabili dei servizi (o prodotti) forniti agli utenti raccolgono grandi quantità di dati, molti dei quali personali, per migliorare la qualità e l'esperienza dell'utente di quel servizio. Tutto ciò deve essere fatto con il consenso informato dell'utente, che deve comprendere adeguatamente i rischi associati ai suoi dati. Uno di questi rischi è l'accesso non autorizzato, la modifica, la rimozione o la condivisione dei dati. Se si verifica una violazione dei dati, è necessaria una notifica. Qualsiasi operatore all'interno (o che fornisce servizi o prodotti all'interno) dell'UE deve notificare l'autorità di controllo della sua principale sede o rappresentante. Questo deve essere fatto entro 72 ore, a meno che non sia giustificato. La notifica agli utenti dipende dal grado di impatto sulla loro situazione.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.3 Specificare i requisiti, 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>Articoli GDPR:</strong> Articolo 33 – Notifica di una violazione dei dati personali all'autorità di controllo, Articolo 34 – Comunicazione di una violazione dei dati personali all'interessato</p>
                <p><strong>Principi di Privacy:</strong> Visibilità e Trasparenza, Proattivo non Reattivo</p>
                <p><strong>Rischi di Sicurezza:</strong> A05: Misconfigurazione della Sicurezza, A08: Fallimenti di Integrità di Software e Dati, A09: Fallimenti di Logging e Monitoraggio della Sicurezza</p>
                <p><strong>Common Weakness Enumeration:</strong> CWE-502: Deserializzazione di Dati Non Fidati</p>
                <p><strong>Esempio 1:</strong> Supponiamo che una [azienda] memorizzi tutti i dati dei dipendenti [tramite il servizio di un controller]. Esiste un accordo contrattuale tra [di loro] secondo cui ogni fuga di dati deve essere segnalata entro un'ora. Ora, Bob, un dipendente di [il controller] e non autorizzato a leggere i dati di [l'azienda], riesce a eludere i meccanismi di controllo degli accessi e legge i dati [personali]. Questo rappresenta una violazione dei dati di cui [l'azienda] deve essere notificata entro un'ora.</p>
            </div>
        </div>
        <div class="pattern" onclick="toggleDetails(this)" id="attins">
            <h2>005. Attività insolite</h2>
            <p><strong class="strategiaInf">Strategia: Inform</strong></p>
            <p> Previene l'accesso sospetto ai dati degli utenti attraverso avvisi e autenticazione tramite più fattori in caso di compromissione potenziale dell'account.</p>
            <div class="pattern-details">
                <p><strong>Contesto:</strong> I servizi (o prodotti), specialmente su Internet, tendono a utilizzare l'autenticazione basata su nome utente e password. Questo meccanismo di sicurezza è molto conveniente per gli utenti, poiché è diffuso e semplice rispetto a alternative più sicure. Tuttavia, è soggetto a difetti comuni. Le password diventano meno sicure se rimangono invariate, sono spesso vulnerabili ad attacchi di forza bruta, spionaggio e phishing, e non possono essere dimostrate essere detenute esclusivamente dall'utente. Questo complica la certezza dell'autenticazione e quindi l'autenticità di qualsiasi decisione presa dall'utente, compreso il consenso. I controller possono derivare fattori aggiuntivi, come informazioni specifiche sul dispositivo o sull'accesso. Se viene fornita la posizione, ad esempio, potrebbe suggerire attività dell'account improbabile.</p>
                <p><strong>MVC:</strong> Controller, Model</p>
                <p><strong>ISO 9241-210 Phase:</strong> 7.3 Specificare i requisiti, 7.4 Produzione di soluzioni progettuali</p>
                <p><strong>>Articoli GDPR:</strong> Articolo 32 – Sicurezza del trattamento</p>
                <p><strong>Principi di Privacy:</strong> Proattivo non Reattivo, Rispetto della Privacy dell'Utente, Sicurezza End-to-End</p>
                <p><strong>Rischi di Sicurezza:</strong> A01: Broken Access Control, A07: Fallimenti di Identificazione e Autenticazione, A09: Fallimenti di Logging e Monitoraggio della Sicurezza</p>
                <p><strong>Common Weakness Enumeration:</strong> CWE-22: Limitazione Impropria di un Percorso in una Directory Ristretta ('Path Traversal'), CWE-862: Autorizzazione Mancante, CWE-863: Autorizzazione Errata, CWE-276: Autorizzazioni Predefinite Errate, CWE-306: Mancata Autenticazione per Funzione Critica, CWE-798: Uso di Credenziali Codificate, CWE-287: Autenticazione Impropria</p>
                <p><strong>Esempio 1:</strong> Gmail visualizza informazioni su altre sessioni (se presenti) nel piè di pagina, collegando a una pagina chiamata "Attività su questo account" che elenca altre sessioni e attività recenti sull'account Gmail. L'utente ha la possibilità di disconnettere altre sessioni. In caso di fastidiosi falsi positivi, l'utente può scegliere di disabilitare l'avviso per attività insolite. La disabilitazione richiede circa una settimana, "per assicurarsi che i cattivi non siano quelli che hanno disattivato i tuoi avvisi."</p>
                <p><strong>Esempio 2:</strong> Quando Facebook rileva un accesso non comune, mostra 'autenticazione sociale' che visualizza alcune foto degli amici dell'utente e chiede all'utente di nominare la persona in quelle foto.</p>
                <p><strong>Esempio 3:</strong> La scheda 'Sicurezza' delle 'Impostazioni' del sito web di Dropbox visualizza tutte le sessioni del browser web effettuate nell'account e consente all'utente di disconnettere una o più di esse. Viene visualizzato il nome del browser, il sistema operativo e l'indirizzo IP e il paese corrispondente per aiutare l'utente a fare una scelta. Visualizza anche tutti i dispositivi collegati all'account e consente all'utente di scollegarne uno o più.</p>
            </div>
        </div>


    </div>
    <div class="page-num" style="display: flex; justify-content: center; margin-bottom: 20px;">
    	<button class="arrow" onclick="location.href='/pagina_pattern.php'">
      		<i class="fa-solid fa-arrow-left"></i>
        </button>
      <p style="margin: 10px 20px;">Pagina 1</p>
        <button class="arrow" onclick="location.href='/pagina_pattern2.php'">
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
