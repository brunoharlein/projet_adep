<?php

// fonction qui affiche tout les emprunteurs
function getEmprunteur(){
    $emprunteur = getBorrower();
    require "../view/emprunteurView.php";
}

// fonction qui ajoute un emprunteur
function addEmprunteur() {
    if (!empty($_POST)) {
        addBorrower($_POST);
        redirectTo("");
    }
    require "";
}

// fonction qui modifie un emprunteur
function editEmprunteur() {
    if(isset($_GET["id"])) {
        $id = htmlspecialchars($_GET["id"]);
        $emprunteur = getBorrower($id);
    }
    if (!empty($_POST)) {
        editBorrower($_POST);
        redirectTo("");
    }
    require "";
}

// fonction qui supprime un emprunteur
function deleteEmprunteur($id) {
    $id = htmlspecialchars($_GET["id"]);
    deleteBorrower($id);
    redirectTo("");
}
?>


?>