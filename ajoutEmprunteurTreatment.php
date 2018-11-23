<?php
//on charge le header
require 'modele/db.php';
// //chargement de la page ajoutEmprunteur.php
// require 'emprunteur.php';
// recupérer tout les emprunteur de la base de donnée
// $query = $db->query("SELECT * FROM emprunteur");
// $emprunteur = $query->fetchall(PDO::FETCH_ASSOC);
// //on charge la page des erreurs
// require 'service/errorManager.php';
// $references = getReferences();
// $messages = getMessages();
// // on verifie si le formulaire n'est pas vide
// if(isset($_POST) && !empty($_POST)) {
//   $references ="";
//   //on sécurise les entrées du formulaire
  // foreach ($_POST as $key => $value) {
  //   $_POST[$key] = htmlspecialchars($value);
  // }
  // //on vérifie si  y'a une valeur vide
  // $isEmpty = false;
  // foreach ($_POST as $key => $value) {
  //   if(empty($value)) {
  //     $isEmpty = true;
  //   }
  // // si y'a une valeur vide qui est trouvée on affiche un message d'erreur
  //   if($isEmpty) {
  //   $references .= "0";
  //   echo $references;
  //   }
  // }
  // //si l'email est déjas utilisé on envoi un message d'erreur
  // foreach ($emprunteur as $key => $value) {
  //   if($_POST["email"] === $value["email"]) {
  //     header('Location: ajoutEmprunteur.php?message=5');
  //     exit;
  //   }
  // }
  //   //vérification si le mot de passe correspend a sa confirmation
  //   if($_POST["password"] !== $_POST["password-confirm"]) {
  //     $message .= "3";
  //   }
  //   //sinon on envoi sur la page de emprunteurManager.php avec un message de succès
  //   else {
  //     $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $query = $db->prepare('INSERT INTO emprunteur (email, nom, prenom, password, poste, statut) VALUES(:email, :nom, :prenom, :password, :poste, :statut)');
      $query->execute([
        "email" => $_POST["email"],
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "password" => $_POST["password"],
        "poste" => $_POST["poste"],
        "statut" => $_POST["statut"]
      ]);
      var_dump($query);
//       header("Location: emprunteurManager.php?success=Emprunteur créé avec succès");
//       exit;
//     }
// }
// //si le formulaire est vide on renvoi vers la page ajoutEmprunteur
// else {
//   header("Location: ajoutEmprunteur.php?message=0");
//   exit;
// }
 ?>