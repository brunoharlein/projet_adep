<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "index",
      "login"
    ],
    "login" => [
      "index",
      "login"
    ],
    ////////////////////////////////start roads for material section

    "materiels" => [
     "materiels",
     "allMateriels",
     "status" => "admin"
   ],
    "materiels/ajout" => [
     "materiels",
     "add",
     "status" => "admin"
   ],
    "materiels/edit" => [
     "materiels",
     "edit",
     ["id" => ["integer"]
   ],
     "status" => "admin"
   ],
    "materiels/suppr" => [
     "materiels",
     "delete",
     ["id" => ["integer"]
     ],
     "status" => "admin"
    ],

          //////////////////////////////// end section material roads

          /////////////////////////////////////////////////////////// start roads for borrower

    "emprunteurs" => [
     "emprunteur",
     "getEmprunteur",
     "status" => "admin"
   ],
   "emprunteur/ajout" => [
    "emprunteur",
    "addEmprunteur",
    "status" => "admin"
   ],
   "emprunteur/edit" => [
    "emprunteur",
    "editEmprunteur",
    ["id" => ["integer"]
   ],
    "status" => "admin"
   ],
   "emprunteur/suppr" => [
    "emprunteur",
    "deleteEmprunteur",
    ["id" => ["integer"]
   ],
    "status" => "admin"
   ],

   /////////////////////////////////////////////////////////////////// end roads for borrower

   /////////////////////////////////////// start roads for borrow

    "emprunter" => [
      "emprunter",
      "addEmprunt"
    ],
    "emprunter/edit" => [
      "emprunter",
      "updateEmprunt"
    ],
    "emprunter/list" => [
      "emprunter",
      "allMateriel"
    ],

    ////////////////////////////////////// end roads for borrow

    ///////////////////////////////////////////////////////////////// start roads for historical

    "historique" => [
      "emprunter",
      "getHistorical",
      "status" => "admin"
    ],

    ////////////////////////////////////////////////////////////////// end roads for historical
    "logout" => [
      "index",
      "deconnect"
    ]
   ];
}

 ?>
