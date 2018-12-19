<?php
//on charge le header
require 'modele/db.php';
//on selectionne tous les emprunteur de la table emprunteur
$query = $db->query("SELECT * FROM emprunteur");
$emprunteur = $query->fetchall(PDO::FETCH_ASSOC);
//on charge la page errorManager
require "service/errorManager.php";
//on charge la page service
require "service/service.php";
//sécurisation du formulaire:
  //vérifier si le formulaire existe
  if(isset($_POST)){
    //vérifier si le formulaire n'est pas vide
      if(!empty($_POST)) {
    //sécuriser les entrées des formulaires
      foreach ($_POST as $key => $value) {
        $_POST = cleanFormEntries($_POST);
        $result = valueFormEntries($_POST);
        var_dump($_POST);
      }
    //verifier si un champ est vide
      foreach ($_POST as $key => $value) {
        if(empty($value)) {
          header("location: emprunteurAdminAdd.php?message=1");
          exit;
        }
      }
    //verifier si le mail a ete deja enregistrer
      foreach ($emprunteur as $key => $value) {
        if($_POST["email"] === $value["email"]) {
          header("location: emprunteurAdminAdd.php?message=5");
          exit;
        }
      }
    //vérifier si le mot de passe est valide
      if(!preg_match("#(?=.*[A-Z]{1,})(?=.*[0-9]{1,}).{6,}#", $_POST["password"])) {
        header("location: emprunteurAdminAdd.php?message=4");
        exit;
      }
      else {
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
        //inserer les donnees rentrees par le formulaire dans la base de donnees
        $query = $db->prepare('INSERT INTO emprunteur (email, nom, prenom, password, poste, statut) VALUES(:email, :nom, :prenom, :password, :poste, :statut)');
        $query->execute([
        "email" => $_POST["email"],
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "password" => $_POST["password"],
        "poste" => $_POST["poste"],
        "statut" => $_POST["statut"]
        ]);
        header("location: emprunteur.php?success=Emprunteur créé avec succès, vous pouvez vous connecter");
        exit;
      }    
    }
  }
  else{
    header("location: emprunteurAdminAdd.php?message=0");
    exit;
  }
 ?>