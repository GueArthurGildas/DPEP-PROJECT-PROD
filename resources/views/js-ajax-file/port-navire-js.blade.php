<script>
$(document).ready(function () {


    $('#nextFormButton').click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            /// @s data from navire Form
            let nomNavire = $('#nomNavire').val();
            let etatPavillonNavire = $('#etatPavillonNavire').val();
            let typeNavire = $('#typeNavire').val();
            let certifNavire = $('#certifNavire').val();
            let tiranNavire = $('#tiranNavire').val();
            let longNavire = $('#longNavire').val();
            let largNavire = $('#largNavire').val();
            let immaCertifNavire = $('#immaCertifNavire').val();
            let omi = $('#omi').val();
            let orgp = $('#orgp').val();
            let contactNavireForInfo = $('#contactNavireForInfo').val();
            let proprioNavire = $('#proprioNavire').val();
            let captaineName = $('#captaineName').val();
            let captaineNationality = $('#captaineNationality').val();
            /// @e data from navire Form

            /// @s data from demande(la page Port)  Form
            let objetAccesPort = $('#objetAccesPort').val();
            let minuteArriveEstim = $('#minuteArriveEstim').val();
            let heureArriveEstim = $('#heureArriveEstim').val();
            let dateArriveEstim = $('#dateArriveEstim').val();
            let accueilPort = $('#accueilPort').val();
            let dateLastEscale = $('#dateLastEscale').val();
            let objetPortEntre = $('#objetPortEntre').val();
            let pays = $('#pays').val();
            let demandeId = $('#demandeId').text();
            /// @s data from demande(la page Port)  Form



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
                contactNavireForInfo: contactNavireForInfo,
                proprioNavire: proprioNavire,
                captaineName: captaineName,
                captaineNationality: captaineNationality,
                /// @e data from navire Form

                /// @s data from demande(la page Port)  Form
                objetAccesPort: objetAccesPort,
                minuteArriveEstim: minuteArriveEstim,
                heureArriveEstim: heureArriveEstim,
                dateArriveEstim: dateArriveEstim,
                accueilPort: accueilPort,
                dateLastEscale: dateLastEscale,
                objetPortEntre: objetPortEntre,
                pays: pays,
                demandeId:demandeId,
                /// @e data from demande(la page Port) Form

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

        })

})


</script>