<?php
session_start();
  require "../modele/db.php";// pour connecter a la db
  require "../modele/empruntsManager.php"; //pour les fonctions qui servent à l'emprunt
  //var_dump(implode(',',getdate()));
if ((isset($_SESSION['emprunteur'])) && (!empty($_SESSION['emprunteur']))){
    $id_emprunteur = intval($_SESSION['emprunteur']['id']);
    if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
        $id_materiel = intval($_GET['id']);
        updateEtatMateriel($db, $id_materiel);
        addEmprunt($db,$id_materiel, $id_emprunteur);
      //var_dump($id_emprunteur, $id_materiel);
      //var_dump(addEmprunt($db,$id_materiel, $id_emprunteur));
        header('Location:../emprunts.php?msg=1');
        }
}
else {header('Location:index.php?msg=2');
  exit;
}

?>
