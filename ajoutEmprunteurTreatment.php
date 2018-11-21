<?php
require 'modele/db.php';
// on verifie si le formulaire n'est pas vide
if(!empty($_POST)) {
  $errors ="";
  //on sécurise les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //on vérifier si  y'a une valeur vide
  $isEmpty = false;
  foreach ($_POST as $key => $value) {
    if(empty($value)) {
      $isEmpty = true;
    }
  }
  // si y'a une valeur vide qui est trouvée on affiche un message d'erreur
  if($isEmpty) {
    $errors .= "1";
  }

  //si le nom utilisateur contient moins de 3 lettres
  if(strlen($_POST["nom"]) < 3) {
    $errors .= "2";
  }
  //sinon on envoi l'utilisateur vers la page emprunteurManager avec un message de succès
  else {
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $ajout = $db->prepare('INSERT INTO emprunteur(Email, nom, prenom, password, poste, statut) VALUES(?, ?, ?, ?, ?, ?)');
    $ajout->execute(array($_POST["Email"], $_POST["nom"], $_POST["prenom"], $_POST["password"], $_POST["poste"], $_POST["statut"]));
    header("Location: emprunteurManager.php?success=Emprunteur créé avec succès");
    exit;
  }
}
//si le formulaire est vide on renvoi vers la page ajoutEmprunteur
else {
  header("Location: ajoutEmprunteur.php");
  exit;
}


 ?>
