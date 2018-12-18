<?php

    //fonction qui update l'état du matériel en fonction de son id quand l'utilisateur  clique sur emprunter page emprunts.php
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

      function displayMessages() {
        $messages = getMessages();
        foreach ($messages as $key => $message) {
          if($key === 1) {
            echo "<div class='alert alert-success w-50 mx-auto'>" . $message . "</div>";
          }
          if ($key === 2) {
            echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
          }
        }
      }
      //fonction qui stocke les messages d'erreur ou de succès
      function codeMsgEmprunts() {
       return [
         ['message' =>1, "message" => " Vous avez emprunté ce matériel avec succès"],
         ["message" => 2, "message" => "Vous devez vous connecter pour emprunter"]
       ];
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
