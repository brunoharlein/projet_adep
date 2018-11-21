<?php
include "template/header.php";
require_once "modele/db.php";
$query = $db->query("SELECT * FROM emprunteur");
$emprunteur = $query->fetchall(PDO::FETCH_ASSOC);

?>
<div class="d-flex justify-content-between w-auto mt-5">
    <h2 class="col-8 col-md-6 col-lg-4">Gestion des emprunteurs</h2>
    <a href="ajoutEmprunteurTreatment.php"><button type="button" class="btn btn-success col-3 col-md-3 col-lg-2"><i class="fas fa-plus"></i> Ajouter</button></a>
</div>
<table class="table w-75 table-hover">
  <thead>
    <tr>
      <th scope="col">Utilisateurs N°</th>
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
      <td><?php echo $value["Email"] ?></td>
      <td><?php echo $value["nom"] ?></td>
      <td><?php echo $value["prenom"] ?></td>
      <td><?php echo $value["password"] ?></td>
      <td><?php echo $value["poste"] ?></td>
      <td><?php echo $value["statut"] ?></td>
      <td><a href=".php?action=edit&id=<?php echo $value["id"]; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
      <td><a href=".php?action=delete&id=<?php echo $value["id"]; ?>"><i class="fas fa-times fa-2x"></i></a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
include "template/footer.php";
?>
