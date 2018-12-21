<?php
require "model/emprunterManager.php";
function getHistorical() {
  if(isset($_POST) && !empty($_POST)) {
    //alors fonction avec requete de tri
    if(getTriHistorical($_POST['choix'])){
      $historicals =  getTriHistorical($_POST['choix']);
    }
    else {
      $historicals = NULL;
    }
  }
  else {
    if(getTriHistorical('nomAZ')){
      $historicals =  getTriHistorical('nomAZ');
    }
    else {
      $historicals = NULL;
    }
  }
  require "view/historicalView.php";
}
?>
