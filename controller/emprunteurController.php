<?php

// fonction qui affiche tout les emprunteurs
function getEmprunteur(){
    $emprunteur = getBorrower();
    // var_dump($emprunteur);
    require "view/emprunteurView.php";
}

// fonction qui ajoute un emprunteur
function addEmprunteur() {
    if (!empty($_POST)) {
        addBorrower($_POST);
        redirectTo("emprunteurs");
    }
    require "view/addEmprunteurView.php";
}

// fonction qui modifie un emprunteur
function editEmprunteur() {
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $emprunteur = getBorrower($id);
    }
    if (!empty($_POST)) {
        editBorrower($_POST);
        redirectTo("emprunteurs");
    }
    require "editEmprunteurView.php";
}

// fonction qui supprime un emprunteur
function deleteEmprunteur($id) {
    $id = htmlspecialchars($_GET["id"]);
    deleteBorrower($id);
    redirectTo("");
}
?>
