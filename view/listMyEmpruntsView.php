<?php include "view/template/header.php"; ?>

<main>
<section class="container">
	<div class="d-flex flex-column my-3">
      <div class="d-flex justify-content-between mb-3">
            <h2>Mes emprunts</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-hover">
                <thead class="thead-light">
                  <tr class="text-center d-flex">
                    <th class="col-6 text-left">Matériels</th>
                    <th class="col-2 d-none d-md-table-cell">N° de série</th>
                    <th class="col-2 d-none d-lg-table-cell">Date d'emprunt</th>
                    <th class="col-2 d-none d-lg-table-cell">Etat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    // On affiche chaque entrée une à une
                    foreach ($myEmprunts as $key => $value) {
                      $dateEmprunt = new DateTime($value["dateEmprunt"]);
                      if ($value["dateRetour"]) {
                       $dateRetour = new DateTime($value["dateRetour"]);
                       $dateRetour = "Rendu le ".$dateRetour->format('d/m/Y');
                     }else {
                       $dateRetour = "En cours d'emprunt";
                     }
                  ?>
                  <tr class="text-center d-flex">
                    <td class="col-6 text-left"><?php echo $value["materiel"]; ?></td>
                    <td class="col-2 d-none d-md-table-cell"><?php echo $value["num_serie"]; ?></td>
                    <td class="col-2 d-none d-lg-table-cell"><?php echo $dateEmprunt->format('d/m/Y'); ?></td>
                    <td class="col-2 d-none d-lg-table-cell"><?php echo $dateRetour; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
              </tbody>
            </table>
      </div>
  </div>
</section>
</main>
<?php include "view/template/footer.php"; ?>
