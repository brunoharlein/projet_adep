<?php
include "template/header.php";
require "modele/db.php";
var_dump($db);

?>
<main>
  <div class="container">
    <section class="d-flex flex-row justify-content-between">
      <h1 class="col-4 mt-0">Emprunter du matériel</h1>
      <select class=" btn-primary browser-default custom-select col-4 mt- ">
          <option selected>Trier par:</option>
        <option value="disponibilité">Disponibilité</option>
        <option value="Asc.">Asc.</option>
        <option value="Desc.">Desc.</option>
      </select>
    </section>
    </div>
    <div class="container">
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col-2" >Matériel</th>
            <th scope="col-2" class="d-none d-md-table-cell">Description</th>
            <th scope="col-2" class="d-none d-md-table-cell">Etat</th>
            <th scope="col-2" class="d-none d-md-table-cell">Accessibilité</th>
            <th scope="col-2" >Emprunter</th>
          </tr>
        </thead>
      <?php
foreach ($materiel as $key => $value) {
         ?>
        <tbody>
          <tr>
            <td scope="row"><?php echo $value['nom'] ?></td>
            <td class="d-none d-md-table-cell"><?php echo $value['description'] ?> </td>
            <td class="d-none d-md-table-cell">e<?php echo $value['etat'] ?></td>
            <td class="d-none d-md-table-cell"><?php echo $value['num_serie'] ?></td>
            <td class="btn btn-primary btn-xs">Emprunter</td>
          </tr>
        <?php
       } ?>
        </tbody>
      </table>
    </div>
</main>
<?php
include "template/footer.php";
