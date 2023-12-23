<script>

// cette fonction affiche la roue dans la page puis la faire disparaitre
    function afficheAndDisapearingLoadSvg(){

                

                $("#loading-svg").fadeIn();

                // Utilisez setTimeout() pour définir un délai en millisecondes avant de faire disparaître l'élément.
                setTimeout(function () {

            

                    // Utilisez la méthode fadeOut() pour faire disparaître l'élément.

                    $("#loading-svg").css({
                        "display": "none"   ,
                    });  

                     $("#form-go-to-ListeDemande").submit(); 
                }, 800);  

    }

</script>