<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Invest Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
                <x-main-header/>
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        @yield("content")
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2023 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item dropup">
                                    <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Español</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <span class="language-name">Türkçe</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->

    @include("components.modal-capture-detail")

    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->



    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    <script src="./assets/js/charts/gd-invest.js?ver=3.2.2"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



{{-- ici un script de test @s  --}}
<script>
    $(document).ready(function () {


        $('#test').click(function(e) {

            let testVal = $('#myTestSelect').find(':selected').text();
            alert(testVal);

        })

      /* $('#myTestSelect').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            alert(valueSelected);
        });*/

        $('#testClick').click(function(e) {

            let testVal = $('#objetPortSelect').find(':selected').text();
            //alert(testVal);

           if (testVal==="myTestSelect") {
                   $('#testClassToRemove').removeClass('nk-stepper-step-');
                   //Ajoutez la nouvelle classe (nouvelleClasse).
                   $('#testClassToRemove').addClass('nk-stepper-step');
            } else {
                console.log("ok");
                console.log(testVal);
            }


        })

        $('#myTestSelect').on('select2:select', function (e) {
            var data = e.params.data;
            console.log(data);
            alert(data);
        });

        $( "#myTestSelect" ).on( "change", function() {
            //alert( $( this ).text() );
            var data= $(this).val();
            alert(data);
        });

        $( "#myTestSelect" ).on( "select2:select", function() {
            $( "#myTestSelect" ).trigger( "change" );
        });





        /*$('#myTestSelect').change(function(){
            var data= $(this).val();
            alert(data);
        });*/



        /*$('#myTestSelect').on('change', function (e) {
            var data = e.params.data;
            console.log(data);
            alert(selectVal);
        });*/

    });


</script>
{{-- ici un script de test @e  --}}



