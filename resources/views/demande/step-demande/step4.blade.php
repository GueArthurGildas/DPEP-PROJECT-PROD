@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg" id="content-step4">

   <div class="nk-block-between-md g-4">
                  <div class="nk-block-head-content">
                     <h2 class="nk-block-title fw-normal">Les Documents justificatifs</h2>
                     <div class="nk-block-des">
                        <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                     </div>
                  </div>
                  <div class="nk-block-head-content">
                     <div>
                        <ul class="nk-block-tools g-3">
                           <li> 
                               <h5><a href="{{route('home.demandes.autopechedemande.index',['checkhascautopeche'=>1]) }}" class=" text-dark btn-outline-dark  "><em class="icon ni ni-arrow-left text-danger"></em><span>Retour</span></a></h5>
                           </li>
                           {{-- <li> 
                              <a href="{{route('home.demandes.autopechedemande.index',['checkhascautopeche'=>1]) }}" class="btn text-white btn-outline-dark bg-dark "><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                           </li>
                           <li> 
                              <a href="" class="btn btn-dark" style="background-color:#066C02"><em class="icon ni ni-home"></em><span>Mes demandes</span></a>
                           </li> --}}
                        </ul>
                       
                     </div>
                     <li>
                        {{-- 
                        <div id="loading-svg" style=" display: none;" class="pl-5">
                           <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                        </div>
                        --}}
                     </li>
                     </ul>
                  </div>
               </div>
                                    <!-- .nk-block-head -->
                     <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                           <div class="number-square style" style="background-color:green">
                              
                           </div>
                        </div>
                     </div>
               <hr>
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">
            <div class="nk-content-inner">
               <div class="nk-content-body">
                  
                 
                  
                  @if ($errors->any())
                  @foreach ($errors->all() as $error )
                  <p>pas bon il ya des erreurs</p>
                  @endforeach
                  @endif
                 
                  <div class="nk-block-between-md g-4">
                     
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
               </div>
               <!-- .nk-block-head -->
              
               <div class="row">
                  <div class="row m-1" id="sectionContainUploadFile">
                    
                     {{-- <div class="justify-end mb-2">
                        <a  href="javascript:void(0);" onclick="addUploadFileSection()" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter un fichier</a>     
                     </div> --}}
                     <div class="example-alert mb-2">
                        <div class="alert alert-light alert-icon">
                           <a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer"></a>
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
                           <a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer"></a>
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
                           <a href="javascript:void(0);" onclick="myDeleteUplodSection(this)" class="text-danger justify-end" title="supprimer"></a>
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
                  
               </div>
               <br>
               <hr>
               <div class="nk-block-between-md g-4">
                  <div class="nk-block-head-content">
                  </div>
                  <div class="nk-block-head-content">
                     <div>
                        <li class="order-md-last">
                           {{-- <a href="{{route("home.demandes.traitStep4.index")}}" class="btn btn-l btn-white btn-dim btn-outline-dark"><span>Terminer</span></a> --}}
                           <a href="javascript:void(0);" class="btn btn-l btn-white btn-dim btn-outline-dark" onclick="showSpinnerLoadingToGoToRecap()"><span>Terminer</span><em class="icon ni ni-arrow-right"></em></a>
                           <form id="FormStep4" action="{{route("home.demandes.traitStep4.index")}}" method="GET" class="d-none">
                           </form>
                        </li>
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
      <div class="justify-center"  >
         <div id="text-content-loading-step4" style="display:none;">
            <h3 class="mt-5" id="preparation-text" >suivant ...</h3>
            <div></div>
            <div class="spinner-border justify-center"  style="width: 5rem; height: 5rem" role="status"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </div>
</div>
@endsection