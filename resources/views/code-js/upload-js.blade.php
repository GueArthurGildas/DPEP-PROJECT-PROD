
<script>
 //// ici la fonction qui supprime la capture depuis la base deonnées
        function myDeleteUplodSection(element) {
            
            // Récupérer l'élément parent de l'élément cliqué
            var parentTr = $(element).closest('.example-alert');
            console.log( parentTr)
            parentTr.remove();
        }

        function addUploadFileSection(){
           // alert("je suis le meilleur en informatique");
            $("#sectionContainUploadFile").append(

                '<div class="example-alert mb-2">'+
                    '<div class="alert alert-light alert-icon">'+
                    '<a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer">[X]</a>'+
                    '<em class="icon ni ni-upload text-danger"></em> </em>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.'+
                    '<div class="form-group">'+
                        '<label class="form-label" for="customFileLabel">Default File Upload</label>'+
                        '<div class="form-control-wrap">'+
                            '<div class="form-file">'+
                                '<input type="file" class="form-file-input" id="customFile">'+
                                '<label class="form-file-label" for="customFile">Choose file</label>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                   '</div>'+
                '</div>'
            );
        }

</script>