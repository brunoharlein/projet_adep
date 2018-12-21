<?php
//Function which clean the entries of a form
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

//Function which verifies if a field is empty
function isFieldEmpty($form) {
  foreach ($form as $key => $value) {
    if(empty($value)) {
      return "1";
    }
  }
}

//Function which verifies if a field is too short
function isTooShort($value, $length) {
  if(strlen($value) < $length) {
    return "2";
  }
}

//Function which verifies if two fields are identical
function areIdentical($value1, $value2) {
  if($value1 !== $value2) {
    return "3";
  }
}

//Function which verifies regex
function respectPattern($pattern, $value) {
  if(!preg_match($pattern, $value)) {
    return "4";
  }
}


function cleanFormEntries($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

function checkValue($form){
  foreach ($form as $key => $value) {
    if (empty($value) && $value !== '0') { // si le champs du form est vide et qu'il est different de 0(select à 0)
      return false;
      break;
    }
    else {
      return true;
    }
  }
}

function afficheErrorMsg($code,$text){
  $messages = errorsMsg($text);
  foreach ($messages as $key => $value) {
    if ($value["id"] == $code) {
      $message = $value["msg"];
    }
  }
return $message;
}

function errorMsgEmprunteur($code, $text) {
  $messages = getErrorEmprunteur($text);
}

function afficheConnexionMsg($code){
  $messages = connexionMsg();
  foreach ($messages as $key => $value) {
    if ($value["id"] == $code) {
      $message = $value["msg"];
    }
  }
return $message;
}
 ?>
