<?php
require "modele/db.php"; // connexion à la bdd
require "modele/materielsManager.php";
include "template/header.php";
 ?>
<main>
<section class="container">
	<div class="row my-4">
      <div class="w-100 d-flex justify-content-between mb-3">
            <h2>Gestion des matériels</h2>
            <div class="">
               <a href="materielsAdmin.php?action=add" class="btn btn-primary">Ajouter un matériel</a>
            </div>
          </div>

      <table class="table table-hover">
              <thead>
                <tr class="text-center">
                  <th class="text-left w-25">Nom</th>
                  <th class="d-none d-md-table-cell">N° de série</th>
                  <th class="d-none d-md-table-cell">Description</th>
                  <th class="d-none d-lg-table-cell">Etat</th>
                  <th class="d-none d-lg-table-cell">Accessibilité</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  // On récupère tout le contenu de la table materiel
                  $result = getMateriels($db);
                  // On affiche chaque entrée une à une
                  foreach ($result as $key => $value) {

                ?>
                <tr class="text-center">
                  <td class="text-left"><?php echo $value["nom"]; ?></td>
                  <td class="d-none d-md-table-cell"><?php echo $value["num_serie"]; ?></td>
                  <td class="d-none d-md-table-cell"><?php echo $value["description"]; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo ($value["etat"] == 1)?"En stock":"Indisponible"; ?></td>
                  <td class="d-none d-lg-table-cell"><?php echo ($value["acces"] == 1)?"Libre":"Restreint"; ?></td>
                  <td><a href="materielsAdmin.php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
                  <td><a href="materielsAdmin.php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
                </tr>
                <?php
                  }

                ?>
            </tbody>

          </table>
  </div>
</section>
</main>
<?php
include "template/footer.php";
 ?>
