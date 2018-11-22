<?php
function getErrorsMsgMateriels() {
  return [
    ["id" => 1, "msg" => "Tous les champs du formulaire sont obligatoires."],
    ["id" => 2, "msg" => "Le matériel est modifié."],
    ["id" => 3, "msg" => "Une erreur est survenue, les modifications ne sont pas enregistrées."],
    ["id" => 4, "msg" => "Le matériel est ajouté."],
    ["id" => 5, "msg" => "Une erreur est survenue, le matériel n'est pas enregistré."],
    ["id" => 6, "msg" => "Le matériel est supprimé."],
    ["id" => 7, "msg" => "Une erreur est survenue, le matériel n'est pas supprimé."],
    ["id" => 0, "msg" => "Une erreur est survenue."]
  ];
}
function getMsgEmprunts() {
  return [
    ["id" =>1, "msg" => " Vous avez emprunté ce matériel avec succès"],
    ["id" => 2, "msg" => "Une erreur est survenue, vous n'avez pas emprunté ce matériel. Merci de recommencer"]
  ];
}
 ?>
