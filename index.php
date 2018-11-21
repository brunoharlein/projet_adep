<?php
include "template/header.php";
 ?>
<main>
<section class="container">
	<div class="row">
      <form method="post" action='login.php' name="Connexion" class="col-md-6 mx-auto">
          <div class="form-group ">
            <label for="email" class="mb-0">Votre email</label><br>
            <input type="text" class="span3" name="email" id="email" placeholder="Votre nom d'utilisateur" required="" autofocus="">
          </div>
          <div class="form-group">
             <label for="password" class="mb-0">Votre mot de passe</label><br>
             <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" required="">
           </div>
          <div >
            <input type="submit" class=" btn btn-primary" value="Vous connecter">
            <a href="#">Mot de passe oublié?</a>
          </div>
      </form>
  </div>
</section>
</main>
<?php
include "template/footer.php";
 ?>
