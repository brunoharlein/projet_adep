<form class="needs-validation text-right" action="" method="post" novalidate >

  <input type='hidden' value="<?php echo (isset($materiel))?$materiel["id"]:""; ?>" name='id'>

<?php if ($action != "delete") { ?>

  <div class="form-group text-left">
      <div class="input-group ">
        <div class="input-group-prepend">
          <label class="input-group-text" for="name">Nom</label>
        </div>
        <input type="input" class="form-control" value="<?php echo (isset($materiel))?$materiel["nom"]:""; ?>" name="nom" placeholder="Nom du matériel" >

        <!-- <div class="invalid-feedback">Veuillez saisir un nom produit.</div> -->
      </div>
    </div>
  <div class="form-group text-left">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="5"><?php echo (isset($materiel))?$materiel["description"]:""; ?></textarea>
    <!-- <div class="invalid-feedback">Veuillez saisir une description.</div> -->
  </div>
  <div class="form-group text-left">
    <div class="input-group">
      <div class="input-group-prepend">
        <label class="input-group-text" for="categorie">N° de série</label>
      </div>
      <input type="input" class="form-control" value="<?php echo (isset($materiel))?$materiel["num_serie"]:""; ?>" name="num_serie"  placeholder="N° de série" >
      <!-- <div class="invalid-feedback">Veuillez saisir un N° de série.</div> -->
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="etat">Etat</label>
        </div>
        <select class="custom-select" name="etat">
          <option <?php echo (isset($materiel) && $materiel["etat"] == "1")?'selected="selected"':'';  ?> value="1">Disponible</option>
          <option <?php echo (isset($materiel) && $materiel["etat"] == "0")?'selected="selected"':'';  ?> value="0">Indisponible</option>
        </select>
      </div>
    </div>
    <div class="form-group col-md-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="acces">Accessibilité</label>
        </div>

        <select class="custom-select" name="acces">
          <option <?php echo (isset($materiel) && $materiel["acces"] == "1")?'selected="selected"':'';  ?> value="1">Libre</option>
          <option <?php echo (isset($materiel) && $materiel["acces"] == "0")?'selected="selected"':'';  ?> value="0">Restreint</option>
        </select>
      </div>
    </div>
  </div>


<?php } else {  ?>
  <div class="alert alert-warning text-center" role="alert">
        <h3>Voulez-vous supprimer ce matériel ?</h3>
        <h4><?php echo $materiel["nom"]; ?></h4>
 </div>

<?php } ?>
<div class="d-flex justify-content-end mb-2">
    <button class="<?php echo $buttonClass; ?>" type="submit"><?php echo $buttonTitle; ?></button>
</div>
</form>
