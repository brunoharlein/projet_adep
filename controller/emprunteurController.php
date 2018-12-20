<?php

require "model/emprunteurManager.php";
require "service/errorMsg.php";

// fonction qui affiche tout les emprunteurs
function getEmprunteur(){
    $emprunteur = getBorrower();
    // var_dump($emprunteur);
    require "view/emprunteurView.php";
}

// fonction qui ajoute un emprunteur
function addEmprunteur() {
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = htmlspecialchars($value);
          }
        if (!empty($_POST["password"])) {
          password_hash($_POST["password"]);
        }
          // string password_hash( string $password , int $algo [, array $options ] );
        // if () {
            
        // }
        addBorrower($_POST);
        redirectTo("emprunteurs");
    }
    // else {
    //     redirectTo("");
    // }
    require "view/addEmprunteurView.php";
}

// fonction qui modifie un emprunteur
function editEmprunteur() {
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $emprunteur = getBorrowerId($id);
        var_dump($emprunteur);
    }
    if (!empty($_POST)) {
        editBorrower($_POST);
        redirectTo("emprunteurs");
    }
    require "view/editEmprunteurView.php";
}

// fonction qui supprime un emprunteur
function deleteEmprunteur() {
    $id = htmlspecialchars($_GET["id"]);
    deleteBorrower($id);
    redirectTo("emprunteurs");
}
?>
