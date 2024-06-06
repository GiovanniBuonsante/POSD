<script async>
        const backToTop = document.getElementById("back-to-top");

        function toggleMobileNavigation() {
          const mobileNavigation = document.getElementById("mobile-sidenav");
          mobileNavigation.classList.toggle('mobile-links-active');
        }

        function goToTop() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        function scroll() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) backToTop.style.display = "block";
          else backToTop.style.display = "none";
        }

        window.onscroll = function() {scroll()};
        
    </script>
    <script async>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        function validateForm() {
          var x = document.forms["myForm"]["fname"].value;
          var y = document.forms["myForm"]["email"].value;
          var z = document.forms["myForm"]["subject"].value;
          if (x == "" || x == null) {
            alert("Name must be filled out");
            return false;
          }
          if (y == "" || x == null) {
            alert("Email must be filled out");
            return false;
          }
          if (z == "" || x == null) {
            alert("Message must be filled out");
            return false;
          }
        }
    </script>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    <script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    <script>
        function toggleEditing() {
            var usernameField = document.getElementById("username");
            var emailField = document.getElementById("email");
            var saveButton = document.getElementById("save_button");
            var editButton = document.getElementById("edit_button");

            if (usernameField.disabled) {
                usernameField.disabled = false;
                emailField.disabled = false;
                saveButton.style.display = 'block';
                editButton.textContent = 'Blocca';
            } else {
                usernameField.disabled = true;
                emailField.disabled = true;
                saveButton.style.display = 'none';
                editButton.textContent = 'Modifica';
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/php/session_data.php')
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.warn('Utente non loggato:', data.error);
                    } else {
                        document.getElementById('username').value = data.username;
                        document.getElementById('email').value = data.email;
                    }
                })
                .catch(error => {
                    console.error('Errore nel recupero dei dati della sessione:', error);
                });
        });
    </script>
    <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
    function validateForm() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("password_confirm").value;

      // Controllo password
      if (password !== confirmPassword) {
        alert("Le password non corrispondono. Per favore, riprova.");
        return false;
      }

      // Controllo email (opzionale, poiché il pattern nell'input già fa questo controllo)
      var emailPattern = /^[a-zA-Z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,}$/;
      if (!emailPattern.test(email)) {
        alert("Inserisci un'email valida.");
        return false;
      }

      return true;
    }
    </script>