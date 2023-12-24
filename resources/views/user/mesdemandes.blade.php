{{-- <div class="js-preloader">
   <div class="loading-animation tri-ring"></div>
</div> --}}
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <p></p>
            <div class="nk-block">
               <div class="row g-gs">
                  <div class="col-lg-4 col-xl-4 col-xxl-3 ">
                     <div class="card card-bordered">
                        <div class="card-inner-group">
                           <div class="card-inner ">
                              <div class="user-card user-card-s2">
                                 {{-- 
                                 <div class="user-avatar lg bg-light"></div>
                                 --}}
                                 <img src={{asset("images/icons8-utilisateur-100.png")}} alt="">
                                 <div class="user-info">
                                    {{-- 
                                    <div class="badge bg-light rounded-pill ucap">Platinam</div>
                                    --}}
                                    <h5>{{Auth()->user()->name}} </h5>
                                    <span class="sub-text">{{Auth()->user()->email}}</span>
                                    <p>{{userRole()}}</p>
                                 </div>
                              </div>
                           </div>
                           {{-- 
                           <div class="card-inner card-inner-sm">
                              <ul class="btn-toolbar justify-center gx-1">
                                 <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                 <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                 <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                 <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                              </ul>
                           </div>
                           --}}
                           <div class="card-inner">
                              <div class="row text-center">
                                 <div class="col-6">
                                    <div class="profile-stats">
                                       <span class="amount">23</span>
                                       <span class="sub-text">Total Demande</span>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="profile-stats">
                                       <span class="amount">3</span>
                                       <span class="sub-text text-warning">En cours</span>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <!-- .card-inner -->
                           <div class="card-inner">
                              <h6 class="overline-title mb-2">Short Details</h6>
                              <div class="row g-3">
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">User ID:</span>
                                    <span>UD003054</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Billing Email:</span>
                                    <span>billing@softnio.com</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Billing Address:</span>
                                    <span>551 Swanston Street, Melbourne <br /> Victoria 3053 Australia</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Language:</span>
                                    <span>English, France</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Last Login:</span>
                                    <span>15 Feb, 2019 01:02 PM</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">KYC Status:</span>
                                    <span class="lead-text text-success">Approved</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Register At:</span>
                                    <span>Nov 24, 2019</span>
                                 </div>
                              </div>
                           </div>
                           <!-- .card-inner -->
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-lg-8 col-xl-8 col-xxl-9" id="container-user-demandes" >
                     {{-- 
                     <ul class="justify-end">
                        <li class="text-danger"> <em class="icon ni ni-clock text-danger"></em>  Date  : Dimanche le 12 Novembre 2023 :  00 heure 45 min </li>
                     </ul>
                     --}}
                     <div class="nk-block">
                        {{-- 
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                           <div class="nk-block-head-content">
                              <div class="nk-block-head-sub"><a class="back-to" href="{{route('home')}}"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
                              <h2 class="nk-block-title fw-normal">Mes Demandes</h2>
                           </div>
                        </div>
                        --}}
                        <div class="nk-block-head nk-block-head-lg">
                           <div class="nk-block-head-sub"><span></span></div>
                           <div class="nk-block-between-md g-4">
                              <div class="nk-block-head-content">
                                 <h2 class="nk-block-title fw-normal">Bienvenue,</h2>
                                 <h2 class="nk-block-title fw-normal"> {{Auth()->user()->name}} ! 👋</h2>
                                 <div class="nk-block-des">
                                    <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                 </div>
                              </div>
                              <div class="nk-block-head-content">
                                 <ul class="nk-block-tools gx-3">
                                    <li class="order-md-last"><a href="{{route("home.demandes.presentdemande.index")}}" class="btn btn btn-warning  "><span>Nouvelle Demande</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- .nk-block-head -->
                        {{-- <hr class=""> --}}
                        <!-- nk-block-head -->
                      
                           <div id="conaitner-user-demandes" style="display:none" >
                                 @if ($nbDemandeUser == 0)
                                 <div class="card card-bordered card-stretch">
                                    <br><br><br>
                                    <div class="circle-line justify-content-center ">
                                       <div class="circle"> <em class="fas fa-solid fa-envelope-open-text"></em></div>
                                    </div>
                                    <div class="nk-kyc-app p-sm-2 text-center pt-5">
                                       <div class="nk-kyc-app-text mx-auto">
                                          <p class="lead"> Vous n'avez aucune demande pour l'instant ! </p>
                                       </div>
                                       <br>
                                       <div class="text-center pt-4">
                                          <p>Avez-vous des questions ?  Veuillez contacter notre service <a href="mailto:info@softnio.com">info@e-dpep.com</a></p>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="card card-bordered ">
                                    <div class="card-inner">
                                       <div class="between-center flex-wrap flex-md-nowrap g-3">
                                          <div class="media media-center gx-3 wide-xs">
                                             <div class="media-object"><em class="icon icon-circle icon-circle-lg ni ni-facebook-f"></em></div>
                                             <div class="media-content">
                                                <p>Vous pouvez également nous suivre sur notre page facebook via ce lien .</p>
                                             </div>
                                          </div>
                                          <div class="nk-block-actions flex-shrink-0"><a href="#" class="btn btn-lg btn-primary">Accedez Maintenant</a></div>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 @else
                                 <div class="card card-bordered card-stretch">
                                    @include("user.liste-demande-user")
                                 </div>
                                 <!-- .card -->
                                 @endif
                           
                           </div>

                          
                           
                           <div id="conaitner-preload-demande">
                              @for ($i=0;$i<3;$i++)
                                 @include("user.preloader-les-dmandes-user")
                              @endfor
                           </div>
                         
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>

@include("user.js-accueil-user-page")