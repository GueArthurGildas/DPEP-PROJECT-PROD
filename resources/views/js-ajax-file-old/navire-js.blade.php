<script>



//ici le buton qui permet de reafficher tous les champs du form de navire
$('#btnDoappearFieldNavire').click(function(e) {

    
    $(".field-navire").css({
        
        "display": "block"  ,
    });

    $(".field-navire").val("");
    
    $("#navire-selected").val("selectNavire");
   
    $(".test").css({
        "display": "none"  ,
    });
    
    
})


</script>
