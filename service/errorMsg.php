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

function connexionMsg(){
  return [
    ["id" => 1, "msg" => "Veuillez saisir vos identifiants et mot de passe."],
    ["id" => 2, "msg" => "La connexion a echoué, veuillez saisir des identifiants valident."],
    ["id" => 0, "msg" => "Une erreur est survenue."]
  ];
}

 ?>
