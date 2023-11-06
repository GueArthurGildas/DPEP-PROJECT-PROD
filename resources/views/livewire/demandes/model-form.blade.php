@extends("layouts.master")
@section("content")
<div >
   <div class="nk-block pl-5 pr-5" ></div>
   <div class=""><a class="back-to text-danger" href="{{route('home')}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
   <div class="nk-block-head-sub"><span></span></div>
   <div class="nk-block-between-md g-4">
      <div class="nk-block-head-content">
         <h2 class="nk-block-title fw-normal">Formulaire DPEP, 👋</h2>
         <div class="nk-block-des">
            <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
         </div>
      </div>
      <div class="nk-block-head-content">
         <li class="order-md-last"><a href="{{route("home.demandes.newdemande.index")}}" class="btn btn-white btn-dim btn-outline-dark"><span>Etape de soummission</span></a></li>
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
<div class="row g-gs" >
   <form class="nk-stepper stepper-init is-alter p-4 m-4" action="#" id="stepper-survey-v2" style="background*color:orange">
      <div class="nk-stepper-content ">
         <div class="nk-stepper-steps stepper-steps">
            
             <div class="nk-stepper-step " >
               <div  class="nk-stepper-step-" id="testClassToRemove">
                  @include("livewire.demandes.section-demande.uploadfile")
               </div>
               </div>

            <div class="nk-stepper-step">
               @include("livewire.demandes.section-demande.port")
            </div>
            <div class="nk-stepper-step">
               @include("livewire.demandes.section-demande.navire")
            </div>
            <div class="nk-stepper-step">
               @include("livewire.demandes.section-demande.capture")
            </div>
            <div class="nk-stepper-step" id="existantDiv">
               @include("livewire.demandes.section-demande.peche-auto")
            </div>
            {{-- 
            <div class="nk-stepper-step" id="existantDiv">
               @include("livewire.demandes.section-demande.transb")
            </div>
            --}}
            
           
            
           
         </div>
         <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
            <li class="step-prev"><button class="btn btn-dim "  style="background*color:orange">Retour</button></li>
            <li class="step-next loading-svg">
               <button class="btn btn-danger" id="nextFormButton"  style="background*color:orange">Suivant <em class="icon ni ni-arrow-long-right"></em></button>
            </li>
            <li class="step-submit"><button class="btn btn-danger">Soumettre</button></li>
         </ul>
      </div>
      <div class="nk-stepper-progress stepper-progress mb-4 ">
         <div class="stepper-progress-count mb-2 text-light">de {{$idDemadne}}</div>
         <div class="progress progress-md bg-light" >
            <div class="progress-bar stepper-progress-bar bg-danger" ></div>
         </div>
      </div>
   </form>
</div>
</div>
<!-- .row -->
</div>
@endsection