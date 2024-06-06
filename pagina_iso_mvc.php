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
        <div class="imagePattern2" style="background-image: url('./img/lineeIso2.jpg');"> 
        <h1 class="patternH1">ISO 9241-210 e MVC</h1></div>
      </section>
      <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      	<div style="text-align: center; margin-bottom: 40px; margin-top: 40px;">
        	<a href="/pagina_iso.php" class="buttonPattern">ISO</a>
        </div>
      <section class="testo" style="margin: 40px;">

        <div class="phase">
            <a href="/pagina_iso.php#uno"><h2>Fase 1: Comprendere e Specificare il Contesto d'Uso</h2></a>
            <p><strong>Componente MVC:</strong> Model</p>
            <p><strong>Descrizione:</strong> Analizza e comprende i requisiti e le caratteristiche degli utenti, i loro compiti, l'ambiente e il contesto in cui il sistema sarà utilizzato.</p>
            <ul>
            	<strong>Attività:</strong>
                <li>・Raccolta di dati sugli utenti e sulle loro esigenze.</li>
                <li>・Analisi delle attività degli utenti e del contesto operativo.</li>
                <li>・Identificazione delle condizioni d'uso e delle limitazioni.</li>
            </ul>
        </div>

        <div class="phase">
            <a href="/pagina_iso.php#due"><h2>Fase 2: Specificare i Requisiti dell'Utente</h2></a>
            <p><strong>Componente MVC:</strong> Model</p>
            <p><strong>Descrizione:</strong> Definisci requisiti chiari e misurabili basati sulle necessità e i contesti d'uso degli utenti.</p>
            <ul>
            	<strong>Attività:</strong>
                <li>・Creazione di scenari d'uso e user stories.</li>
                <li>・Definizione di requisiti funzionali e non funzionali basati sui dati raccolti.</li>
                <li>・Valutazione dei requisiti per assicurarsi che siano allineati con gli obiettivi utente.</li>
            </ul>
        </div>

        <div class="phase">
            <a href="/pagina_iso.php#tre"><h2>Fase 3: Produrre Soluzioni di Progettazione</h2></a>
            <p><strong>Componente MVC:</strong> View</p>
            <p><strong>Descrizione:</strong> Progetta interfacce utente che siano intuitive, accessibili e usabili.</p>
            <ul>
            	<strong>Attività:</strong>
                <li>・Creazione di wireframe, mockup e prototipi interattivi.</li>
                <li>・Sviluppo di layout e design dell'interfaccia utente.</li>
                <li>・Applicazione di principi di usabilità e accessibilità nelle interfacce.</li>
            </ul>
        </div>

        <div class="phase">
            <a href="/pagina_iso.php#qua"><h2>Fase 4: Valutare le Soluzioni di Progettazione</h2></a>
            <p><strong>Componente MVC:</strong> View e Controller</p>
            <p><strong>Descrizione:</strong> Conduci test di usabilità e raccogli feedback dagli utenti per migliorare il design.</p>
            <ul>
            	<strong>Attività:</strong>
                <li>・Test di usabilità con utenti reali.</li>
                <li>・Analisi dei risultati e identificazione delle aree di miglioramento.</li>
                <li>・Iterazione sul design basata sul feedback degli utenti.</li>
            </ul>
        </div>

        <div class="phase">
            <a href="/pagina_iso.php#cin"><h2>Fase 5: Implementare e Rilasciare la Soluzione</h2></a>
            <p><strong>Componente MVC:</strong> Controller</p>
            <p><strong>Descrizione:</strong> Implementa il comportamento dell'applicazione e assicura che l'interazione utente sia fluida e intuitiva.</p>
            <ul>
            	<strong>Attività:</strong>
                <li>・Sviluppo di logiche di interazione e flussi di navigazione.</li>
                <li>・Integrazione del Model con la View per presentare i dati e le funzionalità agli utenti.</li>
                <li>・Assicurazione della qualità attraverso test e debugging per rilasciare una soluzione robusta.</li>
            </ul>
        </div>
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