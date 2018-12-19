<h2 class="text-center mt-5">Modifier un emprunteur</h2>
<a href="../emprunteurs"><button type="submit" class="btn btn-primary">Retour à la liste</button></a>
<form class="col-12 col-md-12 col-lg-8 mx-auto my-5" action="" method="post">
<input type="hidden" class="form-control" name="id" id="id" value="<?php echo (isset($emprunteur)?$emprunteur["id"]:""); ?>">

  <div class="form-group">
    <label for="email">Email : </label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo (isset($emprunteur)?$emprunteur["email"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="Nom">Nom : </label><br>
    <input type="text" class="form-control" id="Nom" name="nom" value="<?php echo (isset($emprunteur)?$emprunteur["nom"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="Prenom">Prenom : </label><br>
    <input type="text" class="form-control" id="Prenom" name="prenom" value="<?php echo (isset($emprunteur)?$emprunteur["prenom"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe : </label><br>
    <input type="password" class="form-control" id="Password" name="password" value="<?php echo (isset($emprunteur)?$emprunteur["password"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="confirmation-password">Confirmez votre mot de passe : </label><br>
    <input type="password" class="form-control" id="confirmation-password" name="password-confirm"  value="<?php echo (isset($emprunteur)?$emprunteur["password-confirm"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="Statut">Statut : </label><br>
    <input type="text" class="form-control" id="Statut" name="statut"  value="<?php echo (isset($emprunteur)?$emprunteur["statut"]:""); ?>">
  </div>
  <div class="form-group">
    <label for="Poste">Poste</label>
    <input type="text" class="form-control" id="Poste" name="poste"  value="<?php echo (isset($emprunteur)?$emprunteur["poste"]:""); ?>">
  </div>
  <button type="submit" class="btn btn-success">Ajouter</button>
</form>
