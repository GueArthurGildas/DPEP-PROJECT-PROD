
<script>

    function afficheAndDisapearingLoadSvg(){
                $("#loading-svg").fadeIn();
                // Utilisez setTimeout() pour définir un délai en millisecondes avant de faire disparaître l'élément.
                setTimeout(function () {
                    // Utilisez la méthode fadeOut() pour faire disparaître l'élément.
                    $("#loading-svg").css({
                        "display": "none"   ,
                    });   
                }, 350);  
    }


    
</script>