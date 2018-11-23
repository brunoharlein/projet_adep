<?php
require "modele/db.php"; // connexion à la bdd
require "modele/materielsManager.php";
require "service/errorsTreatment.php"; //Gestion des msg erreurs
include "template/header.php";

//Affichage du ou des msg d'erreurs
$message ="";
if (isset($_GET["msg"])) {
  $tabCode = str_split($_GET["msg"]); //tableau des codes
  $tabMsg = getErrorsMsgMateriels(); //tableau des messages
  foreach ($tabMsg as $key => $value) {
    foreach ($tabCode as $key2 => $code) {
      if ($value["id"] == $code) {
        if ($code == 2 || $code == 4|| $code == 6) {
          $message .= "<div class='alert alert-success mt-2 text-center' role='alert'>"
                              .$value['msg'] .
                      "</div>";
        }
        else {
          $message .= "<div class='alert alert-warning mt-2 text-center' role='alert'>"
                              .$value['msg'] .
                      "</div>";
        }
      }
    }
  }
}
 ?>
<main>
<section class="container">
  <div class="row my-3">
<?php
if (isset($_GET["action"])) {
  $action = htmlspecialchars($_GET["action"]);
  if ($action == "edit") {
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
      $titre = "Editer un matériel";
      $id = intval(htmlspecialchars($_GET["id"])); // ID récupéré via l'url
      // On récupère tout le contenu de l'ID matériel
      $result = getMateriel($db,$id);
      //initialisation des données value du form
        $nom = $result["nom"];
        $description = $result["description"];
        $etat = $result["etat"];
        $acces = $result["acces"];
        $num_serie = $result["num_serie"];
    }
  }
  elseif ($action == "add") {
    $titre = "Ajouter un matériel";
  }
  elseif ($action == "delete") {
    if (isset($_GET["id"]) && !empty($_GET["id"])) {
      $titre = "Supprimer un matériel";
      $id = intval(htmlspecialchars($_GET["id"])); // ID récupéré via l'url
      $result = getMateriel($db,$id);
      //var_dump($result);
    }
  }

?>
<div class="container">
  <div class="d-flex justify-content-between mb-3">
    <h2><?php echo (isset($titre))?$titre:""; ?> </h2>
    <div class="">
      <a href="materiels.php" class="btn btn-primary">
        <span class="d-none d-md-block">Retour à la liste</span>
        <span class="d-block d-md-none"><i class="fas fa-arrow-left"></i></span>
      </a>
    </div>
  </div>
  <form class="needs-validation text-right" action="service/materielsTreatment.php" method="post" novalidate >
  <?php if ($action != "add") { ?>
    <input type='hidden' value="<?php echo (isset($id))?$id:""; ?>" name='id'>
  <?php } ?>
  <?php if ($action != "delete") { ?>

    <div class="form-group text-left">
        <div class="input-group ">
          <div class="input-group-prepend">
            <label class="input-group-text" for="name">Nom</label>
          </div>
          <input type="input" class="form-control" value="<?php echo (isset($nom))?$nom:""; ?>" name="nom" placeholder="Nom du matériel" >

          <!-- <div class="invalid-feedback">Veuillez saisir un nom produit.</div> -->
        </div>
      </div>
    <div class="form-group text-left">
      <label for="description">Description</label>
      <textarea name="description" class="form-control" rows="5"><?php echo (isset($description))?$description:""; ?></textarea>
      <!-- <div class="invalid-feedback">Veuillez saisir une description.</div> -->
    </div>
    <div class="form-group text-left">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="categorie">N° de série</label>
        </div>
        <input type="input" class="form-control" value="<?php echo (isset($num_serie))?$num_serie:""; ?>" name="num_serie"  placeholder="N° de série" >
        <!-- <div class="invalid-feedback">Veuillez saisir un N° de série.</div> -->
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <div class="input-group">
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
        <div class="input-group">
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
        <button id="addMateriel" type="submit" class="btn btn-success" name="action" value="edit">Enregistrer</button>
    <?php }elseif ($action == "add") { ?>
        <button id="editMateriel" type="submit" class="btn btn-success" name="action" value="add">Ajouter</button>
    <?php } ?>

<?php } else {  ?>
  <?php if (!isset($_GET["msg"])) { ?>
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h4>Voulez-vous supprimer ce matériel ?</h4>
      <p><?php echo ($result["nom"])?$result["nom"]:""; ?> </p>

      <button type="submit" class="btn btn-success w-25" name="action" value="delete">Supprimer</button>
    </div>
<?php } ?>
<?php } ?>
</form>
  <!-- Affichage du ou des message(s) d'erreur -->
  <?php
    if (isset($message)) {
      echo $message;
    }
  ?>
</div>


<?php
  }
  else {
    header("Location: materiels.php");
    exit;
  }
?>

</div>
</section>
</main>
<?php
include "template/footer.php";
 ?>
