
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
