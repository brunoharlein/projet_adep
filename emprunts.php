<?php
include "template/header.php";
require "modele/db.php";
//var_dump($db);

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
            <th scope="col-2" class="d-none d-md-table-cell text-center">Description</th>
            <th scope="col-2" class="d-none d-md-table-cell text-center">Etat</th>
            <th scope="col-2" class="d-none d-md-table-cell text-center">Accessibilité</th>
            <th scope="col-2" >Emprunter</th>
          </tr>
        </thead>
        <?php
        //récupère toutes les entrées de la table materiel
          $requete = $db->query('SELECT * FROM materiel');
          $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        //affiche les données sur chaque entrée dans le tableau
          foreach ($result as $key => $value) {
         ?>
        <tbody>
          <tr>
            <td scope="row"><?php echo $value['nom'] ?></td>
            <td class="d-none d-md-table-cell text-center"><?php echo $value['description'] ?> </td>
            <td class="d-none d-md-table-cell text-center"><?php echo ($value['etat']== 1)?"En stock":"Indisponible"; ?></td>
            <td class="d-none d-md-table-cell text-center"><?php echo ($value['acces']==1)?"Libre":"Restreint"; ?></td>
            <td>
              <div>
                <a class="btn btn-primary btn-xs text-center  " href="service/empruntsTraitement.php?id=">Emprunter</a>
              </div>

            </td>
          </tr>
        <?php
          }
          ?>
        </tbody>
      </table>
    </div>
</main>
<?php
include "template/footer.php";
