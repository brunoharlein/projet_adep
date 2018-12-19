<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/lab/projet_adep/",
    "status" => ["anonymous", "user", "admin"],
    "defaultRoute" => ""
  ];
}

 ?>
