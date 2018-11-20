<?php
require "modele/db.php"; // connexion à la bdd
include "template/header.php";
 ?>
<main>
<section class="container">
  <div class="row my-4">
<?php
if (isset($_GET["action"])) {
  $action = htmlspecialchars($_GET["action"]);
  if ($action == "edit") {
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
      $titre = "Editer un matériel";
      $id = intval(htmlspecialchars($_GET["id"])); // ID récupéré via l'url
      // On récupère tout le contenu de l'ID matériel
      $requete = $db->prepare('SELECT * FROM materiel where id= ?');
      $requete->execute(array($id));
      // On affiche le resultat
      while ($result = $requete->fetch())
      { $nom = $result["nom"];
        $description = $result["description"];
        $etat = $result["etat"];
        $acces = $result["acces"];
        $num_serie = $result["num_serie"];
      } //fin du while
      $requete->closeCursor(); // Termine le traitement de la requête
    }
  }
  elseif ($action == "add") {
    $titre = "Ajouter un matériel";
  }
?>
<div class="container">
  <div class="d-flex justify-content-between">
    <h2><?php echo $titre; ?> </h2>
    <div class="">
      <a href="materiels.php" class="btn btn-primary">Retour à la liste</a>
    </div>
  </div>
  <form class="needs-validation text-right" action="materielsTreatment.php" method="post" novalidate >

      <div class="form-group text-left">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="name">Nom du matériel</label>
          </div>
          <input type="input" class="form-control" value="<?php echo (isset($nom))?$nom:""; ?>" name="nom" placeholder="Nom du matériel" >
          <?php if ($action == "edit") { ?>
            <input type='hidden' value="<?php echo (isset($id))?$id:""; ?>" name='id'>
          <?php } ?>
          <!-- <div class="invalid-feedback">Veuillez saisir un nom produit.</div> -->
        </div>
      </div>

    <div class="form-group text-left">
      <label for="description">Description</label>
      <textarea name="description" class="form-control" rows="5"><?php echo (isset($description))?$description:""; ?></textarea>
      <!-- <div class="invalid-feedback">Veuillez saisir une description.</div> -->
    </div>
    <div class="form-group text-left">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="categorie">N° de série</label>
        </div>
        <input type="input" class="form-control" value="<?php echo (isset($num_serie))?$num_serie:""; ?>" name="num_serie"  placeholder="N° de série" >
        <!-- <div class="invalid-feedback">Veuillez saisir un N° de série.</div> -->
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="etat">Etat</label>
          </div>
          <?php $tabEtat = array('1' => 'Disponible','0'=>'Indisponible' ); ?>
          <select class="custom-select" name="etat">
          <?php foreach ($tabEtat as $key => $value) { ?>
            <option value="<?php echo $key;?>"
              <?php
              if ($action == "edit") {
                echo ($key == $etat) ? 'selected="selected"' : '';
              }
            ?>><?php echo $value;?></option>
          <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="acces">Accessibilité</label>
          </div>
          <?php $tabAcces = array('1' => 'Libre','0'=>'Restreint' ); ?>
          <select class="custom-select" name="acces">
          <?php foreach ($tabAcces as $key => $value) { ?>
            <option value="<?php echo $key;?>"
              <?php
              if ($action == "edit") {
                echo ($key == $acces) ? 'selected="selected"' : '';
              }
            ?>><?php echo $value;?></option>
          <?php } ?>
          </select>
        </div>
      </div>
    </div>

    <?php if ($action == "edit") { ?>
        <button type="submit" class="btn btn-success w-25" name="update" value="1">Enregistrer</button>
    <?php }else { ?>
        <button type="submit" class="btn btn-success w-25" name="add"  value="1">Ajouter</button>
    <?php } ?>



    <!-- Affichage du ou des message(s) d'erreur -->
    <?php
      if (isset($messageAffiche)) {
        echo $messageAffiche;
      }
    ?>
  </form>
</div>


<?php
  }
  else {
    header("Location: index.php");
    exit;
  }
?>

</div>
</section>
</main>
<?php
include "template/footer.php";
 ?>
