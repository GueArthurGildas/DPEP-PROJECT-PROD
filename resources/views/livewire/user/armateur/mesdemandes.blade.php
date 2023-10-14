
<div>
   <div class="nk-block">
      <div class="row g-gs">
         <div class="col-lg-4 col-xl-4 col-xxl-3 ">
            <div class="card card-bordered">
               <div class="card-inner-group">
                  <div class="card-inner">
                     <div class="user-card user-card-s2">
                        <div class="user-avatar lg bg-primary">
                           <img src="./images/avatar/b-sm.jpg" alt="">
                        </div>
                        <div class="user-info">
                           <div class="badge bg-light rounded-pill ucap">Platinam</div>
                           <h5>{{Auth()->user()->name}}</h5>
                           <span class="sub-text">{{Auth()->user()->email}}</span>
                        </div>
                     </div>
                  </div>
                  <div class="card-inner card-inner-sm">
                     <ul class="btn-toolbar justify-center gx-1">
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                     </ul>
                  </div>
                  <div class="card-inner">
                     <div class="row text-center">
                        <div class="col-4">
                           <div class="profile-stats">
                              <span class="amount">23</span>
                              <span class="sub-text">Total Order</span>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="profile-stats">
                              <span class="amount">20</span>
                              <span class="sub-text">Complete</span>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="profile-stats">
                              <span class="amount">3</span>
                              <span class="sub-text">Progress</span>
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
         <div class="col-lg-8 col-xl-8 col-xxl-9">
            <div class="nk-block">
               {{-- <div class="nk-block-head nk-block-head-lg wide-sm">
                  <div class="nk-block-head-content">
                     <div class="nk-block-head-sub"><a class="back-to" href="{{route('home')}}"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
                     <h2 class="nk-block-title fw-normal">Mes Demandes</h2>
                  </div>
               </div> --}}
                <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-head-sub"><span></span></div>
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Bienvenue,  {{Auth()->user()->name}}</h2>
                                                <div class="nk-block-des">
                                                    <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools gx-3">
                                                    <li class="order-md-last"><a href="{{route("home.demandes.newdemande.index")}}" class="btn btn-white btn-dim btn-outline-primary"><span>Nouvelle Demande</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
               <!-- nk-block-head -->
               <div class="card card-bordered card-stretch">
                  @for ($i = 1; $i <= 4; $i++)
                  <div class="card card-bordered sp-plan m-3">
                     <div class="row no-gutters">
                        <div class="col-md-8">
                           <div class="sp-plan-info card-inner">
                              <div class="row gx-0 gy-3">
                                 <div class="col-xl-6 col-sm-7">
                                    <div class="sp-plan-name">
                                       <h5 class="title">DPEP-AYX-014 </a></h5>
                                       <p>Subscription ID: <span class="text-base">100394949</span></p>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-sm-5">
                                                   <div class="card-inner card-inner-sm">
                     <ul class="btn-toolbar justify-center gx-1">
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                        <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                     </ul>
                  </div>
                                 </div>
                              </div>
                           </div>
                           <!-- .sp-plan-info -->
                           {{-- <div class="sp-plan-desc card-inner">
                              <ul class="row gx-1">
                                 <li class="col-6 col-lg-3">
                                    <p><span class="text-soft">Started On</span> Oct 12, 2018</p>
                                 </li>
                                 <li class="col-6 col-lg-3">
                                    <p><span class="text-soft">Recuring</span> Yes</p>
                                 </li>
                                 <li class="col-6 col-lg-3">
                                    <p><span class="text-soft">Price</span> $599.00</p>
                                 </li>
                                 <li class="col-6 col-lg-3">
                                    <p><span class="text-soft">Access</span> Unlimited</p>
                                 </li>
                              </ul>
                           </div> --}}
                           <!-- .sp-plan-desc -->
                        </div>
                        <!-- .col -->
                        <div class="col-md-4">
                           <div class="sp-plan-action card-inner">
                              <div class="sp-plan-btn" >
                                 <a class="btn btn-success" data-bs-toggle="modal" href="#subscription-change"><span>Change Plan</span></a>
                              </div>
                              {{-- <div class="sp-plan-note text-md-center">
                                 <p>Next Billing on <span>Oct 11, 2020</span></p>
                              </div> --}}
                           </div>
                        </div>
                        <!-- .col -->
                     </div>
                     <!-- .row -->
                  </div>
                  <!-- .sp-plan -->  
                  @endfor
               </div>
               <!-- .card -->
            </div>
         </div>
         <!-- .col -->
      </div>
      <!-- .row -->
   </div>
   <!-- .nk-block -->
</div>