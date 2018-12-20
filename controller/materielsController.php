<?php
require "model/materielsManager.php";
//require "service/formChecker.php";
require "service/errorMsg.php";

function allMateriels(){
  if (getMateriels())
    {$materiels = getMateriels();}
  else
    {$materiels = NULL;}

  require "view/listMaterielsView.php";
}

function add(){
  $action = "add"; //pour choix du formulaire
  $title = "Ajout";
  $buttonTitle = "Ajouter";
  $buttonClass = "btn btn-primary";
  if (isset($_POST) && !empty($_POST)) {
    if (addMateriel($_POST))//ADD
        {
          array_push($_SESSION["codeMsg"], "3"); //ajoute le code msg à la session code
          redirectTo("materiels");
        }
    else
        {
          array_push($_SESSION["codeMsg"], "4");
          redirectTo("materiels");
        }
  }
  require "view/materielsView.php";
}

function edit(){
  $action = "edit";
  $title = "Modification";
  $buttonTitle = "Enregistrer";
  $buttonClass = "btn btn-primary";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
    $materiel = getMateriel($id);
  }

  if (isset($_POST) && !empty($_POST)) {
      if(updateMateriel($_POST))//UPDATE
        {
          array_push($_SESSION["codeMsg"], "1");
          redirectTo("materiels");
        }
      else
        {
          array_push($_SESSION["codeMsg"], "2");
          redirectTo("materiels");
        }
  }
  require "view/materielsView.php";
}

function delete(){
  $action = "delete";
  $title = "Suppression";
  if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = intval($_GET["id"]);
  }
  $materiel = getMateriel($id);
  $buttonTitle = "Supprimer";
  $buttonClass = "btn btn-warning";
  if (isset($_POST) && !empty($_POST)) {
    if (deleteMateriel($_POST["id"]))//DELETE
        {
          array_push($_SESSION["codeMsg"], "5");
          redirectTo("materiels");
        }
    else
        {
          array_push($_SESSION["codeMsg"], "6");
          redirectTo("materiels");
        }
  }
  require "view/materielsView.php";
}

 ?>
