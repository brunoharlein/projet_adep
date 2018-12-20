<?php


  function getHistorical2() {
    $db = getDataBase();
    $query = $db->query("SELECT e.dateEmprunt, e.dateRetour, e.idMateriel, epr.nom, epr.prenom, m.nom AS nom_materiel
                          FROM emprunt AS e
                          INNER JOIN emprunteur AS epr ON e.idEmprunteur = epr.id
                          INNER JOIN materiel AS m ON e.idMateriel = m.id");
    $historicals = $query->fetchall(PDO::FETCH_ASSOC);
    return $historicals;
  }
 ?>
