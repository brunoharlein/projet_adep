$(document).ready(function(){
  //Affichage du menu Mobile
  $("#navMobile").click(function(){
        menuMobile();
    });
});

function menuMobile() {
    $("#navMobile").toggleClass("menuHidden");
    $("#navIcon").toggleClass("fa-times-circle transformIconClose");
}
