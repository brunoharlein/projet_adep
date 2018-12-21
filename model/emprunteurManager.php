<?php
// fonction qui affiche tout les emprunteurs
function getBorrower(){
    $db = getDataBase();
    $req = $db->query("SELECT * FROM emprunteur");
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $result;
}

 //fonction qui reccupere un seul emprunteur selon son id
function getBorrowerId($id) {
    $db = getDataBase();
    $req = $db->prepare("SELECT * FROM emprunteur WHERE id = :id");
    $req->execute(["id" => $id]);
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $result;
}

// fonction qui ajoute un emprunteur
function addBorrower($emprunteur) {
    $db = getDataBase();
    $req = $db->prepare("INSERT INTO emprunteur (email, nom, prenom, password, poste, status) VALUES (:email, :nom, :prenom, :password, :poste, :status)");
    $result = $req->execute([
        "email" => $emprunteur["email"],
        "nom" => $emprunteur["nom"],
        "prenom" => $emprunteur["prenom"],
        "password" => $emprunteur["password"],
        "poste" => $emprunteur["poste"],
        "status" => $emprunteur["status"]
    ]);
    $req->closeCursor();
    return $result;
}

// fonction qui modifie un emprunteur
function editBorrower($form) {
    $db = getDataBase();
    $id = $_GET["id"];
    if (!empty($_GET["id"])) {
        $emprunteur = getBorrowerId($id);

    $req = $db->prepare("UPDATE emprunteur SET email = :email, nom = :nom, prenom = :prenom, password = :password, poste = :poste, status = :status WHERE id = :id");

    $result = $req->execute([
        "email" => $form["email"],
        "nom" => $form["nom"],
        "prenom" => $form["prenom"],
        "password" => $form["password"],
        "poste" => $form["poste"],
        "status" => $form["status"],
        "id" => $id
    ]);
    $req->closeCursor();
    return $result;
}
}

// fonction qui supprime un emprunteur
function deleteBorrower($id) {
    $db = getDataBase();
    $req = $db->prepare("DELETE FROM emprunteur WHERE id = :id");
    $result = $req->execute(["id" => $id]);
    $req->closeCursor();
    return $result;
}

?>
