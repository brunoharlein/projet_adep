<?php
// fonction qui affiche tout les emprunteurs
function getBorrower(){
    $db = getDataBase();
    $req = $db->query("SELECT * FROM emprunteur");
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $result;
}

// fonction qui ajoute un emprunteur
function addBorrower($emprunteur) {
    $db = getDataBase();
    $req = $db->prepare("INSERT INTO emprunteur (email, nom, prenom, password, poste, statut) VALUES (:email, :nom, :prenom, :password, :poste, :statut)");
    $result = $req->execute([
        "email" => $emprunteur["email"],
        "nom" => $emprunteur["nom"],
        "prenom" => $emprunteur["prenom"],
        "password" => $emprunteur["password"],
        "poste" => $emprunteur["poste"],
        "statut" => $emprunteur["statut"]
    ]);
    $req->closeCursor();
    return $result;
}

// fonction qui modifie un emprunteur
function editBorrower($form) {
    $db = getDataBase();
    $req = prepare("UPDATE emprunteur SET email = :email, nom = :nom, prenom = :prenom, password = :password, poste = :poste, statut = :statut WHERE id = :id");
    $result = $req->execute([
        "email" => $form["email"],
        "nom" => $form["nom"],
        "prenom" => $form["prenom"],
        "password" => $form["password"],
        "poste" => $form["poste"],
        "statut" => $form["statut"],
        "id" => $form["id"]
    ]);
    $req->closeCursor();
    return $result;
}

// fonction qui supprime un emprunteur
function deleteBorrower($id) {
    $db = getDataBase();
    $req = prepare("DELETE FROM emprunteur WHERE id = :id");
    $result = $req->execute(["id" => $id]);
    $req->closeCursor();
    return $result;
}
?>


<?php

