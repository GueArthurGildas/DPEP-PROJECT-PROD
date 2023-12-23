<script>


/// ici je vais afficher le spinner dans le bouton de validation qui pointera vers la page step-1 de la demande 

function affSpinerInsideBtnCommencer(){

                     $("#loadingForButton").css({
                        "display":"block",
                    })   

                     $("#text-commencer").html("Chargement...") 
            
                setTimeout(function () {
                     SubmitFormDoGoToStep1();
                }, 2000);  


}


//// ici la fonction qui fera tout disparaître sur la page de presentation pour montrer le le texte de chargement 
function SubmitFormDoGoToStep1(){
   
    // ici je decide de soummetre le formulaire qui pointera vers le step-1 de la demande
    $("#goToStep1").submit();

}







// cette fonction affiche la roue dans la page puis la faire disparaitre
    function showAndDisapearingLoadGetFromDaslite(){

                

                $("#loadingGetFromDashLite").fadeIn();

                // Utilisez setTimeout() pour définir un délai en millisecondes avant de faire disparaître l'élément.
                setTimeout(function () {

                    // Utilisez la méthode fadeOut() pour faire disparaître l'élément.

                    $("#loadingGetFromDashLite").css({
                        "display": "none"   ,
                    });

                    $("#form-from-prensent-to-step-one").submit();


                }, 1500);  

                
                
    }

</script>