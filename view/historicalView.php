<?php
include "view/template/header.php";
 ?>
<main class="container">
 <div class="row mt-5">
    <section class="col-md-6 mx-auto mt-4">
      <h2 class="historicalH2">Gestion des emprunts</h2>
      <?php require "form/historicalForm.php"; ?>

      <div class="container-fluide">
        <div class="row">
          <table class="table table-hover fontTable">
            <thead class="lightBg">
              <tr>
                <th scope="col">Nom emprunteur</th>
                <th scope="col">Nom materiel</th>
                <th scope="col">Emprunté le</th>
                <th scope="col">Rendu le</th>
              </tr>
            </thead>
            <tbody>
              <?php
               foreach ($historicals as $key => $postHistorical) {
              ?>
              <tr>
                <td><?php echo $postHistorical["nom_emprunteur"] . " " . $postHistorical["prenom"]; ?></td>
                <td><?php echo $postHistorical["nom_materiel"]; ?></td>
                <td><?php echo $postHistorical["dateEmprunt"]; ?></td>
                <td><?php echo $postHistorical["dateRetour"]; ?></td>
              </tr>
              <?php
               }
               ?>
             </tbody>
           </table>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php
  include "view/template/footer.php";
   ?>
