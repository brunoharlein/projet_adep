<?php
include "template/header.php";
require_once "modele/db.php";
$query = $db->query("SELECT * FROM emprunteur");
$emprunteur = $query->fetchall(PDO::FETCH_ASSOC);

?>
<div class="d-flex justify-content-between flex-wrap w-75 mt-5 mb-3">
    <h2 class="col-12 col-md-6 col-lg-8">Gestion des emprunteurs</h2>
    <a href="emprunteurAdminAdd.php"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i>Ajouter</button></a>
</div>
<table class="table w-75 table-hover">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Email</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Password</th>
      <th scope="col">Poste</th>
      <th scope="col">Status</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($emprunteur as $key => $value) {
      ?>
    <tr>
      <th scope="row"><?php echo $value["id"] ?></th>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["email"] ?></td>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["nom"] ?></td>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["prenom"] ?></td>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["password"] ?></td>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["poste"] ?></td>
      <td class="d-none d-md-table-cell text-center"><?php echo $value["statut"] ?></td>
      <td class="d-none d-md-table-cell text-center"><a href="emprunteurAdminEdit.php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
      <td class="d-none d-md-table-cell text-center"><a href=".php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
include "template/footer.php";
?>
