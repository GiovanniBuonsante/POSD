<section class="navigation">
      <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
      <nav class="nav-container">
        <div class="logo"> 
          <a href="/index.php">
          <img src="./img/logo.png" alt="POSD"></a>
          <a href="/index.php" style="width: 83px; color: #232323; font-weight: bold; font-size: 30px; ">POSD</a>
          <a class="home" href="/index.php"><i class="fa-solid fa-house" aria-hidden="true" style="margin-left: 10px; font-size: 20px;"></i></a>
          <div class="search-container" style="width: 400px;"></div>

          <button class="buttonLoginHome"onclick="document.getElementById('id01').style.display='block'"><i class="fa-regular fa-circle-user" aria-hidden="true" style="margin-right: 10px; font-size: 20px;"></i>Accedi</button>
			
          <div id="id01" class="modal">
            <form class="modal-content animate" action="./php/login.php" method="post">
              
              <div class="containerLogin">
                <label for="uname"><b>Username</b></label>
                <input class="inputLogin" type="text" placeholder="Inserisci Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input class="inputLogin" type="password" placeholder="Inserisci Password" name="password" id="myInput" required>
                <input type="checkbox" onclick="myFunction()" style="margin: 10px; ">Mostra Password

                <button class="buttonLogin" type="submit">Accedi</button>
             
              </div>

              <div class="containerLogin" style="height: 150px; background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancella</button>
                <button type="button" class="buttonFormLogin" onclick="document.getElementById('id03').style.display='block'">Password dimenticata?</button>
              	<button type="button" class="buttonFormLogin" onclick="document.getElementById('id02').style.display='block'">Registrati</button>
              </div>
            </form>
          </div>
          
          <div id="id02" class="modal">
            <form class="modal-content animate" action="./php/register.php" method="post" onsubmit="return validateForm()">
              
              <div class="containerLogin">
                <label for="uname"><b>Username</b></label>
                <input class="inputLogin" type="text" placeholder="Inserisci Username" name="username" required="">
                
                <label for="email"><b>Email</b></label>
				<input class="inputLogin" type="text" placeholder="Inserisci Email" name="email" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$" title="Inserisci un'email valida" required="">
                
                <label for="psw"><b>Password</b></label>
                <input class="inputLogin" type="password" placeholder="Inserisci Password" name="password" id="password" required="">
                
                <label for="psw-confirm"><b>Conferma Password</b></label>
				<input class="inputLogin" type="password" placeholder="Conferma Password" name="password_confirm" id="password_confirm" required="">

                <button class="buttonLogin" type="submit">Registrati</button>
                
              </div>

              <div class="containerLogin" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancella</button>
                
              </div>
            </form>
          </div>
          <div id="id03" class="modal">
            <form class="modal-content animate" action="./php/send_reset_email.php" method="post" style="height: 400px;">
              
              <div class="containerLogin">
                <label for="email"><b>Email</b></label>
                <input class="inputLogin" type="text" placeholder="Inserisci email" name="email" required="">

                
                
                  
                <button class="buttonLogin" type="submit">Invia Email di Recupero</button>
                
              </div>

              <div class="containerLogin" style="margin-top: 130px; background-color: #f1f1f1;">
                <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancella</button>
                
              </div>
            </form>
          </div>


        </div>
        <div class="mobile-button">
          <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
        </div>
        <div id="mobile-sidenav" class="mobile-links">
          <a href="javascript:void(0)" class="closebtn w3-round" onclick="toggleMobileNavigation()">&times;</a>

          <a href="/pagina_pkb.php" onclick="toggleMobileNavigation()">PKB</a>
          <a href="/pagina_pattern.php" onclick="toggleMobileNavigation()">Privacy Patterns</a>
          <a href="/pagina_gdpr_pbd.php" onclick="toggleMobileNavigation()">GDPR e PbD</a>
          <a href="/pagina_iso.php" onclick="toggleMobileNavigation()">ISO 9241-210</a>
          <a href="/pagina_notificheAgg.php" onclick="toggleMobileNavigation()">Notifiche e Aggiornamenti</a>
          <a href="/pagina_add_notification.php" onclick="toggleMobileNavigation()">Segnala Vulnerabilità</a>
          <a href="/pagina_formazione.php" onclick="toggleMobileNavigation()">Formazione</a>        
        </div>
      </nav>
    </section>
    <hr class="separator2">
    <section>
    <nav class="nav-container">
     <div class="links">
          	<a href="/pagina_pkb.php" >PKB</a>|
            <a href="/pagina_pattern.php" >Privacy Patterns</a>|
            <a href="/pagina_gdpr_pbd.php" >GDPR e PbD</a>|
            <a href="/pagina_iso.php" >ISO 9241-210</a>|
            <a href="/pagina_notificheAgg.php" >Notifiche e Aggiornamenti</a>|
            <a href="/pagina_add_notification.php" >Segnala Vulnerabilità</a>|
            <a href="/pagina_formazione.php" >Formazione</a>    
        </div>
        </nav>
    </section>