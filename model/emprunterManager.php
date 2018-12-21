<?php
  function getHistorical2() {
    $db = getDataBase();
    $query = $db->query("SELECT e.dateEmprunt, e.dateRetour, e.id_materiel, epr.nom, epr.prenom, m.nom AS nom_materiel
                          FROM emprunt AS e 
                          INNER JOIN emprunteur AS epr ON e.id_emprunteur = epr.id
                          INNER JOIN materiel AS m ON e.id_materiel = m.id");
    $result = $query->fetchall(PDO::FETCH_ASSOC);
    return $result;
  }
 ?>
