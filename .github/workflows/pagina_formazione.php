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
        .containerForm {
            max-width: 800px;
			margin: 40px 40px;
        }
        .sectionForm {
            background: #fff;
            margin: 1rem 0;
            box-shadow: 0 0 27px rgba(0, 0, 0, 0.1);
        }
        .sectionForm h2 {
            color: #333;
            margin-bottom: 1rem;
        }
        .sectionForm a {
            color: #333;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem 0;
        }
        .sectionForm a:hover {
            color: #007BFF;
        }
        .footerForm {
            text-align: center;
            padding: 1rem 0;
            background: #333;
            color: #fff;
        }
        .iconForm {
            margin-right: 0.5rem;
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
        <div class="imagePattern2" style="background-image: url('./img/libri.jpg');"> 
        <h1 class="patternH1">Formazione</h1></div>
      </section>
      <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
      	
      <div class="containerForm" style="">

        <section class="sectionForm" style="border-radius: 30px;">
			<h2 style="background-color: rgb(92, 201, 201); color: #fff; padding: 20px; border-radius: 30px 30px 0 0;">Materiali Didattici</h2>
            <div style="padding: 20px 20px 40px;">
            
              <h3>Video:</h3>
              <a href="https://youtu.be/AtcA4D0RzQM?si=Vn4fgVTceAir4cNY"><i class="fas fa-video icon" aria-hidden="true"></i> Introduzione al GDPR<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://youtu.be/MJxtTIyuqlI?si=AoRM13GAu-NCdDQQ"><i class="fas fa-video icon" aria-hidden="true"></i> Cybersecurity<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://youtu.be/IrauF74kGv0?si=oPY_Id-ApDFuN0hh"><i class="fas fa-video icon" aria-hidden="true"></i> Cybersecurity: lato oscuro<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://www.youtube.com/watch?v=znYkym45t38"><i class="fas fa-video icon" aria-hidden="true"></i> Gestione delle Violazioni dei Dati<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a>

              <h3>Documenti e Slide:</h3>
              <a href="https://gdpr-info.eu/"><i class="fas fa-file-pdf icon" aria-hidden="true"></i> Guida Completa al GDPR<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://gdpr.eu/checklist/"><i class="fas fa-check-square icon" aria-hidden="true"></i> Checklist di Conformità<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://ecommercelegale.it/adempimenti-legali/privacy-policy-sito-web-modello-a-norma-di-gdpr/"><i class="fas fa-file-alt icon" aria-hidden="true"></i> Modelli di Privacy Policy<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
           	  <a href="https://www.agendadigitale.eu/sicurezza/data-breach-nel-gdpr-cose-e-cosa-sapere-per-segnalazione-e-prevenzione/"><i class="fas fa-file-alt icon" aria-hidden="true"></i> Data breach nel GDPR<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a>
           </div>
    	</section>

        <section class="sectionForm" style="border-radius: 30px;">
            <h2 style="background-color: rgb(172, 87, 87); color: #fff; padding: 20px; border-radius: 30px 30px 0 0;">Best Practice e Raccomandazioni</h2>
            <div style="padding: 20px 20px 40px;">
              <h3>Protezione dei dati personali</h3>
              <ul>
                  <li><i class="fas fa-shield-alt"></i> È fondamentale non divulgare informazioni e dati personali online.</li>
                  <li><i class="fas fa-user-secret"></i> Evitare di condividere informazioni legate ai documenti di identità e alle credenziali della carta di credito.</li>
                  <li><i class="fas fa-key"></i> Non divulgare il proprio indirizzo IP e, se possibile, utilizzare indirizzi IP dinamici.</li>
              </ul>
              <h3>E-mail indesiderate</h3>
              <ul>
                  <li><i class="fas fa-envelope"></i> Non aprire e-mail da indirizzi non ufficiali o sospetti.</li>
                  <li><i class="fas fa-exclamation-triangle"></i> Diffidare da e-mail con banner che imitano quelli originali ma non lo sono.</li>
                  <li><i class="fas fa-fish"></i> Evitare il phishing non cliccando su link provenienti da pop-up o indirizzi lunghi e sospetti.</li>
              </ul>
              <h3>Password complesse</h3>
              <ul>
                  <li><i class="fas fa-lock"></i> Utilizzare password complesse con combinazioni alfanumeriche.</li>
                  <li><i class="fas fa-fingerprint"></i> Attivare l’autenticazione a due fattori per una maggiore sicurezza.</li>
              </ul>
              <h3>Wi-Fi privato</h3>
              <ul>
                  <li><i class="fas fa-wifi"></i> Utilizzare connessioni Wi-Fi private per evitare attacchi esterni.</li>
                  <li><i class="fas fa-network-wired"></i> Utilizzare una rete VPN quando si lavora fuori sede per proteggersi da potenziali attacchi.</li>
              </ul>
              <h3>Firewall ed affini</h3>
              <ul>
                  <li><i class="fas fa-fire"></i> Attivare il firewall del sistema operativo o installarne uno di terze parti.</li>
                  <li><i class="fas fa-shield-alt"></i> Utilizzare firewall per proteggere i dati e prevenire minacce dalla rete.</li>
              </ul>
              <h3>Sistemi di sicurezza specifici</h3>
              <ul>
                  <li><i class="fas fa-cogs"></i> Investire in software di sicurezza informatica adatti alle esigenze specifiche dell'azienda.</li>
                  <li><i class="fas fa-industry"></i> Anche le piccole aziende dovrebbero considerare questi investimenti come opportunità per crescere e proteggere i propri dati.</li>
              </ul>
              <h3>Backup ed aggiornamenti costanti</h3>
              <ul>
                  <li><i class="fas fa-database"></i> Effettuare backup periodici dei dati su server dedicati.</li>
                  <li><i class="fas fa-sync-alt"></i> Mantenere sempre aggiornati i sistemi operativi e i programmi utilizzati.</li>
              </ul>
              <h3>Comunicazione primaria</h3>
              <ul>
                  <li><i class="fas fa-comments"></i> Comunicare prontamente tra i membri del team riguardo a potenziali problemi di sicurezza.</li>
                  <li><i class="fas fa-headset"></i> Segnalare immediatamente eventuali attacchi informatici al responsabile del reparto.</li>
              </ul>
              <h3>Controlli di terze parti</h3>
              <ul>
                  <li><i class="fas fa-user-check"></i> Seguire le disposizioni aziendali riguardo il trattamento dei dati sensibili di terze parti.</li>
                  <li><i class="fas fa-ban"></i> Disattivare l'accesso ai dati sensibili dopo aver completato il lavoro e non utilizzare storage mobile.</li>
              </ul>
              <h3>L’uomo e le sue capacità</h3>
              <ul>
                  <li><i class="fas fa-user-graduate"></i> Investire nella formazione degli operatori per distinguere tra attività malevole e non.</li>
                  <li><i class="fas fa-lightbulb"></i> L'istruzione e il buon senso degli operatori possono ridurre significativamente gli attacchi esterni.</li>
              </ul>

              
        	</div>
        </section>

        <section class="sectionForm" style="border-radius: 30px;">
            <h2 style="background-color: rgb(93, 201, 102); color: #fff; padding: 20px; border-radius: 30px 30px 0 0;">Risorse Aggiuntive</h2>
            <div style="padding: 20px 20px 40px;">
              <a href="https://gdpr.eu/faq/"><i class="fas fa-question-circle icon" aria-hidden="true"></i> FAQ sul GDPR<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://edpb.europa.eu/edpb_en"><i class="fas fa-external-link-alt icon" aria-hidden="true"></i> Link Utili<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="https://gdpr-info.eu/"><i class="fas fa-external-link-alt icon" aria-hidden="true"></i> Sito ufficiale del GDPR<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a><br>
              <a href="mailto:buonsanteg@studenti.uniba.it"><i class="fas fa-envelope icon" aria-hidden="true"></i> Contattaci<i class="fa-solid fa-arrow-right" aria-hidden="true" style="margin-left: 10px;"></i></a>
        	</div>
        </section>

        
        
        
        
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