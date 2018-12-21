<?php

  require "model/empruntsManager.php";
  require "model/materielsManager.php"; //pour les fonctions qui servent à l'emprunt
  //var_dump(implode(',',getdate()));
  require "service/errorMsg.php";

function emprunter() {
  $id_emprunteur = intval($_SESSION['user']['id']);
  if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
      $id_materiel = intval($_GET['id']);
      if(addEmprunt($id_materiel, $id_emprunteur)) {
        if(updateEtatMateriel( $id_materiel)) {
          array_push($_SESSION["codeMsg"], "3"); //ajoute le code msg à la session code
          redirectTo("emprunter/list");
        }
        else {
          array_push($_SESSION["codeMsg"], "4");
          redirectTo("emprunter/list");
        }
      }
      else {
        array_push($_SESSION["codeMsg"], "4");
        redirectTo("emprunter/list");
      }
  }
  //require "view/empruntsView.php";
}

function allMateriels() {
  if(isset($_POST) && !empty($_POST)) {
    //alors fonction avec requete de tri
    if(getMaterielsEmprunts($_POST['triMaterielsEmprunts'])){
      $materiels =  getMaterielsEmprunts($_POST['triMaterielsEmprunts']);
    }
    else {
      $materiels = NULL;
    }
  }
  else {
    if(getMaterielsEmprunts('nomAZ')){
      $materiels =  getMaterielsEmprunts('nomAZ');
    }
    else {
      $materiels = NULL;
    }
  }
  require "view/empruntsView.php";
}

function myEmprunts(){
  if (isset($_POST) && !empty($_POST)) {
    if(getMyEmpruntsTri($_SESSION['user']['id'],$_POST['tri'])){
      $myEmprunts = getMyEmpruntsTri($_SESSION['user']['id'],$_POST['tri']);
    }else {
      $myEmprunts = NULL;
    }

  }
  else {
    if(getMyEmpruntsTri($_SESSION['user']['id'],2)){
      $myEmprunts = getMyEmpruntsTri($_SESSION['user']['id'],2);
    }else {
      $myEmprunts = NULL;
    }
  }

  require "view/listMyEmpruntsView.php";
}

?>
