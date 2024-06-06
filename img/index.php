<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: indexLoggato.php");
    exit();
}
?>
<?php
include 'header.php';
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
