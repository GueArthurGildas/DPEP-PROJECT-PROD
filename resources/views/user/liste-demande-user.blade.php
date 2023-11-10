@for ($i = 1; $i <= 4; $i++)
                           <div class="card card-bordered sp-plan m-3">
                              <div class="row no-gutters">
                                 <div class="col-md-8">
                                    <div class="sp-plan-info card-inner">
                                       <div class="row gx-0 gy-3">
                                          <div class="sp-plan-name">
                                             <h5 class="title">DPEP-AYX-014 </a><span class="badge bg-warning">Secondary</span></h5>
                                             <p>Subscription ID: <span class="text-base">100394949</span> </p>
                                             <p>Subscription ID la date pour rassurer de la date</p>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .sp-plan-info -->
                                    {{-- 
                                    <div class="sp-plan-desc card-inner">
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
                                    </div>
                                    --}}
                                    <!-- .sp-plan-desc -->
                                 </div>
                                 <!-- .col -->
                                 <div class="col-md-4">
                                    <div class="sp-plan-action card-inner">
                                       <div class="sp-plan-btn" >
                                          <ul class="btn-toolbar justify-center gx-1">
                                             <li><a href="{{route('home.demandes.detailonedemande.index')}}" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                          </ul>
                                          {{-- <a class="btn btn-danger" data-bs-toggle="modal" ><span>Voir le demande</span></a> --}}
                                       </div>
                                       {{-- 
                                       <div class="sp-plan-note text-md-center">
                                          <p>Next Billing on <span>Oct 11, 2020</span></p>
                                       </div>
                                       --}}
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                           </div>
                           <!-- .sp-plan -->  
                           @endfor