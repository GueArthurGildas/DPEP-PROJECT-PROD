<script>

  //// ici la fonction qui supprime la peche depuis la base deonnées
        function myDeleteAutoPeche(element) {
           
            // Récupérer l'élément parent de l'élément cliqué
            var parentTr = $(element).parent().parent();
           
            // Récupérer l'ID de l'élément parent
            var pecheId = $(element).closest('a').attr("data-id");
            

            // recuperer l'Id de la demande en cours de traitement
            let demandeId = $('#demandeId').text();

            

            // remplir la valeur data
             var data = {
                pecheId: pecheId,
                demandeId: demandeId,
            };

             $.ajax({
                url: '{{route("home.demandes.pechedelete.index")}}',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: data,
                success: function (response) {
                   parentTr.remove();
                   console.log(response);          
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        }       



 $('#btnAddAutoPecheToCollection').click(function(e) {
     e.preventDefault();

      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           


            /// @s data from peche Form
            let Identificateur = $('#Identificateur').val();
            let devlivrePar = $('#devlivrePar').val();
            let dateEmission = $('#dateEmission').val();
            let dateExpiration = $('#dateExpiration').val();
            let zondPeche = $('#zondPeche').val();
            let especeForPeche = $('#especeForPeche').val();
            let engin = $('#engin').val();
            
            /// @e data from peche Form



            var donnees = {

                /// @s data from peche Form
                Identificateur:Identificateur,
                devlivrePar:devlivrePar,
                dateEmission:dateEmission,
                dateExpiration:dateExpiration,
                zondPeche:zondPeche,
                especeForPeche:especeForPeche,
                engin:engin,
               
                /// @e data from peche Form

            };

            
            $.ajax({
                url: '{{route("home.demandes.peche.index")}}',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: donnees,
                success: function (response) {
                   console.log(response.testPeche);
                   $("#iciAddRetourPecheOk").append(response.testPeche);
                   $('#Identificateur').val("");
                   $('#devlivrePar').val("");
                   $('#dateEmission').val("");
                   $('#dateExpiration').val("");
                   $('#zondPeche').val("");
                   
                   $('#especeForPeche').firstElementChild.selected = true;
                   $('#engin').val("");
                   
                   toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

 })



//// ici pour l'affichage du spinner afin de passer à la page suivante


function showSpinnerLoadingToGoOnStep4(){

                    $("#content-step3").css({
                        "display":"none",
                    })   
                    
                    
                    $("#text-content-loading-step3").css({
                            "display":"block",
                    }) 

                    setTimeout(function () {
                         submitFormAutoPeche();
                    }, 200); 

}


/// la fonction qui lancera le formulaire
function submitFormAutoPeche(){
               
                // soummettre le formulaire de vente 
                var form = $('#FormStep3');

                // Soumettez le formulaire
                form.submit();

}

</script>