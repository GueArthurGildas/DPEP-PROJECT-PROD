

<script>

// ici j'afficherai le preload avant d'afficher les demandes de l'utilisateur
function loadingPreloadPageUserDemandes(){
    //alert(typeArticleVal);

                $("#loadingForButton").fadeIn();

                // Utilisez setTimeout() pour définir un délai en millisecondes avant de faire disparaître l'élément.
                setTimeout(function () {


                    // Utilisez la méthode fadeOut() pour faire disparaître l'élément.

                    $("#loadingForButton").css({
                        "display": "none"   ,
                    });  

                    getIdArticlesInHideFieldForm();

                     
                }, 1000);  

                

                //

}

function testDisapearcontainer(){

    
      $("#conaitner-user-demandes").css({
        "display": "none"   ,
      })
}

document.addEventListener("DOMContentLoaded", function() {
   


       setTimeout(function () {

                    $("#conaitner-preload-demande").css({
                        "display": "none"   ,
                    })

                    $("#conaitner-user-demandes").css({
                        "display": "block"   ,
                    })
                    
                     
        }, 1000);  
});


// cette fonction affiche la roue dans la page puis la faire disparaitre
    function afficheAndDisapearingLoadSvg(){
                $("#loading-svg").fadeIn();
                // Utilisez setTimeout() pour définir un délai en millisecondes avant de faire disparaître l'élément.
                setTimeout(function () {
                    // Utilisez la méthode fadeOut() pour faire disparaître l'élément.
                    $("#loading-svg").css({
                        "display": "none"   ,
                    });   
                }, 600);  
    }

</script>


