<?php
require "model/emprunterManager.php"

// fonction pour historique
function getHistorical () {
$historicals = getHistorical();
require "view/historicalView.php";
// echo (isset($_POST['choix']))?'?tri='.$_POST['choix']:'';
// require "view/form/historical/view.php";
}


?>
