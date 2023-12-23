<script>

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