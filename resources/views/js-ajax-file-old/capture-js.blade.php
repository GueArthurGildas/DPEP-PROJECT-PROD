{{-- --------------------------------------------------------------------------- --}}
{{-- @s send capture section to the controller throw ajax query --}}

<script>

        //// ici la fonction qui supprime la capture depuis la base deonnées
        function myDelete(element) {
            // Récupérer l'élément parent de l'élément cliqué
            var parentTr = $(element).closest('tr');

            // Récupérer l'ID de l'élément parent
            //var captureId = parentTr.find('.text-white').text();
            var captureId = $(element).closest('a').attr("data-id");
            console.log(captureId);


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
                   parentTr.html('');
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
            let demandeId = $('#demandeId').text();
            /// @e data from Capture Form



            var donnees = {

                /// @s data from capture Form
                espece: espece,
                produit: produit,
                zoneCapture: zoneCapture,
                qteBord: qteBord,
                qteDebarque: qteDebarque,
                demandeId: demandeId
                /// @e data from capture Form

            };


            $.ajax({
                url: '{{route("home.demandes.capture.index")}}',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: donnees,
                success: function (response) {
                   console.log(response.testCapture);
                   $("#iciAddRetourAcptureOk").append(response.testCapture);
                   $('#espece').val("");
                   $('#produit').val("");
                   $('#zoneCapture').val("");
                   $('#qteBord').val("");
                   $('#qteDebarque').val("");
                   $('#demandeId').val("");
                   toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        })

        

    })



</script>
{{-- @e send capture section to the controller throw ajax query --}}
{{-- --------------------------------------------------------------------------- --}}