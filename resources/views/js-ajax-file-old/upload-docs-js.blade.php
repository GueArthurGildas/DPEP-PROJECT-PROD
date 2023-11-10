
<script>

    

    $('#tesButton').click(function (e) {
        alert("je suis ici");
        e.preventDefault();
        
       
           
            var formDate = new FormData(this);

            $ajax({
                Type:"get",
                url: "{{route('home.demandes.upload.index')}}",
                data:formData,
                contentType:false,
                processData: false,
                success: function(data){

                },
                error:function(){

                }
            })

    });



$(document).ready(function () {
     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
    $('#monFormulaire').submit(function (e) {
        e.preventDefault(); // Empêche la soumission normale du formulaire

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Gérez la réponse du contrôleur Laravel ici
                console.log(response);
            },
            error: function (error) {
                // Gérez les erreurs ici
                console.log(error);
            }
        });
    });
});


    
</script>