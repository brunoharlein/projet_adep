<?php
<<<<<<< HEAD
=======
require "model/emprunteurManager.php";
>>>>>>> e23a0240c7ebb3e633415160552ad68bba8781a8

// fonction qui affiche tout les emprunteurs
function getEmprunteur(){
    $emprunteur = getBorrower();
    // var_dump($emprunteur);
    require "view/emprunteurView.php";
}

//fonction qui reccupere un seul emprunteur selon son id
// function getEmprunteurId() {
//     $id = $_GET["id"];
//     if (!empty($_GET["id"])) {
//         $emprunteur = getBorrowerId($id);
//     }
// }

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
