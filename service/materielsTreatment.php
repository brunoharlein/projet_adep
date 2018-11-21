<?php
  require "../modele/db.php"; // connexion à la bdd
  require "../modele/materielsManager.php";
  require "service.php";
var_dump($_POST);

$code ="";
if (!empty($_POST)) {
  if(valueFormEntries($_POST) === false){ //Vérifie si tous le formulaire est rempli
    $code .= "1"; // saisir tous les champs du form produit
  }
  else { //si tout est remplis
    $_POST = cleanFormEntries($_POST);

    switch ($_POST["action"]) {
      case 'edit':
        // Modification du matériel
        if (updateMateriel($db,$_POST)) {
          $code .= "2"; // Update OK
        }
        else {
          $code .= "3"; // Update KO
        }
        header("Location: ../materielsAdmin.php?action=edit&id=". $_POST["id"]."&msg=".$code);
        exit;
        break;

      case 'add':
        // Ajout d'un matériel
        if (addMateriel($db,$_POST)) {
          $code .= "4"; // Add OK
        }
        else {
          $code .= "5"; // Add KO
        }
        header("Location: ../materielsAdmin.php?action=add&msg=".$code);
        exit;
        break;
    }
  }
  if ($_POST["action"] == "add") {
    header("Location: ../materielsAdmin.php?action=add&msg=".$code); //code 1
    exit;
  }else {
    header("Location: ../materielsAdmin.php?action=edit&id=". $_POST["id"]."&msg=".$code); //code 1
    exit;
  }

}
else {
  $code .= "0"; // KO => POST = tableau vide
  header("Location: ../materielsAdmin.php");
  exit; // important : stop l'execution du script
}



 ?>
