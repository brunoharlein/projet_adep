<?php
//Fonction which retrieve a single user in DB
function getUser($userEmail) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM emprunteur WHERE email =  ? and password = ?");
  $query->execute([$userEmail["email"],$userEmail["password"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}


?>
