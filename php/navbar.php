<section class="navigation">
      <button onclick="goToTop()" id="back-to-top" title="Go to top"><i class="fa fa-toggle-up"></i></button>
      <nav class="nav-container">
        <div class="logo"> 
          <a href="/index.php">
          <img src="/img/logo.png" alt="POSD"></a>
          <a href="/index.php" style="width: 83px; color: #232323; font-weight: bold; font-size: 30px; ">POSD</a>
         
          <a class="home" href="/index.php"><i class="fa-solid fa-house" aria-hidden="true" style="margin-left: 10px; font-size: 20px;"></i></a>
          <div class="search-container" style="width: 400px;"></div>
          
         	<button class="buttonAccount" onclick="document.getElementById('id02').style.display='block'"><i class="fa-regular fa-circle-user" aria-hidden="true"></i></button>
			<div id="id02" class="modal">
            	<form class="modal-content animate" action="php/update_account.php" method="post">
              
              		<div class="containerLogin">
                		<label for="uname"><b>Username</b></label>
                		<input class="inputLogin" type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required="" disabled>
            
                
                		<label for="email"><b>Email</b></label>
						<input class="inputLogin" type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required="" disabled>
                        <button class="buttonLogin" type="button"  id="edit_button" onclick="toggleEditing()">Modifica</button>                                   
                		<button class="buttonLogin" type="submit" id="save_button" style="display:none;">Aggiorna</button>
                
        			</div>

       				<div class="containerLogin" style="background-color:#f1f1f1">
                		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                
       				</div>
      			</form>
          </div>
          <form action="php/logout.php" method="post">
            <button class="buttonAccount" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
       	 </form>

          

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