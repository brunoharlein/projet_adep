<?php
//require "service/errorManager.php";
//We load header
include "view/template/header.php";
 ?>


<main>
  <?php echo $_SERVER['SERVER_NAME']; ?>
  <!-- Form Login -->
  <?php include "view/form/loginForm.php"; ?>
</main>

<?php include "view/template/footer.php"; ?>
