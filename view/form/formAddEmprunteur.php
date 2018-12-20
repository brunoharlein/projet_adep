<div class="text-center">
  <h2 class="mt-5">Ajouter un emprunteur</h2>
  <a href="../emprunteurs"><button class="btn btn-primary">Retour à la liste</button></a>
</div>
<form class="col-12 col-md-12 col-lg-8 mx-auto my-5" action="" method="post">
  <div class="form-group">
    <label for="email">Email : </label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email...ex : test@example.com" value="">
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
    <label for="Password">Mot de passe : (minimum 6 caractères, un chiffre et une majuscule)</label><br>
    <input type="password" class="form-control" id="Password" placeholder="Mot de passe..." name="password" value="">
  </div>
  <div class="form-group">
    <label for="Status">Status : </label><br>
    <input type="text" class="form-control" id="Status" placeholder="Status..." name="status"  value="">
  </div>
  <div class="form-group">
    <label for="Poste">Poste</label>
    <input type="text" class="form-control" id="Poste" placeholder="Poste..." name="poste"  value="">
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-success">Ajouter</button>
  </div>
</form>