{{-- @s test d'envoi de requête ajax vers le serveur   --}}
<script>
    /*$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    setInterval(function (e) {

            //e.preventDefault(); // Empêche la soumission du formulaire par défaut

            // Récupérez les données du champ de saisie
            let objetPortSelect = $('#objetPortSelect').val();
            let testData = "test";

            var newElement = '<div class="nk-stepper-step" >testeme me someh i m happpy you know</div>'

            $.ajax({
                type: "GET",
                url: '',
                dataType: 'json',
                data: { testData:objetPortSelect },
                success: function (result) {

                   // $("#existantDiv").after(newElement);

                    //$('#testClassToRemove').removeClass('nk-stepper-step-');
                    // Ajoutez la nouvelle classe (nouvelleClasse).
                    //$('#testClassToRemove').addClass('nk-stepper-step');
                    //$('#existantDiv').remove();

                   // $("div").remove("#testAutoTransb");

                    console.log(result);

                },
                error: function(error){
                    if(error){
                        console.log("error here");
                    }
                }

            });
        }, 12555)
    });*/
</script>
{{-- @e test d'envoi de requête ajax vers le serveur   --}}
{{-- --------------------------------------------------------------------------- --}}

{{-- --------------------------------------------------------------------------- --}}
{{-- @es send navire and port section to the controller throw ajax query --}}
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

            /// @s data from Port Form
            let objetAccesPort = $('#objetAccesPort').val();
            let minuteArriveEstim = $('#minuteArriveEstim').val();
            let heureArriveEstim = $('#heureArriveEstim').val();
            let dateArriveEstim = $('#dateArriveEstim').val();
            let accueilPort = $('#accueilPort').val();
            let dateLastEscale = $('#dateLastEscale').val();
            let objetPortEntre = $('#objetPortEntre').val();
            let pays = $('#pays').val();

            /// @e data from Port Form


            /// @s data from Capture Form

            let espece = $('#espece').val();
            let produit = $('#produit').val();
            let zoneCapture = $('#zoneCapture').val();
            let qteBord = $('#qteBord').val();
            let qteDebarque = $('#qteDebarque').val();
            /// @e data from Capture Form



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

                /// @s data from Port Form
                objetAccesPort: objetAccesPort,
                minuteArriveEstim: minuteArriveEstim,
                heureArriveEstim: heureArriveEstim,
                dateArriveEstim: dateArriveEstim,
                accueilPort: accueilPort,
                dateLastEscale: dateLastEscale,
                objetPortEntre: objetPortEntre,
                pays: pays,
                /// @e data from Port Form


                /// @s data from capture Form
                espece: espece,
                produit: produit,
                zoneCapture: zoneCapture,
                qteBord: qteBord,
                qteDebarque: qteDebarque
                /// @e data from capture Form

            };


            $.ajax({
                url: '',
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
{{-- @e send navire and port section to the controller throw ajax query --}}
{{-- --------------------------------------------------------------------------- --}}


<script>


        function myDelete(element) {
            // Récupérer l'élément parent de l'élément cliqué
            var parentTr = $(element).closest('tr');

            // Récupérer l'ID de l'élément parent
            var captureId = parentTr.find('.text-white').text();

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


    



</script>


{{-- --------------------------------------------------------------------------- --}}
{{-- @s send capture section to the controller throw ajax query --}}
<script>

$(document).ready(function () {

    // Ici on envoie la capture dans la bd pour être sauvegarder


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






{{-- --------------------------------------------------------------------------- --}}
{{-- @s send peche section to the controller throw ajax query --}}
<script>

$(document).ready(function () {


    $('#btnAddPecheToCollection').click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            /// @s data from Peche Form
                let identificateur = $('#Identificateur').val();
                let devlivrePar = $('#devlivrePar').val();
                let dateEmission = $('#dateEmission').val();
                let dateExpiration = $('#dateExpiration').val();
                let zondPeche = $('#zondPeche').val();
                let especeForPeche = $('#especeForPeche').val();
                let engin = $('#engin').val();

            /// @e data from Peche Form



            var donnees = {

                /// @s data from peche Form
                devlivrePar:devlivrePar,
                Identificateur: identificateur,
                dateEmission: dateEmission,
                dateExpiration: dateExpiration,
                zondPeche: zondPeche,
                especeForPeche: especeForPeche,
                engin: engin
                /// @e data from peche Form

            };


            $.ajax({
                url: '',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: donnees,
                success: function (response) {
                    // Traitement en cas de succès
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


{{-- --------------------------------------------------------------------------- --}}
{{-- @s send auto transbordement section to the controller throw ajax query --}}
<script>

$(document).ready(function () {


    $('#btnAddAutoTransbToCollection').click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            let identAutoTransb = $('#identAutoTransb').val();
            let delivreParAutoTransb = $('#delivre_parAutoTransb').val();
            let dateEmissionAutoTransb = $('#dateEmissionAutoTransb').val();
            let dateExpAutoTransbo = $('#dateExpAutoTransbo').val();

            var data = {

                identAutoTransb: identAutoTransb,
                delivreParAutoTransb: delivreParAutoTransb,
                dateEmissionAutoTransb: dateEmissionAutoTransb,
                dateExpAutoTransbo: dateExpAutoTransbo
            };


            $.ajax({
                url: '',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: data,
                success: function (response) {
                    // Traitement en cas de succès
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        })

})
</script>
{{-- @e send auto transbordement section to the controller throw ajax query --}}
{{-- --------------------------------------------------------------------------- --}}



{{-- --------------------------------------------------------------------------- --}}
{{-- @s send info transbordement section to the controller throw ajax query --}}
<script>

$(document).ready(function () {


    $('#btnAddinfoTransbToCollection').click(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            let dateTransb = $('#dateTransb').val();
            let lieuTransb = $('#lieuTransb').val();
            let nomTransb = $('#nomTransb').val();
            let numIdTransb = $('#numIdTransb').val();
            let especeTransb = $('#especeTransb').val();
            let qteInfoTranb = $('#qteInfoTranb').val();

            let idProduitTransb = $('#idProduitTransb').val();
            let zoneCapture = $('#zoneCaptureInfoTranb').val();

            // Créez un objet contenant ces variables
            let data = {
                dateTransb: dateTransb,
                lieuTransb: lieuTransb,
                nomTransb: nomTransb,
                numIdTransb: numIdTransb,
                especeTransb: especeTransb,
                qteInfoTranb :qteInfoTranb,
                idProduitTransb: idProduitTransb,
                zoneCapture: zoneCapture
            };


            $.ajax({
                url: '',
                type: 'GET', // ou 'GET' selon le type de requête que vous souhaitez
                data: data,
                success: function (response) {
                    // Traitement en cas de succès
                },
                error: function (error) {
                    // Gestion des erreurs
                }
            });

        })

})
</script>
{{-- @e send info transbordement section to the controller throw ajax query --}}
{{-- --------------------------------------------------------------------------- --}}

</body>

</html>