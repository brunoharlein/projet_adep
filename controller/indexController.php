<?php
require "model/userManager.php";
// require "service/form.php";
// require "service/errorMsg.php";


 ?>

<?php
function login() {
  //$messages = errorsLogin();
  $code = "";
  if (isset($_POST)) {
    if (!empty($_POST)) {
      //if (checkValue($_POST)) {
        if (getUser($_POST)) {
          $user = getUser($_POST);
          //test passwordverify à faire
          // if (!empty($user) && password_verify($_POST["psw"],$user["psw"])) {
          //   // code...
          // }
          initializeUserSession($user);
          if ($_SESSION["user"]["status"] === "admin") {
            redirectTo("materiels");
          }else {
            redirectTo("emprunter");
          }

        }
        else {
          $code = "1";
        }
      //}
    }
  }
  require "view/indexView.php";
}



 function deconnect(){
   logout();
   redirectTo("login");
 }
 ?>
