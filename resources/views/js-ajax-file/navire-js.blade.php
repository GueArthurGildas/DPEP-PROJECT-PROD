<script>
/// ici au click du bouton faire griser tous les champs du navire
    /// ici le btn quui affiche le navire a rechercher 
$('#valide-select-navire').click(function(e) {

        e.preventDefault();

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
        
        
        

        /// @e data from navire Form        


       

        if( idNavireSelcted!="select-navire"){
                       
                 afficheAndDisapearingLoadSvg();

                var data = {
                    idNavireSelcted:idNavireSelcted,
                };

                $.ajax({
                        url: '{{route('home.demandes.navirefordemande.index')}}',
                        type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                        data: data,
                        success: function (response) {
                            $(".field-navire").css({
                                "display": "none"  ,
                            });

                         


                            $("#block-search-navire").css({
                                "display": "none"   ,
                            });
                               console.log(response.navireSelected);
                            
                            /* ici remplissage des champs quand l'user change le navire selectionné alors qu'il était déjà selectionné un première fois, de sorte à supprimer les informations du champs
                             champs au prealbale rensignés */
                            if ($(".test").length > 0) {
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
                                

                            }
                           
                        },
                        error: function (error) {
                            // Gestion des erreurs
                        }
                });

        }else{
            toastr.success('Have fun storming the castle!', 'Miracle Max Says')
        }
 

})


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

<script>


/*
// ici validation et création du navire dans la base de données
$("#nextFormButton").click(function(e){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        //ici le champ selection de navire
        let idNavireSelcted= $('#navire-selected').val();
        

        // je crée un nouveau navire parce que l'user n'a pas selectionné un navire dans la base de données
        if(idNavireSelcted=="select-navire"){
               
                /// @s data from navire Form  
                let nomNavire = $('#nomNavire').val();
                let etatPavillonNavire = $('#etatPavillonNavire').val();
                let typeNavire = $('#typeNavire').val();
                let certifNavire = $('#certifNavire').val();
                let tiranNavire = $('#tiranNavire').val();
                let longNavire = $('#longNavire').val();
                let largNavire = $('#largNavire');
                let immaCertifNavire = $('#immaCertifNavire').val();
                let omi = $('#omi').val();
                let orgp = $('#orgp').val();     
                let idExterne = $('#idExterne').val();    
                let ircsNavire = $('#ircsNavire').val();   
                
    



                   var donnees = {
                        /// @s data from navire Form

                        nomNavire: nomNavire,
                        etatPavillonNavire: etatPavillonNavire,
                        typeNavire: typeNavire,
                        certifNavire: certifNavire,
                        tiranNavire: tiranNavire,
                        longNavire: longNavire,
                        largNavire: largNavire,
                        immaCertifNavire: immaCertifNavire,
                        omi: omi,
                        orgp: orgp,
                        idExterne: idExterne,
                        ircsNavire: ircsNavire,
                        /// @e data from navire For

                    };

                    


               $.ajax({
                    url: '{{route('home.demandes.navireport.index')}}',
                    type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                    data: donnees,
                    success: function (response) {
                    console.log(response);
                    },
                    error: function (error) {
                        // Gestion des erreurs
                    }
                });

                 alert(idNavireSelcted);

               


        }

})*/



</script>