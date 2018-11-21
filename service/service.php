<?php
function cleanFormEntries($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

function valueFormEntries($form) {
  foreach ($form as $key => $value) {
    if (empty($value) && $value !== '0') { // si le champs du form est vide et qu'il est different de 0(select à 0)
      $result = false;
      return $result;
      break;
    }
  }
return true;
}

 ?>
