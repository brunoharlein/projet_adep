<?php
//Fonction which retrieve a single user in DB
function getUser($userEmail, $db) {
  $query = $db->prepare("SELECT * FROM emprunteur WHERE Email =  ?");
  $query->execute([$userEmail]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction which add a user in DB
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