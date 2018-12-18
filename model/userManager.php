<?php
//Fonction which retrieve a single user in DB
function getUser($userEmail) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM emprunteur WHERE email =  ?");
  $query->execute([$userEmail["email"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Fonction which add a user in DB
function addUser($user) {
  $db = getDataBase();
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
