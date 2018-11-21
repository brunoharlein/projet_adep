<?php
session_start();
//On charge le header
include "template/header.php";
//Si un code d'erreur lié à l'enregistrement de l'utilisateur nous a été renvoyé
// if(isset($_GET["message"])) {
//   $message = getErrorMessages($_GET["message"]);
//   echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
// }
 ?>

<form class="w-50 mx-auto my-5" action="ajoutEmprunteurTreatment.php" method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="Email" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['Email'];} ?>>
  </div>

  <div class="form-group">
    <label for="Nom">Nom : </label>
    <input type="text" class="form-control" id="Nom" name="nom" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['nom'];} ?>>
  </div>
  <div class="form-group">
    <label for="Prenom">Prenom : </label>
    <input type="text" class="form-control" id="Prenom" name="prenom" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['prenom'];} ?>>
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe : </label>
    <input type="password" class="form-control" id="Password" name="password" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['password'];} ?>>
  </div>
  <div class="form-group">
    <label for="Status">Status : </label>
    <input type="text" class="form-control" id="Status" name="status" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['status'];} ?>>
  </div>
  <div class="form-group">
    <label for="Poste">Poste</label>
    <input type="password" class="form-control" id="Poste" name="poste" <?php if(isset($_SESSION["answers"])){echo "value=" . $_SESSION['answers']['poste'];} ?>>
  </div>
  <button type="submit" class="btn btn-success">Modifier</button>
</form>

 <?php
 //On charge le footer
 include "template/footer.php"
  ?>
