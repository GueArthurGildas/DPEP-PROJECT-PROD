{{-- --------------------------------------------------------------------------- --}}
{{-- @s send peche section to the controller throw ajax query --}}

<script>

        //// ici la fonction qui supprime la peche depuis la base deonnées
        function myDeleteAutoPeche(element) {
           
            // Récupérer l'élément parent de l'élément cliqué
            var parentTr = $(element).closest('tr');

            // Récupérer l'ID de l'élément parent
            var pecheId = parentTr.find('.text-white').text();

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
                   parentTr.html('');
                   console.log(response);          
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        }


$(document).ready(function () {

    // Ici on envoie la peche dans la bd pour être sauvegarder
    $('#btnAddAutoPecheToCollection').click(function(e) {

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
            let demandeId = $('#demandeId').text();
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
                demandeId: demandeId,
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
                   $('#especeForPeche').val("");
                   $('#engin').val("");
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
{{-- @e send peche section to the controller throw ajax query --}}
{{-- --------------------------------------------------------------------------- --}}