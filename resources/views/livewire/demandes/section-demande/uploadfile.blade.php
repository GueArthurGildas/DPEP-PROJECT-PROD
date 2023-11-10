{{-- <div class="circle-line justify-content-center ">
   <div class="circle">1</div>
   <div class="line"></div>
   <div class="circle">2</div>
   <div class="line"></div>
   <div class="circle">3</div>
   <div class="line"></div>
   <div class="circle">4</div>
   <div class="line"></div>
   <div class="circle"><i class=" fas fa-solid fa-check"></i></div>
</div>
<br>
<hr> --}}
<div class="example-alert">
   <div class="alert alert-warning alert-icon">
      <em class="icon ni ni-alert-circle"></em> Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.
   </div>
</div>
<br>
<div class="nk-kycfm-head bg-white">
   <div class="nk-kycfm-title">
      <h3 class="title"> Télécharger vos documents  <i class="bi bi-paperclip"></i></h3>
      <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
      <span class="text-danger"> Taille Limite des fichiers à télécharger (4mb)</span>
   </div>
</div>
<br>

<br>
<!-- nk-kycfm-head -->
<div class="nk-kycfm-head bg-white">
   <div class="nk-kycfm-title">
      <h4 class="title">Les Autorisations de pêches </h4>
      <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez </p>
   </div>
</div>
<!-- Example of a form that Dropzone can take over -->
<form id="formUploadAutoPeche" >
  <div class="form-group">
    <label class="form-label" for="customFileLabel"></label>
    <div class="form-control-wrap">
        <div class="form-file">
            <input type="file" class="form-file-input" id="customFile">
            <label class="form-file-label" for="customFile">Choose file</label>
        </div>
    </div>
   
   <button type="submit" class="" id="tesButton"  style="background*color:orange">Suivant </button>

</div>
</form>
<br>
<!-- nk-kycfm-head -->

<form id="monFormulaire" action="{{ route('home.demandes.upload.index') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="fichier">
    <button type="submit">Envoyer</button>
</form>

<hr>
<div class="nk-kycfm-head bg-white">
   <div class="nk-kycfm-title">
      <h4 class="title">Les Autorisations de transbordements  </h4>
      <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
   </div>
</div>
<!-- nk-kycfm-head -->
<div class="upload-zone" data-max-file-size="4">
   <div class="dz-message" data-dz-message>
      <span class="dz-message-text">Drag and drop file</span>
      <span class="dz-message-or">or</span>
      <button class="btn btn-primary">SELECT</button>
   </div>
</div>