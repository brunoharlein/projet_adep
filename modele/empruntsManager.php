<?php

    //fonction qui update l'état du matériel en fonction de son id quand l'utilisateur  clique sur emprunter page empruntsView.php
      function updateEtatMateriel ($db, $id_materiel) {

        $requete = $db ->prepare ('UPDATE materiel SET etat = :etat WHERE id = :id');
        $result = $requete->execute(array('id' => $id_materiel, 'etat' =>  0));
        return $result;
      }
      //fonction qui insère une ligne dans la table emprunt de labdd quand un emprunteur clique sur emprunter
      function addEmprunt($db,$id_materiel, $id_emprunteur) {
        $today = date("y.m.d");
        $requete = $db->prepare('INSERT INTO emprunt(idEmprunteur, idMateriel, dateEmprunt) VALUES( :idEmprunteur, :idMateriel, :dateEmprunt)');
        $result = $requete->execute(array('idEmprunteur' =>  $id_emprunteur, 'idMateriel' => $id_materiel, 'dateEmprunt' =>$today));
        $requete->closeCursor();
        return $result;
      }

    
     // trie de A à Z
     function orderByAz($db) {
       $query = $db->query("SELECT * FROM materiel ORDER by nom");
       $orderAZ = $query->fetchall(PDO::FETCH_ASSOC);
       return $orderAZ;
     }

     // trie de Z à A
     function orderByZa($db) {
       $query = $db->query("SELECT * FROM materiel ORDER by nom DESC");
       $orderZA = $query->fetchall(PDO::FETCH_ASSOC);
       return $orderZA;
     }

     // trie selon l'etat de dispo
     function orderByEtat($db) {
       $query = $db->query("SELECT * FROM materiel ORDER by etat DESC");
       $orderEtat = $query->fetchall(PDO::FETCH_ASSOC);
       return $orderEtat;
     }

     function allMateriel($db) {
       $requete = $db->query('SELECT * FROM materiel');
       $result = $requete->fetchAll(PDO::FETCH_ASSOC);
       return $result;
     }






  ?>
