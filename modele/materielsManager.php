<?php

function updateMateriel($bdd,$form){
  var_dump($form);
  $requete = $bdd->prepare('UPDATE materiel SET nom = :nom, description = :description, etat = :etat, acces = :acces, num_serie = :num_serie WHERE id = :id');
  $result = $requete->execute(array('id' => $form["id"], 'name' => $form["name"], 'description' => $form["description"], 'etat' => $form["etat"], 'acces' => $form["acces"], 'num_serie' => $form["num_serie"]));
  return $result;
}


function addMateriel($bdd,$form){
  var_dump($form);
  $requete = $bdd->prepare('INSERT INTO materiel(nom, description, etat, acces, num_serie) VALUES(:nom, :description, :etat, :acces, :num_serie)');
  $result = $requete->execute(array('nom' => $form['nom'], 'description' => $form['description'], 'etat' => $form['etat'], 'acces' => $form['acces'], 'num_serie' => $form['num_serie']));
  return $result;
}

 ?>
