<?php
require "model/materielsManager.php";
// require "service/form.php";
// require "service/errorMsg.php";

function allMateriels(){
  if (getMateriels())
    {$materiels = getMateriels();}
  else
    {$materiels = NULL;}

  require "view/listMaterielsView.php";
}

 ?>
