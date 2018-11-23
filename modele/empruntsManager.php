<?php

    //fonction qui update l'état du matériel en fonction de son id quand l'utilisateur  clique sur emprunter page emprunts.php
      function updateEtatMateriel ($db, $id_materiel) {

        $requete = $db ->prepare ('UPDATE materiel SET etat = :etat WHERE id = :id');
        $result = $requete->execute(array('id' => $id_materiel, 'etat' =>  0));
        return $result;
      }

    //   function nouvelEmprunt($db, )

    //fonction qui stocke les messages d'erreur ou de succès
     function getMsgEmprunts() {
       return [
         ["id" =>1, "msg" => " Vous avez emprunté ce matériel avec succès"],
         ["id" => 2, "msg" => "Une erreur est survenue, vous n'avez pas emprunté ce matériel. Merci de recommencer"]
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
