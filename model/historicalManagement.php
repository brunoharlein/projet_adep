<?php
  function getHistorical($db) {
    $query = $db->query("SELECT e.date_emprunt, e.date_retour, e.id_materiel, epr.nom, epr.prenom, m.nom AS nom_materiel FROM emprunt AS e INNER JOIN emprunteur AS epr ON e.id_emprunteur = epr.id INNER JOIN materiel AS m ON e.id_materiel = m.id");
    $historicals = $query->fetchall(PDO::FETCH_ASSOC);
    return $historicals;
  }
 ?>
