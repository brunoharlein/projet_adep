<?php

    //fonction qui update l'état du matériel en fonction de son id quand l'utilisateur  clique sur emprunter page empruntsView.php
      function updateEtatMateriel ($id_materiel) {
        $db = getDataBase();
        $requete = $db ->prepare ('UPDATE materiel SET etat = :etat WHERE id = :id');
        $result = $requete->execute(array('id' => $id_materiel, 'etat' =>  0));
        $requete->closeCursor();
        return $result;
      }
      //fonction qui insère une ligne dans la table emprunt de la bdd quand un emprunteur clique sur emprunter
      function addEmprunt($id_materiel, $id_emprunteur) {
        $db = getDataBase();
        $now = (new DateTime('now'))->format('Y-m-d H:i:s');
        $requete = $db->prepare('INSERT INTO emprunt(idEmprunteur, idMateriel, dateEmprunt) VALUES( :idEmprunteur, :idMateriel, :dateEmprunt)');
        $result = $requete->execute(array('idEmprunteur' =>  $id_emprunteur, 'idMateriel' => $id_materiel, 'dateEmprunt' =>$now));
        $requete->closeCursor();
        return $result;
      }


function getMaterielsEmprunts($tri){
  $text = "";
  switch ($tri) {
    case 'nomAZ':
      $text .= " ORDER BY nom ASC";
      break;
      case 'nomZA':
      $text .= " ORDER BY nom DESC";
      break;
      case 'etat':
      $text .= " WHERE etat = 1";
      break;
  
  }
  $db = getDataBase();
  $requete = $db->query('SELECT * FROM materiel'. $text);
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor(); // Termine le traitement de la requête
  return $result;
}
     // trie de A à Z
     // function orderBy($sort,$type) {
     //   $db = getDataBase();
     //   $query = $db->query("SELECT * FROM materiel ORDER by $sort");
     //   $orderAZ = $query->fetchall(PDO::FETCH_ASSOC);
     //   return $orderAZ;
     // }
     //
     // // trie de Z à A
     // function orderByZa() {
     //   $db = getDataBase();
     //   $query = $db->query("SELECT * FROM materiel ORDER by nom $type");
     //   $orderZA = $query->fetchall(PDO::FETCH_ASSOC);
     //   return $orderZA;
     // }
     //
     // // trie selon l'etat de dispo
     // function orderByEtat() {
     //   $db = getDataBase();
     //   $query = $db->query("SELECT * FROM materiel ORDER by etat DESC");
     //   $orderEtat = $query->fetchall(PDO::FETCH_ASSOC);
     //   return $orderEtat;
     // }



  ?>
