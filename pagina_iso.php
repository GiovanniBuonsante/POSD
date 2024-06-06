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
        <h1 class="patternH1">ISO 9241-210</h1></div>
      </section>
      <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      	<div style="text-align: center; margin-bottom: 40px; margin-top: 40px;">
        	<a href="/pagina_iso_mvc.php" class="buttonPattern">ISO e MVC</a>
        </div>
      <section class="testo" style="margin: 40px;">
        <h1>ISO 9241-210: Ergonomics of Human-System Interaction</h1>
        <h2>Introduzione</h2>
        <p>L'ISO 9241-210 è uno standard internazionale che fornisce linee guida per la progettazione centrata sull'utente (HCD - Human-Centred Design) di sistemi interattivi. Il suo obiettivo è migliorare l'usabilità, l'accessibilità e la soddisfazione dell'utente.</p>

        <h2>Fasi del Ciclo di Vita della Progettazione Centrata sull'Utente</h2>

        <h3 id="uno"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(228, 139, 39); color: #fff;">1</strong>  Comprendere e Specificare il Contesto d'Uso</h3>
        <p><strong>Descrizione:</strong> Questa fase prevede l'analisi dell'ambiente in cui il sistema sarà utilizzato, inclusi gli utenti, le attività, gli strumenti e le condizioni fisiche e sociali.</p>
        <p><strong>Ruolo:</strong> Identificare le caratteristiche degli utenti e il contesto d'uso per progettare soluzioni adeguate.</p>
        <p><strong>Risorse Esterne:</strong></p>
        <ul>
            <li><a href="https://www.usability.gov/what-and-why/user-centered-design.html" target="_blank">Human-Centered Design Processes for Interactive Systems</a></li>
            <p><strong>Principi Pbd associati:</strong></p>
            <li><a href="/pagina_gdpr_pbd.php#proattivita">Proattività, Non Reattività<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_gdpr_pbd.php#rispetto">Rispetto per la Privacy degli Utenti<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        </ul>

        <h3 id="due"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(228, 139, 39); color: #fff;">2</strong> Specificare i Requisiti dell'Utente</h3>
        <p><strong>Descrizione:</strong> Questa fase riguarda la raccolta e la definizione dettagliata delle esigenze e delle aspettative degli utenti, basandosi sulle informazioni raccolte nella fase precedente.</p>
        <p><strong>Ruolo:</strong> Assicurare che il design soddisfi i bisogni reali degli utenti.</p>
        <p><strong>Risorse Esterne:</strong></p>
        <ul>
            <li><a href="https://www.interaction-design.org/literature/article/user-requirements-specification" target="_blank">User Requirements Specification</a></li>
            <p><strong>Principi Pbd associati:</strong></p>
            <li> <a href="/pagina_gdpr_pbd.php#privacyPred">Privacy come Impostazione Predefinita<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_gdpr_pbd.php#visTras">Visibilità e Trasparenza<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        
        </ul>

        <h3 id="tre"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(228, 139, 39); color: #fff;">3</strong> Produrre Soluzioni di Progettazione</h3>
        <p><strong>Descrizione:</strong> Creazione di prototipi e design che rispondano ai requisiti degli utenti. Questa fase può includere schizzi, wireframe, mockup e prototipi funzionali.</p>
        <p><strong>Ruolo:</strong> Trasformare i requisiti in soluzioni concrete che possono essere valutate e testate.</p>
        <p><strong>Risorse Esterne:</strong></p>
        <ul>
            <li><a href="https://www.smashingmagazine.com/2018/01/human-centered-design-process/" target="_blank">Designing Solutions in Human-Centered Design</a></li>
            <p><strong>Principi Pbd associati:</strong></p>
            <li><a href="/pagina_gdpr_pbd.php#privacyProg">Privacy Integrata nella Progettazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_gdpr_pbd.php#funzTot">Funzionalità Totale - Zero-Sum<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            <li><a href="/pagina_gdpr_pbd.php#sicuEnd">Sicurezza End-to-End<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        </ul>

        <h3 id="qua"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(228, 139, 39); color: #fff;">4</strong> Valutare le Soluzioni di Progettazione</h3>
        <p><strong>Descrizione:</strong> Testare i prototipi e le soluzioni con gli utenti finali per raccogliere feedback e identificare eventuali problemi di usabilità.</p>
        <p><strong>Ruolo:</strong> Garantire che il design finale sia efficace, efficiente e soddisfacente per gli utenti.</p>
        <p><strong>Risorse Esterne:</strong></p>
        <ul>
            <li><a href="https://www.nngroup.com/articles/usability-testing-101/" target="_blank">Usability Testing</a></li>
            <p><strong>Principi Pbd associati:</strong></p>
            <li><a href="/pagina_gdpr_pbd.php#visTras">Visibilità e Trasparenza<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_gdpr_pbd.php#proattivita">Proattività, Non Reattività<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            <li><a href="/pagina_gdpr_pbd.php#rispetto">Rispetto per la Privacy degli Utenti<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            
        </ul>

        <h3 id="cin"><strong style="border-radius: 30px; padding: 5px 12px; background-color: rgb(228, 139, 39); color: #fff;">5</strong> Implementare e Rilasciare la Soluzione</h3>
        <p><strong>Descrizione:</strong> Dopo che il design è stato testato e iterato, la soluzione viene implementata e rilasciata per l'uso finale.</p>
        <p><strong>Ruolo:</strong> Assicurare che il sistema sia implementato correttamente e che funzioni come previsto nell'ambiente reale.</p>
        <p><strong>Risorse Esterne:</strong></p>
        <ul>
            <li><a href="https://www.usability.gov/how-to-and-tools/methods/developing.html" target="_blank">Implementing User-Centered Design</a></li>
            <p><strong>Principi Pbd associati:</strong></p>
            <li><a href="/pagina_gdpr_pbd.php#sicuEnd">Sicurezza End-to-End<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
			<li><a href="/pagina_gdpr_pbd.php#privacyProg">Privacy Integrata nella Progettazione<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
            <li><a href="/pagina_gdpr_pbd.php#visTras">Visibilità e Trasparenza<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a></li>
        </ul>

        <h2>Ruolo nella Progettazione Ergonomica</h2>
        <p>Le fasi dell'ISO 9241-210 sono essenziali per garantire che i sistemi interattivi siano progettati in modo ergonomico, tenendo in considerazione le capacità e le limitazioni degli utenti, nonché l'ambiente d'uso. Questo approccio migliora non solo l'efficienza e l'efficacia del sistema, ma anche la soddisfazione complessiva degli utenti.</p>

        <h2>Conclusione</h2>
        <p>Seguire le linee guida dell'ISO 9241-210 consente di creare sistemi che siano non solo funzionali, ma anche intuitivi e piacevoli da usare. Investire nel design centrato sull'utente è fondamentale per il successo a lungo termine di qualsiasi sistema interattivo.</p>

        <h2>Ulteriori Risorse</h2>
        <ul>
            <li><a href="https://www.iso.org/standard/77520.html" target="_blank">ISO 9241-210:2019(en) - Ergonomics of human-system interaction — Part 210: Human-centred design for interactive systems</a></li>
            <li><a href="https://www.designkit.org/human-centered-design" target="_blank">Human-Centered Design</a></li>
            <li><a href="https://www.interaction-design.org/literature/topics/ux-design" target="_blank">The Basics of User Experience (UX) Design</a></li>
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