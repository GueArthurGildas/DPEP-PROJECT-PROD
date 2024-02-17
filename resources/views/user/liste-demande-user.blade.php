@foreach ($userdemandes as $demandeUser)
      
                           <div class="card card-bordered sp-plan m-3">
                              <div class="row no-gutters">
                                 <div class="col-md-8">
                                    <div class="sp-plan-info card-inner">
                                       <div class="row gx-0 gy-3">
                                          <div class="sp-plan-name">
                                             <h5 class="title">DPEP-AYX-014 </a><span class="badge" style="background-color:#df6d14">En cours</span></h5>
                                             {{-- <p>ID: <span class="text-base">100394949</span> </p> --}}
                                             <p>Contact : <strong>info@e-Dpep.com</strong> </p>
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
                                             <li><a href="{{route('home.demandes.detailonedemande.index')}}" class="btn btn-trigger btn-icon"><em class="icon ni ni-eye-fill"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-file-img"></em></a></li>
                                             <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-trash-alt"></em></a></li>
                                          </ul>
                                          {{-- <a class="btn btn-danger" data-bs-toggle="modal" ><span>Voir le demande</span></a> --}}
                                       </div>
                                       
                                       <div class="sp-plan-note text-md-center">
                                          <p>Fais le <span>12 NOvembre, 2023</span></p>
                                       </div>
                                      
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                           </div>
                           <!-- .sp-plan -->  
   @endforeach