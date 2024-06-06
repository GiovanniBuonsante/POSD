<?php
//session_start();
//if (isset($_SESSION['user_id'])) {
//    header("Location: indexLoggato.php");
//    exit();
//}
//?>

<?php
session_start();
// Controlla se l'utente è loggato
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<html lang="en">
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

    <section class="hero">
      <div class="hero-image">
        <h1>POSD</h1>
        <p>Posd offre una serie di funzionalità progettate per soddisfare le esigenze di una vasta gamma di utenti, tra cui sviluppatori, responsabili della sicurezza informatica e aziende alla ricerca di supporto per la conformità normativa. </p>
      </div>   
    </section>

    <section id="secondBox">
      <div class="secondBox">
        <h3>Inizia a Navigare la Privacy Knowledge Base</h3>
        <p>Esplora la nostra vasta raccolta di risorse sulla privacy dei dati e sulla conformità normativa attraverso la <strong>Privacy Knowledge Base (PKB)</strong>. 
          Trova soluzioni pratiche, informazioni dettagliate e best practice per affrontare le sfide della protezione dei dati personali</p>
        <div class="l-cards">
          <div class="l-card">
            <div class="circular-portrait">
              <img src="./img/explore.png" alt="Esplora" style="width: 80px;height: 80px;"/>
            </div>
            <p class="textImage">Esplora la PKB</p>
            <img src="./img/linea.png" style="width: 90px;height: 60px;"/>
            <a href="/pagina_pkb.php" class="buttonCard">Esplora</a>
          </div>
          <div class="l-card">
            <div class="circular-portrait">
              <img src="./img/search.png" alt="Cerca" style="width: 80px;height: 80px;"/>
            </div>
            <p class="textImage">Scopri i privacy Patterns</p>
            <img src="./img/linea.png" style="width: 90px;height: 60px;"/>
            <a href="/pagina_pattern.php" class="buttonCard">Scopri</a>
          </div>
          <div class="l-card">
            <div class="circular-portrait">
              <img src="./img/logopartecipa.png" alt="Partecipa" style="width: 80px;height: 80px;"/>
            </div>
            <p class="textImage">Partecipa Attivamente</p>
            <img src="./img/linea.png" style="width: 90px;height: 60px;"/>
            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                <a href="" class="buttonCard">Partecipa</a>
            <?php else: ?>
                <a href="/pagina_richiesta.php" class="buttonCard">Partecipa</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials" style="padding: 50px;">
      <h2 style="text-align: center;">Frasi sulla privacy</h2>
      <div class="slideshow-container">

      <div class="mySlides">
        <p><q><em>Adoro le grandifeste; sono così intime, in quelle piccole non c'è nessuna privacy!</em></q></p>
        <p class="author"><strong>ELIZABETH DEBIZCKI - Jordan Baker</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>Il problema non è la tecnologia, ma l'uso che se ne fa. Ogni cosa comporta dei rischi, l'importante è esserne consapevoli e valutare se il prezzo che paghiamo (meno privacy) è adeguato a quanto riceviamo in cambio.</em></q></p>
        <p class="author"><strong>STEFANO NASETTI</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>Non so perché le persone siano così entusiaste di rendere pubblici i dettagli della loro vita privata, dimenticano che l'invisibilità è un super potere.</em></q></p>
        <p class="author"><strong>BANKSY</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>Affermare che non si è interessati al diritto alla privacy perché non si ha nulla da nascondere è come dire che non si è interessati alla libertà di parola perché non si ha nulla da dire.</em></q></p>
        <p class="author"><strong>EDWARD SNOWDEN</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>Il problema più grande di quest'epoca elettronica riguarda la privacy.</em></q></p>
        <p class="author"><strong>ANDREW STEPHEN GROVE</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>Prima dovevi uscire e nasconderti nei cespugli ora puoi violare l'intimità di chiunque seduto al tuo computer bevendo una tazza di caffè.</em></q></p>
        <p class="author"><strong>MARISKA HARGITAY - Olivia Benson</strong></p>
      </div>

      <div class="mySlides">
        <p><q><em>La privacy non è qualcosa di separato dal rispetto e dalla dignità umana.</em></q></p>
        <p class="author"><strong>TIM COOK</strong></p>
      </div>
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      </div>

      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
        <span class="dot" onclick="currentSlide(6)"></span> 
        <span class="dot" onclick="currentSlide(7)"></span> 
      </div>      
    </section>

    <section class="thirdSectionHead">
      <div class="thirdSection">
        <div class="content">
          <h1>Privacy Knowledge Base</h1>
          <p>Una Privacy Knowledge Base (PKB) è una raccolta di informazioni sulla privacy e protezione dei dati.</p>
          <button class="buttonThirdSection">
          <a href="/pagina_pkb.php">Continua a leggere</a></button>
      </div>
      </div>
    </section>


    <section class="contact" id="contact">
      <div class="form">
        <h2>Feedback</h2>
        <div class="containerContact">
          <form name="myForm" action="./php/process_feedback.php" method="post" required>
            <div class="row">
              <div class="col-25">
                <label for="name">Name*</label>
              </div>
              <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Inserisci nome...">
              </div>
            </div>   
            <div class="row">
              <div class="col-25">
                <label for="email">Email*</label>
              </div>
              <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Inserisci email">
              </div>
            </div>   
            <div class="row">
              <div class="col-25">
                <label for="subject">Messaggio*</label>
              </div>
              <div class="col-75">
                <textarea id="message" name="message" placeholder="Scrivi qui.." style="height:200px"></textarea>
              </div>
            </div>
            <p>By submiting this form, you agree to our <a href="#" target="_blank">privacy policy</a></p><br>
            <input type="submit" value="Invia">
          </form>
        </div>
      </div>
    </section>
    <?php
		include './php/footer.php';
	?>
    <?php
        include './php/script.php';
    ?>
  </body>
</html>