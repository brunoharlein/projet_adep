<?php
//Fonction qui récupère un seul utilisateur en DB
function getUser($user, $db) {
  $query = $db->prepare("SELECT * FROM emprunteur WHERE id =  ?");
  $query->execute([$user["id"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction qui ajoute un utilisateur en DB
function addUser($user, $db) {
    $query = $db->prepare("INSERT INTO emprunteur (nom, prenom, password, poste, statut) VALUES(:nom, :prenom, :password, :poste, :statut)");
    $query->execute([
      "nom" => $user["nom"] ,
      "prenom" => $user["prenom"],
      "password" => $user["password"],
      "poste" => $user["poste"],
      "statut" => $statut["statut"]
    ]);
}
  
?>