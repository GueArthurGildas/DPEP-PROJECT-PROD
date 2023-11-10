@extends("layouts.master")
@section("content")

  <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
    
    
    <div class="row">
   <div class="col-6">
      <div class=""><a class="back-to text-danger" href="{{route('home.demandes.autopechedemande.index',['checkhascautopeche'=>1]) }}" ><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
   </div>
   <div class="col-6 justify-end">
      <ul>
         <li><a >Accueil</a> > <a >Etape 1 </a> > <a>Etape 2 </a> > <a>Etape 3</a> > <a  class="text-danger" href="#">Fin</a>  </li>
      </ul>
   </div>
</div><br>

{{-- <div class="nk-block">
                                <div class="nk-news card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-news-list">
                                            <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                    <em class="icon ni ni-card-view"></em>
                                                </div>
                                                <div class="nk-news-text">
                                                    <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                                                    <em class="icon ni ni-external"></em>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><br> --}}
@if ($errors->any())
@foreach ($errors->all() as $error )
<p>pas bon il ya des erreurs</p>
@endforeach
@endif
<hr>
<div class="nk-block-between-md g-4">
   <div class="nk-block-head-content">
      <h2 class="nk-block-title fw-normal">Les Documents justificatifs </h2>
      <div class="nk-block-des">
         <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
      </div>
   </div>
   <div class="nk-block-head-content">
      <div>
         {{-- <a href="#" id="btnAddCaptureToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter </a> --}}
                  {{-- <a href="#" id="Ajouter-navire" class="btn btn-dark m-1"> <em class="icon ni ni-trash-alt"></em> </a> --}}
      </div>
      <li>
         <div id="loading-svg" style=" display: none;" class="pl-5">
            <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
         </div>
      </li>
      </ul>
   </div>
</div>
</div><!-- .nk-block-head -->
<hr>

<div class="row">
   
      <div class="row m-1" id="sectionContainUploadFile">
         <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
         </div>
         <div class="justify-end mb-2">
            <a  href="javascript:void(0);" onclick="addUploadFileSection()" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter un fichier</a>     
         </div>
         <div class="example-alert mb-2">
            <div class="alert alert-light alert-icon">
              <a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer">[X]</a>
               <em class="icon ni ni-upload text-danger"></em>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.
               <div class="form-group">
                  <label class="form-label" for="customFileLabel">Default File Upload</label>
                  <div class="form-control-wrap">
                     <div class="form-file">
                        <input type="file" class="form-file-input" id="customFile">
                        <label class="form-file-label" for="customFile">Choose file</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="example-alert mb-2">
            <div class="alert alert-light alert-icon">
              <a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer">[X]</a>
               <em class="icon ni ni-upload text-danger"></em>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.
               <div class="form-group">
                  <label class="form-label" for="customFileLabel">Default File Upload</label>
                  <div class="form-control-wrap">
                     <div class="form-file">
                        <input type="file" class="form-file-input" id="customFile">
                        <label class="form-file-label" for="customFile">Choose file</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- 
      <div class="row m-1">
         <div class="example-alert">
            <div class="alert alert-light alert-icon">
               <em class="icon ni ni-upload text-danger"></em>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.
            </div>
         </div>
         <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
         </div>
         <div class="justify-end">
            <a href="#" id="btnAddAutoPecheToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter un fichier</a>     
         </div>
      </div>
      <hr>
      <div class="row m-1">
         <div class="example-alert">
            <div class="alert alert-light alert-icon">
               <em class="icon ni ni-upload text-danger"></em>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date <a href="#" class="alert-link">credit card</a> for make deposit.
            </div>
         </div>
         <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
         </div>
         <div class="justify-end">
            <a href="#" id="btnAddAutoPecheToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter un fichier</a>     
         </div>
      </div>
      --}}
   
  
</div>
<br>
<hr style="color:red">
<div class="nk-block-between-md g-4">
   <div class="nk-block-head-content">
   </div>
   <div class="nk-block-head-content">
      <div>
         <li class="order-md-last"><a href="{{route("home.demandes.traitStep4.index")}}" class="btn btn-xl btn-white btn-dim btn-outline-danger"><span>Terminer</span></a></li>
      </div>
      <li>
         <div id="loading-svg" style=" display: none;" class="pl-5">
         </div>
      </li>
      </ul>
   </div>
</div>
    
    
    
                        </div>
                    </div> 
                </div>
    </div>                 





@endsection