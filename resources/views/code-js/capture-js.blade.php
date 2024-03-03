{{-- --------------------------------------------------------------------------- --}}
{{-- @s send capture section to the controller throw ajax query --}}


<script>

        //// ici la fonction qui supprime la capture depuis la base deonnées
        function myDelete(element) {
            // Récupérer l'élément parent de l'élément cliqué
            //var parentTr = $(element).closest('div').attr("content-capture-added");
            //var refArticle = $(e).closest('tr').find('td[data-ref]')

            //var parentTr = $(element).closest('div').attr("content-capture-added");

            var parentTr = $(element).parent().parent();
            

            //Récupérer l'ID de l'élément parent
            //var captureId = parentTr.find('.text-white').text();
            var captureId = $(element).closest('a').attr("data-id");
            //console.log(captureId);

            

            // recuperer l'Id de la demande en cours de traitement
             let demandeId = $('#demandeId').text();




            // remplir la valeur data
             var data = {
                captureId: captureId,
                demandeId: demandeId,
            };

             $.ajax({
                url: '{{route("home.demandes.capturedelete.index")}}',
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

         function openFormCaptureShowDetail() {
              $('#modalForm').modal('show');
         }



$(document).ready(function () {

  
    // Ici on envoie la capture dans la bd pour être sauvegarder
    $('#btnAddCaptureToCollection').click(function(e) {
            e.preventDefault();
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            /// @s data from Capture Form
            let espece = $('#espece').val();
            let produit = $('#produit').val();
            let zoneCapture = $('#zoneCapture').val();
            let qteBord = $('#qteBord').val();
            let qteDebarque = $('#qteDebarque').val();
            
            /// @e data from Capture Form



            var donnees = {

                /// @s data from capture Form
                espece: espece,
                produit: produit,
                zoneCapture: zoneCapture,
                qteBord: qteBord,
                qteDebarque: qteDebarque,
                
                /// @e data from capture Form

            };


            $.ajax({
                url: '{{route("home.demandes.capture.index")}}',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: donnees,
                success: function (response) {
                   console.log(response.testCapture);
                   $("#iciAddRetourAcptureOk").append(response.testCapture);
                   //$('#espece').val("");
                   //$('#produit').val("select");
                   //$('#zoneCapture').val("");
                   $('#qteBord').val("");
                   $('#qteDebarque').val("");
                  
                    //// construire le formr qui recevra 














                   toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        })

        

    })




// {{-- @e send capture section to the controller throw ajax query --}}
// {{-- --------------------------------------------------------------------------- --}}





//{{-- --------------------------------------------------------------------------- --------------}}
//{{-- faire dispaaraitre les element de la page sur le step 2  afin d'afficher un spinner  --}}
//{{-- --------------------------------------------------------------------------- --------------}}

/// ici je vais afficher le spinner dans le bouton de validation qui pointera vers la page step-2 de la demande 

function showSpinnerLoadingToGoOnStep3(){

                    $("#content-step2").css({
                        "display":"none",
                    })   
                    
                    
                    $("#text-content-loading-step2").css({
                            "display":"block",
                    }) 

                    setTimeout(function () {
                         submitFormCapture();
                    }, 200); 

}


/// la fonction qui lancera le formulaire
function submitFormCapture(){
               
                // soummettre le formulaire de vente 
                var form = $('#FormStep2');

                // Soumettez le formulaire
                form.submit();

}
</script>