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


 ?>