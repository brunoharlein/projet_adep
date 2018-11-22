<?php
require "service/errorManager.php";
//We load header
include "template/header.php";
 ?>


<main>
<section class="container h-100 d-flex align-items-center">
	<div class="row w-100 h-75 flex-column justify-content-center align-items-center">
      <div class="w-50 h-75">
        <h5 class="mb-5 text-center">
          Pour accéder à l'interface d'emprunt de matériels, <br>
          veuillez vous connecter avec vos identifiants :
        </h5>
        <!-- new -->
        <form  action="login.php" method="post" name="Connexion" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="email">Votre Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Votre@email.com" required autofocus>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="password">Votre mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" placeholder="Password" required>
            <small id="passwordHelp" class="form-text text-muted"><a href="#">Mot de passe oublié ?</a></small>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </div>
        </form>
      </div>
      <div class="w-100 h-25">
        <?php
        //If a message was transmitted by the url we retrieve it and we display it
        displayMessages();
         ?>
      </div>
  </div>
</section>
</main>
<?php
include "template/footer.php";
 ?>
