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
            <div class="card card-bordered">
               <div class="card-inner">
                  <div class="nk-block">

                  </div>
                  <div class="nk-block">
                     <h6 class="lead-text mb-3">Demande Recente </h6>
                     <div class="nk-tb-list nk-tb-ulist is-compact border round-xl">
                        <div class="nk-tb-item nk-tb-head">
                           <div class="nk-tb-col">
                              <span class="sub-text">Order ID</span>
                           </div>
                           <div class="nk-tb-col tb-col-sm">
                              <span class="sub-text">Product Name</span>
                           </div>
                           <div class="nk-tb-col tb-col-xxl">
                              <span class="sub-text">Total Price</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="sub-text">Status</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="sub-text">Delivery</span>
                           </div>
                        </div>
                        <div class="nk-tb-item">
                           <div class="nk-tb-col">
                              <a href="#"><span class="fw-bold">#4947</span></a>
                           </div>
                           <div class="nk-tb-col tb-col-sm">
                              <span class="tb-product">
                              <img src="./images/product/c.png" alt="" class="thumb">
                              <span class="title">Black Mi Band Smartwatch</span>
                              </span>
                           </div>
                           <div class="nk-tb-col tb-col-xxl">
                              <span class="amount">$ 89.49</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="lead-text text-warning">Shipped</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="sub-text">In 2 days</span>
                           </div>
                        </div>
                        <div class="nk-tb-item">
                           <div class="nk-tb-col">
                              <a href="#"><span class="fw-bold">#4948</span></a>
                           </div>
                           <div class="nk-tb-col tb-col-sm">
                              <span class="tb-product">
                              <img src="./images/product/b.png" alt="" class="thumb">
                              <span class="title">Purple Smartwatch</span>
                              </span>
                           </div>
                           <div class="nk-tb-col tb-col-xxl">
                              <span class="amount">$299.49</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="lead-text text-success">Delivered</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="sub-text">12 Dec, 2020</span>
                           </div>
                        </div>
                        <div class="nk-tb-item">
                           <div class="nk-tb-col">
                              <a href="#"><span class="fw-bold">#4949</span></a>
                           </div>
                           <div class="nk-tb-col tb-col-sm">
                              <span class="tb-product">
                              <img src="./images/product/a.png" alt="" class="thumb">
                              <span class="title">Pink Fitness Tracker</span>
                              </span>
                           </div>
                           <div class="nk-tb-col tb-col-xxl">
                              <span class="amount">$99.49</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="lead-text text-danger">Canceled</span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="sub-text">Never</span>
                           </div>
                        </div>
                        <div class="nk-tb-item">
                           <div class="nk-tb-col">
                              <a href="#">
                                 <span class="fw-bold">
                                    <li class="cc-pay-btn">
                              <a href="{{route("home.demandes.mesdemande.index")}}" class="btn btn-primary"><span>Voir plus</span> <em class="icon ni ni-arrow-long-right"></em></a>
                              </li>
                              </span></a>
                           </div>
                           <div class="nk-tb-col tb-col-sm">
                              <span class="tb-product">
                              <img src="./images/product/a.png" alt="" class="thumb">
                              <span class="title"></span>
                              </span>
                           </div>
                           <div class="nk-tb-col tb-col-xxl">
                              <span class="amount"></span>
                           </div>
                           <div class="nk-tb-col">
                              <span class="lead-text text-danger"></span>
                           </div>
                           <div class="nk-tb-col">
                              {{-- 
                              <li class="cc-pay-btn">
                                 <a href="#" class="btn btn-primary"><span>Voir plus</span> <em class="icon ni ni-arrow-long-right"></em></a>
                              </li>
                              --}}
                           </div>
                        </div>
                     </div>
                     <!-- .nk-tb-list -->
                  </div>
                  <div class="nk-block">
                     <div class="row g-gs">
                        <div class="col-md-6">
                           <div class="card card-bordered card-full">
                              <div class="nk-wg1">
                                 <div class="nk-wg1-block">
                                    <div class="nk-wg1-img">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                          <rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                          <circle cx="53" cy="23" r="2" fill="#c4cefe" />
                                          <circle cx="60" cy="23" r="2" fill="#c4cefe" />
                                          <circle cx="67" cy="23" r="2" fill="#c4cefe" />
                                          <rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                       </svg>
                                    </div>
                                    <div class="nk-wg1-text">
                                       <h5 class="title">Personal Info</h5>
                                       <p>See your profile data and manage your Account to choose what is saved in our system.</p>
                                    </div>
                                 </div>
                                 <div class="nk-wg1-action">
                                    <a href="html/subscription/profile.html" class="link"><span>Manage Your Account</span> <em class="icon ni ni-chevron-right"></em></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6">
                           <div class="card card-bordered card-full">
                              <div class="nk-wg1">
                                 <div class="nk-wg1-block">
                                    <div class="nk-wg1-img">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                          <path d="M26,70.78V24.5a7,7,0,0,1,7-7H69a9,9,0,0,1,9,9v49a7,7,0,0,1-7,7H16.55S25.72,78.89,26,70.78Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M7,30.5H26a0,0,0,0,1,0,0V73.9a8.6,8.6,0,0,1-8.6,8.6H13.6A8.6,8.6,0,0,1,5,73.9V32.5a2,2,0,0,1,2-2Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <circle cx="71.5" cy="21" r="13.5" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <rect x="34" y="33.5" width="16" height="8" rx="1" ry="1" fill="#c4cefe" />
                                          <line x1="35" y1="46.5" x2="67" y2="46.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="53.5" x2="67" y2="53.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="59.5" x2="67" y2="59.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="64.5" x2="67" y2="64.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="71.5" x2="51" y2="71.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M75.24,23.79a5.2,5.2,0,0,1-6.42,2.57,5.78,5.78,0,0,1-3.26-7.25,5.25,5.25,0,0,1,6.8-3.47,5.35,5.35,0,0,1,2,1.34l2.75,2.75" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="77.75 16.61 77.75 20.61 73.75 20.61" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                       </svg>
                                    </div>
                                    <div class="nk-wg1-text">
                                       <h5 class="title">Security Setting</h5>
                                       <p>You have full control to manage your own account and keep account fully secure.</p>
                                    </div>
                                 </div>
                                 <div class="nk-wg1-action">
                                    <a href="html/subscription/profile-setting.html" class="link"><span>Account Setting</span> <em class="icon ni ni-chevron-right"></em></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6">
                           <div class="card card-bordered card-full">
                              <div class="nk-wg1">
                                 <div class="nk-wg1-block">
                                    <div class="nk-wg1-img">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                          <path d="M68.14,80.86,30.21,72.69a5.93,5.93,0,0,1-4.57-7l12.26-56A6,6,0,0,1,45,5.14l28.18,6.07L85.5,29.51,75.24,76.33A6,6,0,0,1,68.14,80.86Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="73 12.18 69.83 26.66 85.37 30.08" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M66.26,71.15,29.05,82.46a6,6,0,0,1-7.46-4L4.76,23.15a6,6,0,0,1,4-7.47l27.64-8.4L56.16,17.39,70.24,63.68A6,6,0,0,1,66.26,71.15Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="36.7 8.22 41.05 22.53 56.33 17.96" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M68,85H29a6,6,0,0,1-6-6V21a6,6,0,0,1,6-6H58L74,30.47V79A6,6,0,0,1,68,85Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="58 16 58 31 74 31.07" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="45" y1="41" x2="61" y2="41" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="48" x2="61" y2="48" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="55" x2="61" y2="55" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="63" x2="61" y2="63" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="35" y1="69" x2="51" y2="69" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <text transform="translate(34.54 43.18) scale(0.99 1)" font-size="9.31" fill="#6576ff" font-family="Nunito-Black, Nunito Black">$</text>
                                       </svg>
                                    </div>
                                    <div class="nk-wg1-text">
                                       <h5 class="title">Billing History</h5>
                                       <p>Check out all your payment history. You can also download or print your invoice.</p>
                                    </div>
                                 </div>
                                 <div class="nk-wg1-action">
                                    <a href="html/subscription/payments.html" class="link"><span>Payment History</span> <em class="icon ni ni-chevron-right"></em></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6">
                           <div class="card card-bordered card-full">
                              <div class="nk-wg1">
                                 <div class="nk-wg1-block">
                                    <div class="nk-wg1-img">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                          <path d="M40.74,5.16l38.67,9.23a6,6,0,0,1,4.43,7.22L70.08,80a6,6,0,0,1-7.17,4.46L24.23,75.22A6,6,0,0,1,19.81,68L33.56,9.62A6,6,0,0,1,40.74,5.16Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M50.59,6.5,11.18,11.73a6,6,0,0,0-5.13,6.73L13.85,78a6,6,0,0,0,6.69,5.16l39.4-5.23a6,6,0,0,0,5.14-6.73l-7.8-59.49A6,6,0,0,0,50.59,6.5Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <rect x="15" y="15" width="54" height="70" rx="6" ry="6" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <line x1="42" y1="77" x2="58" y2="77" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <circle cx="38" cy="77" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                          <line x1="42" y1="72" x2="58" y2="72" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <circle cx="38" cy="72" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                          <line x1="42" y1="66" x2="58" y2="66" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <circle cx="38" cy="66" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                          <path d="M46,40l-15-.3V40A15,15,0,1,0,46,25h-.36Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <path d="M42,22A14,14,0,0,0,28,36H42V22" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="33.47 30.07 28.87 23 23 23" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                          <polyline points="25 56 35 56 40.14 49" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                       </svg>
                                    </div>
                                    <div class="nk-wg1-text">
                                       <h5 class="title">Account Reports</h5>
                                       <p>Check your reports of uses and manage your packages or subscriptions that you have.</p>
                                    </div>
                                 </div>
                                 <div class="nk-wg1-action">
                                    <a href="html/subscription/subscriptions.html" class="link"><span>Manage Subscription</span> <em class="icon ni ni-chevron-right"></em></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                     </div>
                     <!-- .row -->
                  </div>
                  <!-- .nk-block -->
                  <div class="nk-block">
                     <h6 class="lead-text mb-3">Les Navires</h6>
                     <div class="row g-3">
                        <div class="col-xl-12 col-xxl-6">
                           <div class="card card-bordered">
                              <div class="card-inner">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <div class="icon-circle icon-circle-lg bg-orange">
                                          <em class="icon ni ni-mc"></em>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="lead-text">Ajouter un Navire <span class="text-soft ml-1"></span></h6>
                                          <span class="sub-text">Expires Nov 2023</span>
                                       </div>
                                    </div>
                                    <ul class="btn-toolbar justify-center gx-1 me-n1 flex-nowrap">
                                       <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-edit"></em></a></li>
                                       <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-trash"></em></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-xl-12 col-xxl-6">
                           <div class="card card-bordered">
                              <div class="card-inner">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <div class="icon-circle icon-circle-lg bg-indigo">
                                          <em class="icon ni ni-american-express"></em>
                                       </div>
                                       <div class="ms-3">
                                          <h6 class="lead-text">Consulter un Navire <span class="text-soft ml-1"></span></h6>
                                          <span class="sub-text">Expires Feb 2024</span>
                                       </div>
                                    </div>
                                    <ul class="btn-toolbar justify-center gx-1 me-n1 flex-nowrap">
                                       <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-edit"></em></a></li>
                                       <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-trash"></em></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- .row -->
                  </div>
                  <div class="nk-block">
                     <h6 class="lead-text">Connect to Facebook</h6>
                     <div class="card card-bordered">
                        <div class="card-inner">
                           <div class="between-center flex-wrap flex-md-nowrap g-3">
                              <div class="media media-center gx-3 wide-xs">
                                 <div class="media-object">
                                    <em class="icon icon-circle icon-circle-lg ni ni-facebook-f"></em>
                                 </div>
                                 <div class="media-content">
                                    <p>You have successfully connected with your facebook account, you can easily log in using your account too.</p>
                                 </div>
                              </div>
                              <div class="nk-block-actions flex-shrink-0">
                                 <a href="#" class="btn btn-lg btn-danger">Revoke Access</a>
                              </div>
                           </div>
                        </div>
                        <!-- .nk-card-inner -->
                     </div>
                     <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-head-content">
                           <h6 class="nk-block-title">Import Contacts <a href="#" class="link link-primary ms-auto">Import from Google</a></h6>
                           <div class="nk-block-des">
                              <p>You have not imported contacts from your mobile phone.</p>
                           </div>
                        </div>
                     </div>
                     <!-- .nk-block-head -->
                  </div>
               </div>
               <!-- .card-inner -->
            </div> <!-- .card -->
           
                           
         </div>
         <!-- .col -->
      </div>
      <!-- .row -->
   </div>
   <!-- .nk-block -->
</div>