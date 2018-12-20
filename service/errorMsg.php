<?php

function errorsMsg($subject){
  return [
    ["id" => 1, "msg" => "".$subject." est modifié."],
    ["id" => 2, "msg" => "Une erreur est survenue. ".$subject." n'est pas modifié."],
    ["id" => 3, "msg" => "".$subject." est ajouté."],
    ["id" => 4, "msg" => "Une erreur est survenue. ".$subject." n'est pas ajouté."],
    ["id" => 5, "msg" => "".$subject." est supprimé."],
    ["id" => 6, "msg" => "Une erreur est survenue. ".$subject." n'est pas supprimé."],
    ["id" => 0, "msg" => "Une erreur est survenue."]
  ];
}


function getErrorEmprunteur($code) {
  $references = [
    "0" => "Il faut remplir le formulaire",
    "1" => "Certains champs sont vides",
    "2" => "Le nom utilisateur est trop court",
    "3" => "Le mot de passe ne correspond pas à sa confirmation",
    "4" => "Le mot de passe ne respecte pas les conditions indiquées",
    "5" => "Un utilisateur utilise déjà cet email merci d'en choisir un autre",
  ];
  return $references;
}

 ?>
