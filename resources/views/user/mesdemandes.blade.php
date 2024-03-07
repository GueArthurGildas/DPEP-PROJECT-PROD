{{-- 
<div class="js-preloader">
   <div class="loading-animation tri-ring"></div>
</div>
--}}
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-lg">
               <div class="nk-block-head-sub"><span></span></div>
               <div class="nk-block-between-md g-4">
                  <div class="nk-block-head-content">
                     {{-- 👋 --}}
                     <h1 class="nk-block-title fw-normal">Bienvenue, {{Auth()->user()->name}} ! </h1>
                     <div class="nk-block-des">
                        <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                     </div>
                  </div>
                  <div class="nk-block-head-content">
                     <ul class="nk-block-tools gx-3">
                        <li class="order-md-last"><a href="{{route("home.demandes.presentdemande.index")}}" class="btn btn-l btn-white btn-dim btn-outline-dark" ><span>Nouvelle demande</span>  <em class="icon ni ni-signout"></em></a></li>
                        {{-- 
                        <li class="order-md-last"><a href="{{route("home.demandes.presentdemande.index")}}" class="btn btn-secondary" style="background-color:#066C02"><span>Nouvelle Demande</span></a></li>
                        --}}
                     </ul>
                  </div>
               </div>
            </div>
            <p></p>
            <div class="nk-block">
               <div class="row g-gs">
                  <div class="col-lg-4 col-xl-4 col-xxl-3 ">
                     <div class="card card-bordered">
                        <div class="card-inner-group">
                           {{-- 
                           <div class="card-inner ">
                              <div class="user-card user-card-s2">
                                 <div class="user-avatar lg bg-light"></div>
                                 <img src={{asset("images/icons8-utilisateur-100.png")}} alt="">
                                 <div class="user-info">
                                    <div class="badge bg-light rounded-pill ucap">Platinam</div>
                                    <h5>{{Auth()->user()->name}} </h5>
                                    <span class="sub-text">{{Auth()->user()->email}}</span>
                                    <p>{{userRole()}}</p>
                                 </div>
                              </div>
                           </div>
                           --}}
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
                                    <span class="sub-text">Email Utilisateur:</span>
                                    <span>{{auth()->user()->email}}</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Address:</span>
                                    <span>Côte d'ivoire<br /> Abidjan 01 bp 202</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Langage:</span>
                                    <span>Français, Anglais</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Dernière session:</span>
                                    <span>12 Fev, 2024 01:02 PM</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Entreprise Status:</span>
                                    <span class="lead-text text-success"></span>Confirmer</span>
                                 </div>
                                 <div class="col-sm-6 col-md-4 col-lg-12">
                                    <span class="sub-text">Inscrit le:</span>
                                    <span>{{auth()->user()->created_at}}</span>
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
                     <div class="nk-block ">
                        {{-- 
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                           <div class="nk-block-head-content">
                              <div class="nk-block-head-sub"><a class="back-to" href="{{route('home')}}"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
                              <h2 class="nk-block-title fw-normal">Mes Demandes</h2>
                           </div>
                        </div>
                        --}}
                        <!-- .nk-block-head -->
                        {{-- 
                        <hr class="">
                        --}}
                        <!-- nk-block-head -->
                        <div id="conaitner-user-demandes" style="display:block" >

                           @if ($nbDemandeUser == 0)
                           <div class="card card-bordered card-stretch mt-5 bg-lighter">
                              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                              <div class="circle-line justify-content-center ">
                                 {{-- <div class="circle"> <em class="fas fa-solid fa-envelope-open-text"></em></div> --}}
                                       <div class="letter-image">
                                          <div class="animated-mail">
                                             <div class="back-fold"></div>
                                             <div class="letter">
                                                <div class="letter-border"></div>
                                                <div class="letter-title"></div>
                                                <div class="letter-context"></div>
                                                <div class="letter-context-body">
                                                      <p><strong>Bonjour,<br>Ici le service eDpep</strong><br> Cliquez sur le bouton faire une demande pour commencer</p>
                                                </div>
                                                <div class="letter-stamp">
                                                      <div class="letter-stamp-inner"></div>
                                                </div>
                                             </div>
                                             <div class="top-fold"></div>
                                             <div class="body"></div>
                                             <div class="left-fold"></div>
                                          </div>
                                          <div class="shadow"></div>
                                    </div>
                              </div>

                           </div>
                           <br>
                           {{-- 
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
                           --}}
                           <br>
                           @else
                           <div class="card card-bordered card-stretch">
                                 {{-- <div class="nk-block-head-content justify-end mt-2 p-1">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1 active" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            
                                            <div class="toggle-expand-content expanded" data-content="pageMenu" style="display: block;">
                                                
                                                <div class="nk-block-head-content">
                                                    <ul class="nk-block-tools g-3">
                                                      <li>
                                                         <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Filtre</span> </span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                               <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <ul class="link-list-opt no-bdr">
                                                                     <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                     <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                     <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                  </ul>
                                                               </div>
                                                         </div>
                                                      </li>
                                                      <li><a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-reload"></em></a></li>

                                                      <li>
                                                         <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                               <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <ul class="link-list-opt no-bdr">
                                                                     <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                     <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                     <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                  </ul>
                                                               </div>
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                                <ul class="nk-block-tools g-3">
                                                      <li><a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-reload"></em></a></li>
                                                      <li>
                                                         <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Filtre période</span> </span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                               <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <ul class="link-list-opt no-bdr">
                                                                     <li><a href="#"><span>Last 30 Days</span></a></li>
                                                                     <li><a href="#"><span>Last 6 Months</span></a></li>
                                                                     <li><a href="#"><span>Last 1 Years</span></a></li>
                                                                  </ul>
                                                               </div>
                                                         </div>
                                                      </li>
                                                       <li>
                                                         <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline">Filtre statut</span> </span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                               <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <ul class="link-list-opt no-bdr">
                                                                     <li><a href="#"><span>Accepté</span></a></li>
                                                                     <li><a href="#"><span>Refusé</span></a></li>
                                                                     <li><a href="#"><span>En cours</span></a></li>
                                                                  </ul>
                                                               </div>
                                                         </div>
                                                      </li>


                                                </ul>

                                            </div>
                                    </div>
                                    
                                 </div> --}}

                                 <div class="nk-block-head nk-block-head-sm mt-1 p-2">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content m-2">
                                             <li><a href="#" class="btn btn-icon btn-light "><em class="icon ni ni-reload"></em></a></li>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Receherche par Ref">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Statut</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>En cours</span></a></li>
                                                                        <li><a href="#"><span>Accepté</span></a></li>
                                                                        <li><a href="#"><span>Rejeté</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                         <div class="drodown">
                                                               <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span>Période </span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                               <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <ul class="link-list-opt no-bdr">
                                                                     <li><a href="#"><span>Il y'a 30 Jours </span></a></li>
                                                                     <li><a href="#"><span>Il y'a 6 mois </span></a></li>
                                                                     <li><a href="#"><span></span>Il y'a plus d'un an</a></li>
                                                                  </ul>
                                                               </div>
                                                         </div>
                                                      </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div>
                              @include("user.liste-demande-user")
                              {{$userdemandes->links()}}
                           </div>
                           <!-- .card -->
                           @endif
                        </div>
                        {{-- <div id="conaitner-preload-demande">
                           @for ($i=0;$i<80;$i++)
                              @include("user.preloader-les-dmandes-user")
                           @endfor
                        </div> --}}
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