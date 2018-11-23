<?php
include "template/header.php";
 ?>

<main>
<section class="container">
  <div class="d-flex flex-column justify-content-center align-items-center my-3">
    <div class="w-100 d-flex justify-content-start ">
      <h2>Mot de passe perdu</h2>
    </div>

    <p></p>
    <div class="w-50">
      <form class="needs-validation" novalidate>
        <div class="form-group">
          <label for="exampleInputEmail1">Votre email</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Votre email" require autofocus>
          <div class="invalid-feedback">
            Veuillez saisir un email valide
          </div>
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>


  </div>

</section>
</main>

<?php
include "template/footer.php";
 ?>
