<?php
require "modele/db.php";
require "modele/historicalManagement.php";
include "template/header.php";
$historicals = getHistorical($db);
 ?>
<main class="container">
 <div class="row mt-5">
    <section class="col-md-6 mx-auto mt-4">
      <h2 class="historicalH2">Gestion des emprunts</h2>
      <form action="historical.php<?php echo (isset($_POST['choix']))?'?tri='.$_POST['choix']:''; ?>" method="post" name="tri">
      <div class="form-row align-items-center">
      <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select name="choix" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
      <option selected>Options</option>
      <option value="1">noms de familles de A à Z</option>
      <option value="2">noms de familles Z à A</option>
      <option value="3">noms des appareils</option>
      <option value="4">date emprunt</option>
    </select>
  </div>
  <div class="col-auto my-1">
  </div>
  <div class="col-auto my-1">
    <button type="submit" class="btn btn-primary">OK</button>
  </div>
</div>
</form>
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
                <td><?php echo $postHistorical["nom"] . " " . $postHistorical["prenom"]; ?></td>
                <td><?php echo $postHistorical["nom_materiel"]; ?></td>
                <td><?php echo $postHistorical["date_emprunt"]; ?></td>
                <td><?php echo $postHistorical["date_retour"]; ?></td>
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
  include "template/footer.php";
   ?>
