<?php
require 'modele/db.php';

  // $reponse = $bdd->prepare('SELECT Name FROM users WHERE Name = ?');
  // $reponse->execute(array($_POST["user_name"]));
  // $Name = $reponse->fetch();
//Si le formulaire n'est pas vide on le vérifie
if(!empty($_POST)) {
  $errors ="";
  //On sécurise les entrées du formulaire
  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  //On boucle pour vérifier si une valeur est vide
  $isEmpty = false;
  foreach ($_POST as $key => $value) {
    if(empty($value)) {
      $isEmpty = true;
    }
  }
  //Si on a trouvé une valeur vide on ajoute un code erreur
  if($isEmpty) {
    $errors .= "1";
  }

  //Si le nom utilisateur contient moins de 3 lettres
  if(strlen($_POST["user_name"]) < 3) {
    $errors .= "2";
  }
  //Si on a stocké des codes erreur on renvoi au formulaire
  if(!empty($errors)){
    session_start();
    $_SESSION["answers"] = $_POST;
    header("Location: register.php?message=$errors");
    exit;
  }
  //Sinon on envoi sur la page de login avec un message de succès
  else {
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $enr = $bdd->prepare('INSERT INTO EmpruntsAdep(Email, nom, prenom, password, poste, status) VALUES(?, ?, ?, ?, ?, ?)');
    $enr->execute(array($_POST["nom"], $_POST["prenom"], $_POST["password"], $_POST["poste"], $_POST["status"]));
    header("Location: ajoutEmprunteur.php?success=Compte créé avec succès");
    exit;
  }}
//Si le formulaire est vide on renvoi vers la page register
else {
  header("Location: ajoutEmprunteur.php?message=0");
  exit;
}


 ?>
