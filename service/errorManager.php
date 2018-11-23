<?php
//Function which return the tab containing error messages with their indexes
function getReferences() {
  return [
    "0" => "Il faut remplir le formulaire",
    "1" => "Certains champs sont vides",
    "2" => "Le nom utilisateur est trop court",
    "3" => "Le mot de passe ne correspond pas à sa confirmation",
    "4" => "Le mot de passe ne respecte pas les conditions indiquées",
    "5" => "Un utilisateur utilise déjà cet email merci d'en choisir un autre",
    "6" => "Veuillez entrer un email au format valide",
    "7" => "Veuillez saisir des identifiants valident.",
    "8" => "Il faut vous identifier pour accéder au contenu",
    "9" => "Contenu reservé aux administrateurs du site"
  ];
}

//Fonction which on the base of chain error codes returns corresponding message
function getErrorMessages($codes) {
  //Array associating codes and messages
  $references = getReferences();
  //Start of standard message
  $message = "";
  //Securing argument
  $codes  = htmlspecialchars($codes);
  //We loop on the string and we add to $message the messages associated to the error code
  for ($i=0; $i < strlen($codes) ; $i++) {
    $message .=$references[$codes[$i]];
  }
  //We return the finished message
  return $message;
}


//Global function to capt messages whichever they are error or success
function getMessages() {
  $result = [];
  //If success confirm
  if(isset($_GET["success"])) {
    $success = htmlspecialchars($_GET["success"]);
    $result["success"] = $success;
  }
  //If we have one or more errors
  if(isset($_GET["message"])) {
    $code = htmlspecialchars($_GET["message"]);
    $error = getErrorMessages($code);
    $result["error"] = $error;
  }
  return $result;
}

//Fonction which displays the messages in red or green depending on their nature
function displayMessages() {
  $messages = getMessages();
  foreach ($messages as $key => $message) {
    if($key === "success") {
      echo "<div class='alert alert-success w-50 mx-auto'>" . $message . "</div>";
    }
    else {
      echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
    }
  }
}

 ?>