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
  ?>
