<section class="container">
  <div class="d-flex flex-column my-3">
  <div class="d-flex justify-content-between mt-3">
    <h2>Modifer</h2>
    <a <?php setHref("emprunteurs") ?>><button class="btn btn-success sm-none">Retour</button></a>
  </div>
<form class="col-12 col-md-12 col-lg-12 mx-auto my-3" action="" method="post">
<input type="hidden" class="form-control" name="id" id="id" value="<?php echo (isset($emprunteur)?$emprunteur["id"]:""); ?>">

  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="email">Email</span>
      </div>
      <input type="email" class="form-control" id="email" name="email" value="<?php echo (isset($emprunteur)?$emprunteur["email"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="nom">Nom</span>
      </div>
      <input type="text" class="form-control" id="nom" name="nom" value="<?php echo (isset($emprunteur)?$emprunteur["nom"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="prenom">Prenom</span>
      </div>
      <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo (isset($emprunteur)?$emprunteur["prenom"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="password">password</span>
      </div>
      <input type="password" class="form-control" id="password" name="password" value="<?php echo (isset($emprunteur)?$emprunteur["password"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="confirmationPassword">confirmationPassword</span>
      </div>
      <input type="password" class="form-control" id="confirmationPassword" name="confirmationPassword" value="<?php echo (isset($emprunteur)?$emprunteur["password"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="status">Status</span>
      </div>
      <input type="text" class="form-control" id="status" name="status" value="<?php echo (isset($emprunteur)?$emprunteur["status"]:""); ?>" required>
    </div>
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="poste">Poste</span>
      </div>
      <input type="poste" class="form-control" id="poste" name="poste" value="<?php echo (isset($emprunteur)?$emprunteur["poste"]:""); ?>" required>
    </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary float-right">Enregistrer</button>
  </div>
</form>
</section>
