<?php
require "model/userManager.php";
// require "service/formChecker.php";
require "service/errorMsg.php";
 ?>

<?php
function login() {
  if (isset($_POST)) {
    if (!empty($_POST)) {
        if (getUser($_POST)) {
          $user = getUser($_POST);
          //test passwordverify à faire
          //if (!empty($user) && password_verify($_POST["password"],$user["password"])) {
            initializeUserSession($user);
            if ($_SESSION["user"]["status"] === "admin") {
              redirectTo("materiels");
            }else {
              redirectTo("emprunter/list");
            }
        }
        else {
          initializeMsgSession();
          array_push($_SESSION["codeMsg"], "2"); //ajoute le code msg à la session code
        }
    }
    // else {
    //   initializeMsgSession();
    //   array_push($_SESSION["codeMsg"], "1"); //ajoute le code msg à la session code
    // }
  }
require "view/indexView.php";
}


 function deconnect(){
   logout();
   redirectTo("login");
 }
 ?>
