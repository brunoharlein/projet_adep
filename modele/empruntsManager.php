<?php
  /*function nouvelEmprunt($db, $id_materiel, $id_emprunteur){
    $id_materiel = $_GET['materiel']['id'];
    $id_emprunteur = $_SESSION['id'];
    $requete = $db ->prepare('INSERT INTO emprunt(id, id_emprunteur, id_materiel, date_emprunt, date_retour) VALUES (id)')
}*/
    //fonction qui update l'état du matériel en fonction de son id quand l'utilisateur  clique sur emprunter page emprunts.php
      function updateEtatMateriel ($db, $id_materiel, $etat) {

        $requete = $db ->prepare ('UPDATE materiel SET etat = :etat WHERE id = :id');
        $result = $requete->execute(array('id' => $id_materiel, 'etat' => $etat));
        return $result;
      }
     ?>
