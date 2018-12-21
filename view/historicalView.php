<?php
include "view/template/header.php";
 ?>
  <main>
   <div class="container">
    <section class="d-flex flex-row justify-content-between mt-3 mb-3">
     <h2 class="col-4 mt-0">Gestion des emprunts</h2>
      <?php require "form/historicalForm.php"; ?>
    </section>
   </div>
   <div class="container">
    <table class="table table-hover">
     <thead class="thead-light">
      <tr>
       <th scope="col">Nom emprunteur</th>
       <th scope="col">Prénom emprunteur</th>
       <th scope="col">Nom materiel</th>
       <th scope="col">Emprunté le</th>
       <th scope="col">Rendu le</th>
      </tr>
     </thead>
     <tbody>
      <?php
       foreach ($historicals as $key => $postHistorical) {
      ?>
      <tr>
       <td><?php echo $postHistorical["nom_emprunteur"] //. " " . $postHistorical["prenom"];// ?></td>
       <td><?php echo $postHistorical["prenom"]; ?></td>
       <td><?php echo $postHistorical["nom_materiel"]; ?></td>
       <td><?php echo $postHistorical["dateEmprunt"]; ?></td>
       <td><?php echo $postHistorical["dateRetour"]; ?></td>
      </tr>
      <?php
        }
      ?>
     </tbody>
    </table>
   </div>
  </main>

  <?php
  include "view/template/footer.php";
   ?>
