@extends("layouts.master")

@section("content")



{{-- 
<div class="js-preloader">
   <div class="loading-animation tri-ring">
   </div>
</div>
--}}
<div class="nk-content-inner m-2 ">
   <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
         <div class="nk-block-between">
            {{-- 
            <div class="nk-block-head-content">
               <h3 class="nk-block-title page-title">Formulaire</h3>
               <div class="nk-block-des text-soft">
                  <p>Input new Patient information carefully.</p>
               </div>
            </div>
            <!-- .nk-block-head-content --> --}}
            {{-- --------- ICi l'entête que j'avais mis, mais enlever pour d'autres raisons ------- --}}
            {{-- 
            <div class="nk-block-head nk-block-head-lg wide-sm m-auto text-center">
               <div class="nk-block-head-content">
                  <h2 class="nk-block-title fw-normal">How can we help?</h2>
                  <div class="nk-block-des">
                     <p>You can find all of the questions and answers abour secure your account</p>
                  </div>
               </div>
            </div>
            --}}

         <!-- .nk-block-between -->
      </div>
      <!-- .nk-block-head -->
      <div class="nk-block">
         <div class="card card-bordered p-5">
                                       {{-- <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p> --}}
         
            <div class="card-inner-group ">
                     <div class="nk-block-head nk-block-head-lg wide-sm">
                  
                  <div class="nk-block-head-content">

                     {{-- <div class="nk-block-head-sub"><a class="back-to" href="{{route('home')}}"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
                     <h2 class="nk-block-title fw-normal">Mes Demandes</h2> --}}
                  </div>
               </div>
            <!-- .nk-block-head -->
         </div>
               <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v2">
                  <div class="nk-stepper-content">
                     <div class="nk-stepper-progress stepper-progress mb-4">
                        <div class="stepper-progress-count mb-2 text-white">de</div>
                        <div class="progress progress-md">
                           <div class="progress-bar stepper-progress-bar"></div>
                        </div>
                     </div>
                     <div class="nk-stepper-steps stepper-steps">
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              {{-- 
                              <h5 class="title">What are you looking for ?</h5>
                              <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                              --}}
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">1/5 -  Info Relative au Navire</h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       {{-- <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p> --}}
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <ul class="row g-3">
                              @include("livewire.demandes.section-demande.navire")
                           </ul>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">2/5 -  Info Relative au Port</h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row g-4">
                              @include("livewire.demandes.section-demande.port")
                           </div>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">3/5 -  Info Relative aux captures </h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row g-4">
                              @include("livewire.demandes.section-demande.capture")
                           </div>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">4/5 -  Info Relative aux autorisation de pêche</h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row g-3">
                              @include("livewire.demandes.section-demande.peche-auto")
                           </div>
                        </div>

                        {{-- @if () --}}
                           <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">5/5 -  Info Relative aux autorisation de pêche</h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row g-3">
                              @include("livewire.demandes.section-demande.peche-auto")
                           </div>
                        </div>
                        {{-- @endif --}}

                        

                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal"> Telechagement des dossiers</h2>
                                    <div class="nk-block-des">
                                       <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                       <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                    </div>
                                 </div>
                                 <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                       <li>
                                          <div class="dropdown">
                                             <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                             <em class="icon ni ni-setting-alt-fill"></em>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                   <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#"><span>Vider les champs</span></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="row g-3">
                              @include("livewire.demandes.section-demande.peche-auto")
                           </div>
                        </div>

                     </div>
                     <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                        <li class="step-prev"><button class="btn btn-dim btn-primary">Retour</button></li>
                        <li class="step-next"><button class="btn btn-primary">Suivant</button></li>
                        <li class="step-submit"><button class="btn btn-primary">Soumettre</button></li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .nk-block -->
   </div>
</div>
<!-- Modal @s -->
@include("livewire.navire.modal-search-navire")
<!-- Modal @e -->

@endsection