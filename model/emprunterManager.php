<?php

  function getTriHistorical($tri){
    $text = "";
    switch ($tri) {
      case 'nomAZ':
        $text .= " ORDER BY nom_emprunteur ASC";
        break;
        case 'materiel':
        $text .= " ORDER BY nom_materiel ASC";
        break;
    }
      $db = getDataBase();
      $query = $db->query("SELECT e.dateEmprunt, e.dateRetour, e.idMateriel, epr.nom AS nom_emprunteur, epr.prenom, m.nom AS nom_materiel
        FROM emprunt AS e
        INNER JOIN emprunteur AS epr ON e.idEmprunteur = epr.id
        INNER JOIN materiel AS m ON e.idMateriel = m.id". $text);
      $historicals = $query->fetchall(PDO::FETCH_ASSOC);
      $query->closeCursor(); // Termine le traitement de la requête
      return $historicals;
    }


 ?>
