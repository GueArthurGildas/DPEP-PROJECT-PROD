@extends("layouts.master")
@section("content")
<div >
   <div class="nk-block">
      <div class="row g-gs">
         <div class="col-lg-3 col-xl-3 col-xxl-3 ">
            <div class="card card-bordered m-4">
               <div class="card-inner-group">
                  <ul class="link-list-opt no-bdr">
                     <li><a href="#"><em class="icon ni ni-setting"></em><span>Navire </span></a></li>
                     <li><a href="#"><em class="icon ni ni-notify"></em><span>Port d'Accueil</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Captures</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation de pêche</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation transbodement</span></a></li>
                  </ul>
               </div>
            </div>
            <div class="card card-bordered m-4">
               <div class="card-inner-group">
                  <ul class="link-list-opt no-bdr">
                     <li><a href="#"><em class="icon ni ni-setting"></em><span>Navire </span></a></li>
                     <li><a href="#"><em class="icon ni ni-notify"></em><span>Port d'Accueil</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Captures</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation de pêche</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation transbodement</span></a></li>
                  </ul>
               </div>
            </div>
            <div class="card card-bordered m-4">
               <div class="card-inner-group">
                  <ul class="link-list-opt no-bdr">
                     <li><a href="#"><em class="icon ni ni-setting"></em><span>Navire </span></a></li>
                     <li><a href="#"><em class="icon ni ni-notify"></em><span>Port d'Accueil</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Captures</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation de pêche</span></a></li>
                     <li><a href="#"><em class="icon ni ni-activity-alt"></em><span>Autorisation transbodement</span></a></li>
                  </ul>
               </div>
            </div>
            
         </div>
         <!-- .col -->
         <div class="col-lg-9 col-xl-9 col-xxl-9" style="display:none;">
            
            <div class="nk-block">
            
               <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v2" style="background*color:orange">
                  <div class="nk-stepper-content ">
                     <div class="nk-stepper-progress stepper-progress mb-4 ">
                        <div class="stepper-progress-count mb-2 text-white">de {{$idDemadne}}</div>
                        <div class="progress progress-md" >
                           <div class="progress-bar stepper-progress-bar" ></div>
                        </div>
                     </div>
                     <div class="nk-stepper-steps stepper-steps">
                        <div class="nk-stepper-step">
                           @include("livewire.demandes.section-demande.navire")
                        </div>
                        <div class="nk-stepper-step">
                           @include("livewire.demandes.section-demande.port")
                        </div>
                        <div class="nk-stepper-step">
                           @include("livewire.demandes.section-demande.capture")
                        </div>
                        <div class="nk-stepper-step" id="existantDiv">
                           @include("livewire.demandes.section-demande.peche-auto")
                        </div>
                        <div class="nk-stepper-step" >
                           @include("livewire.demandes.section-demande.transb")
                        </div>

                        <div class="nk-stepper-step " >
                           <div  class="nk-stepper-step-" id="testClassToRemove">
                              @include("livewire.demandes.section-demande.uploadfile")
                           </div>
                        </div>
                     </div>
                     <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">

                        <li class="step-prev"><button class="btn btn-dim btn-primary">Retour</button></li>
                        <li class="step-next"><button class="btn btn-primary" id="nextFormButton">Suivant <em class="icon ni ni-arrow-long-right"></em></button></li>
                        <li class="step-submit"><button class="btn btn-primary">Soumettre</button></li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
         <!-- .col -->

         <div class="col-lg-9 col-xl-9 col-xxl-9" >
                        
            
                     @include("livewire.demandes.selectnavire")
            
         </div>
      </div>
      <!-- .row -->
   </div>
   <!-- .nk-block -->
</div>
@endsection