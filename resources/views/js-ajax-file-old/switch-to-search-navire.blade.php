<script>


    /// ici le btn quui affiche le navire a rechercher 
    $('#btnSwitchToNavireSearch').click(function(e) {

      
            
       
    afficheAndDisapearingLoadSvg()
       

        setTimeout(function () {
            // Utilisez la méthode fadeOut() pour faire disparaître l'élément.
            $("#block-search-navire").css({
             "display": "block"   ,
            });
        
        }, 500);  

    })


    /// ici le btn qu fait disparaitre le navire puis affiche la demande Form 
    $('#annul-select-navire ').click(function(e) {
        e.preventDefault();

        //alert('je suis la');
            
        $("#block-search-navire").css({
           "display": "none"   ,
           
        });   
        

        
        
       

        setTimeout(function () {
            // Utilisez la méthode fadeOut() pour faire disparaître l'élément.
            $("#block-form-demande").css({
             "display": "block"   ,
            });
        
        }, 420); 

    })


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
