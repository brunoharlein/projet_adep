<?php
// session_start();
// if (isset($_SESSION["emprunteur"])) {
//   $statut =intval($_SESSION["emprunteur"]["statut"]);
// }
//var_dump($_SESSION["user"]);
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Adep Project</title>
  <meta name="description" content="Logiciel de gestion des prêts">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body class="d-flex flex-column justify-content-between">
<header class="jumbotron jumbotron-fluid py-0 mb-0">
  <div class="container d-flex justify-content-between">
    <!-- Logo and title ADEP -->
    <div id="logoHeader" class="">
      <a href="https://www.adep-roubaix.fr/" target="_blank"><img src="img/adep-logo.png" class="img-fluid" alt="Logo de l'ADEP"></a>
    </div>
    <div class="d-flex align-items-center justify-content-center ">
      <h1 id="titreHeader" class="my-3">Gestion des prêts</h1>
    </div>
    <!-- Navigation Mobile -->
    <?php if (isset($statut)) { ?>
    <div class="mobile d-flex align-items-center">
      <a class="mobile" href="javascript:void(0);" onclick="menuMobile()"><i id="navIcon" class="fas fa-bars fa-2x transformIcon"></i></a>
      <nav id="navMobile" class="menuVisible">
            <ul class="nav flex-column">

                <li class="nav-item"><a class="nav-link" href="emprunts.php">Emprunter</a></li>
                <!-- //Si l'emprunteur est admin -->
                <?php if (isset($statut) === true) { ?>
                  <li class="nav-item"><a class="nav-link" href="materiels.php">Les matériels</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Les emprunteurs</a></li>
                  <li class="nav-item"><a class="nav-link" href="historical.php">L'historique</a></li>
                <?php } ?>1
                <li class="nav-item"><a class="nav-link" href="logout.php">Se déconnecter</a></li>

            </ul>
      </nav>
    </div>
    <?php } ?>
  </div>
  <!-- Navigation Tab and Screen -->
  <!-- Affichage du menu si User connecté -->
  <?php if (isLogged()) { ?>
  <nav class="tab container ">
    <ul class="nav d-flex justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="emprunts.php">Emprunter</a>
        </li>
        <!-- //Si l'emprunteur est admin -->
          <?php if ($_SESSION["user"]["status"] === "admin") { ?>
          <li class="nav-item">
            <a class="nav-link" href="materiels.php">Les matériels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Les emprunteurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historical.php">L'historique</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Se déconnecter</a>
        </li>
    </ul>
  </nav>
  <?php } ?>
</header>
