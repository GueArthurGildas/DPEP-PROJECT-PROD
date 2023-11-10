<script>


$('#btnGoToStep2').click(function(e) {
    e.preventDefault();
   
    let idNavireSelcted= $('#navire-selected').val();

     

     if( idNavireSelcted!="default_option"){
                alert(idNavireSelcted);
                var data = {
                    idNavireSelcted:idNavireSelcted,
                };

                 $.ajax({
                        url: '{{route("home.demandes.traitStep1.index")}}',
                        type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                        data: data,
                        success: function (response) {
                               toastr.success('Have fun storming the castle!', 'Miracle Max Says');
                        },
                        error: function (error) {
                            // Gestion des erreurs
                        }
                 })

     }else{

     }

})

//ici je test pour recuperer les elements dans l'objet de la demande
function getObjectPort(){
    
    let objetAccesPort = $('#objetAccesPort').val();
    $("#getObjectAccessPort").val(objetAccesPort);
    //alert(objetAccesPort);
    
};

// ici la fonction qui pemret de selectionner le navire au changement du select navire dans le front puis mettre à jour les données en aperçu dans le coin
function getSelectNavire(){
   goToSelectionNavire();
} 

// ici la fonction qui va selectionner un navire dans la base depuis la page navire for demande

function goToSelectionNavire(){


        //ici le champ selection de navire
        let idNavireSelcted= $('#navire-selected').val();

        
       
        /// @s data from navire Form  
        let nomNavire = $('#nomNavire');
        let etatPavillonNavire = $('#etatPavillonNavire');
        let typeNavire = $('#typeNavire');
        let certifNavire = $('#certifNavire');
        let tiranNavire = $('#tiranNavire');
        let longNavire = $('#longNavire');
        let largNavire = $('#largNavire');
        let immaCertifNavire = $('#immaCertifNavire');
        let omi = $('#omi');
        let orgp = $('#orgp');
        let contactNavireForInfo = $('#contactNavireForInfo');
        let proprioNavire = $('#proprioNavire');
        let captaineName = $('#captaineName');
        let captaineNationality = $('#captaineNationality');        
        let idExterne = $('#idExterne');    
        let ircsNavire = $('#ircsNavire');   
        let pereTypeNavire = $('#pereTypeNavire'); 
        let TypeNavire = $('#TypeNavire');  
        

        /// @e data from navire Form        


       

        if( idNavireSelcted!="default_option"){

              

                 afficheAndDisapearingLoadSvg()

                var data = {
                    idNavireSelcted:idNavireSelcted,
                };

                $.ajax({
                        url: '{{route('home.demandes.navirefordemande.index')}}',
                        type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                        data: data,
                        success: function (response) {
                           
                        
                                $("#enteteInfoNavire").addClass("text-primary")
                                $("#iconInfoNavireCheck").addClass("text-success")

                                $("#formAjoutNewNAvire").css({
                                        "display": "block"  ,
                                });

                                $("#takeIdNavireSelected").val(response.navireSelected.id)
                                

                               console.log(response.navireSelected);
                               
                               nomNavire.html(response.navireSelected.Nom_Navire);
                               etatPavillonNavire.html(response.navireSelected.Etat_Pavillon); 
                               typeNavire.html(response.navireSelected.Type_Navire); 
                               certifNavire.html(response.navireSelected.Id_Certificat_Immat); 
                               tiranNavire.html(response.navireSelected.Power_of_Main_Engine);
                               longNavire.html(response.navireSelected.Length_Overall); 
                               largNavire.html(response.navireSelected.Dimension_Navire); 
                               immaCertifNavire.html(response.navireSelected.Id_Certificat_Immat); 
                               omi.html(response.navireSelected.Omi); 
                               orgp.html(response.navireSelected.ORGP);
                               contactNavireForInfo.html(response.navireSelected.Nom_Navire); 
                               proprioNavire.html(response.navireSelected.Nom_Navire); 
                               captaineName.html(response.navireSelected.Nom_Navire); 
                               captaineNationality.html(response.navireSelected.Nom_Navire);      
                               idExterne.html(response.navireSelected.Id_Extern);
                               ircsNavire.html(response.navireSelected.Num_IRCS);   
                              
                                                
                               
                               //ici je grise tous els champs du formulaire
                               griseFieldNavire();


                              
                            /* ici remplissage des champs quand l'user change le navire selectionné alors qu'il était déjà selectionné un première fois, de sorte à supprimer les informations du champs
                             champs au prealbale rensignés */
                            /*if ($(".test").length > 0) {
                                $(".test").remove();
                                $("h5.ok").remove();
                                
                                nomNavire.parent().append("<h5 class='test'>"+response.navireSelected.Nom_Navire+" </h5>");
                                etatPavillonNavire.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>");
                                typeNavire.parent().append("<h5 class='test'>"+response.navireSelected.Type_Navire+" </h5>");
                                certifNavire.parent().append("<h5 class='test'>"+response.navireSelected.Id_Certificat_Immat+" </h5>");
                                tiranNavire.parent().append("<h5 class='test'>"+response.navireSelected.Power_of_Main_Engine+" </h5>");
                                longNavire.parent().append("<h5 class='test'>"+response.navireSelected.Length_Overall+" </h5>");
                                largNavire.parent().append("<h5 class='test'>"+response.navireSelected.Dimension_Navire+" </h5>");
                                immaCertifNavire.parent().append("<h5 class='test'>"+response.navireSelected.Id_Certificat_Immat+" </h5>");
                                omi.parent().append("<h5 class='test'>"+response.navireSelected.Omi+" </h5>");
                                orgp.parent().append("<h5 class='test'>"+response.navireSelected.ORGP+" </h5>");
                                contactNavireForInfo.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>"),
                                proprioNavire.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>");
                                captaineName.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>");
                                captaineNationality.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>") ;   
                                idExterne.parent().append("<h5 class='test'>"+response.navireSelected.Id_Extern+" </h5>")   ; 
                                ircsNavire.parent().append("<h5 class='test'>"+response.navireSelected.Num_IRCS+" </h5>");  
                                pereTypeNavire.parent().append("<h5 class='test'>"+response.navireSelected.Type_Navire+" </h5>");  

                               
                                

                            } else {
                                nomNavire.parent().append("<h5 class='test'>"+response.navireSelected.Nom_Navire+" </h5>");
                                etatPavillonNavire.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>");
                                typeNavire.parent().append("<h5 class='test'>"+response.navireSelected.Type_Navire+" </h5>");
                                certifNavire.parent().append("<h5 class='test'>"+response.navireSelected.Id_Certificat_Immat+" </h5>");
                                tiranNavire.parent().append("<h5 class='test'>"+response.navireSelected.Power_of_Main_Engine+" </h5>");
                                longNavire.parent().append("<h5 class='test'>"+response.navireSelected.Length_Overall+" </h5>");
                                largNavire.parent().append("<h5 class='test'>"+response.navireSelected.Dimension_Navire+" </h5>");
                                immaCertifNavire.parent().append("<h5 class='test'>"+response.navireSelected.Id_Certificat_Immat+" </h5>");
                                omi.parent().append("<h5 class='test'>"+response.navireSelected.Omi+" </h5>");
                                orgp.parent().append("<h5 class='test'>"+response.navireSelected.ORGP+" </h5>");
                                contactNavireForInfo.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>")
                                proprioNavire.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>")
                                captaineName.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>")
                                captaineNationality.parent().append("<h5 class='test'>"+response.navireSelected.Etat_Pavillon+" </h5>")    
                                idExterne.parent().append("<h5 class='test'>"+response.navireSelected.Id_Extern+" </h5>")   ; 
                                ircsNavire.parent().append("<h5 class='test'>"+response.navireSelected.Num_IRCS+" </h5>");  
                                pereTypeNavire.parent().append("<h5 class='test'>"+response.navireSelected.Type_Navire+" </h5>"); 
                                

                            }*/
                           
                        },
                        error: function (error) {
                            // Gestion des erreurs
                        }
                });

        }else{
            toastr.success('Have fun storming the castle!', 'Miracle Max Says')
        }

}


// la fonction chargée de griser tous les champs dans le formulaire du navire
function griseFieldNavire(){
         $(".field-navire").prop("disabled", true);
}




$('#btnAfficheSelectNavire').click(function(e) {

    e.preventDefault();


    afficheAndDisapearingLoadSvg()

    $("#sectionSelectNavire").css({
        "display": "block"  ,
     });  
})

// ici le bouton vider clicqué met tous les champs du formulaire à vide et égallement se rassure de reseter le navire selectionné
$('#Ajouter-navire').click(function(e) {

    e.preventDefault();


    afficheAndDisapearingLoadSvg()

     
     /*$("#btnAfficheSelectNavire").css({
        "display": "block"  ,
     });*/

     $("#sectionSelectNavire").css({
        "display": "none"  ,
     });

    $(".field-navire").prop("disabled", false);

     $("#formAjoutNewNAvire").css({
        "display": "block"  ,
     });


    $(".field-navire").val("");
    
    $("#navire-selected").val("default_option");
    //alert($("#idNavireSelcted").val());
})

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