<?php
//chargement du header
include "template/header.php";
 ?>

<form class="col-12 col-md-12 col-lg-8 mx-auto my-5" action="ajoutEmprunteurTreatment.php" method="post">
  <div class="form-group">
    <label for="email">Email : </label>
    <input type="email" class="form-control" id="email" name="Email" placeholder="Email..." value="">
  </div>

  <div class="form-group">
    <label for="Nom">Nom : </label><br>
    <input type="text" class="form-control" id="Nom" placeholder="Nom..." name="nom" value="">
  </div>
  <div class="form-group">
    <label for="Prenom">Prenom : </label><br>
    <input type="text" class="form-control" id="Prenom" placeholder="Prenom..." name="prenom" value="">
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe : </label><br>
    <input type="password" class="form-control" id="Password" placeholder="Mot de passe..." name="password" value="">
  </div>
  <div class="form-group">
    <label for="confirmation-password">Confirmez votre mot de passe : </label><br>
    <input type="password" class="form-control" id="confirmation-password" placeholder="confirmez votre mot de passe..." name="confirm-password"  value="">
  </div>
  <div class="form-group">
    <label for="Statut">Statut : </label><br>
    <input type="text" class="form-control" id="Statut" placeholder="Statut..." name="statut"  value="">
  </div>
  <div class="form-group">
    <label for="Poste">Poste</label>
    <input type="text" class="form-control" id="Poste" placeholder="Poste..." name="poste"  value="">
  </div>
  <button type="submit" class="btn btn-success">Ajouter</button>
</form>

 <?php
 //chargement du footer
 include "template/footer.php"
  ?>
