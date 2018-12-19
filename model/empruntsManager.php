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

//à mettre en une seule fonction?
     // trie de A à Z
     // function orderBy($tri,$type) {
     //   $db = getDataBase();
     //   $query = $db->query("SELECT * FROM materiel ORDER by $tri");
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
