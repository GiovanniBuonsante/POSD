<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

	<?php
	include './php/head.php';
	?>
  
	<body> 
  
      <?php
      include './php/navbar.php';
      ?>

      <?php
      include './php/bodyHomepage.php';
      ?>

      <?php
      include './php/footer.php';
      ?>

      <?php
      include './php/script.php';
      ?>
      
    </body>
</html>