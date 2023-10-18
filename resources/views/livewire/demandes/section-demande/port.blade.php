{{-- 
<div class="card text-white bg-secondary">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
         <div class="nk-block-head-content text-center">
            <div class="nk-kycfm-count text-white">01</div>
            <h2 class="nk-block-title fw-normal">Informatios relatives au port</h2>
            <div class="nk-block-des text-white">
               <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
            </div>
            <img class="" src="{{asset("images/CI-Logov.png")}}" alt="User profile picture" width="100" height="50">
         </div>
      </div>
      <!-- nk-block -->
   </div>
</div>
--}}
<div class="card text-white bg-secondary">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les informations relatives au port </h2>
               <div class="nk-block-des text-white">
                  <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
               </div>
            </div>
            <div class="nk-block-head-content">
               <ul class="nk-block-tools gx-3">
                  <img class="" src="{{asset("images/CI-Logov.png")}}" alt="User profile picture" width="150" height="70">
                  {{-- 
                  <li class="order-md-last"><a href="{{route("home.demandes.newdemande.index")}}" class="btn btn-white btn-dim btn-outline-primary"><span>Nouvelle Demande</span><em class="icon ni ni-arrow-long-right"></em></a></li>
                  --}}
               </ul>
            </div>
         </div>
      </div>
      <!-- .nk-block-head -->
   </div>
</div>

   {{-- 
   <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
      <div class="nk-block-head-content text-center">
         <h2 class="nk-block-title fw-normal">Informatios relatives au port</h2>
         <div class="nk-block-des">
            <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
         </div>
      </div>
   </div>
   <!-- nk-block --> --}}
   <div class="nk-block">
      <div class="card card-bordered mt-2">
         <div class="nk-kycfm">
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-light">01</div>
               <div class="nk-kycfm-title">
                  <h5 class="title"> Port d'acceuil et objet d'entrée</h5>
                  <p class="sub-title">Your simple personal information required for identification</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
               </div>
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Pays <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           {{-- <input type="text" class="form-control form-control-lg"> --}}
                           <select id="pays"  class="form-select-lg js-select2 form-control form-control-lg" >
                              <option value="CI">Côte d'IVoire</option>
                              <option value="Mali">Mali</option>
                              {{-- 
                              <option value="option_select_name"></option>
                              --}}
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Objet de l'accès au port <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <select  id="objetAccesPort"  class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple options" >
                              {{-- 
                              <option value="default_option">Default Option</option>
                              --}}
                              <option value="Ravitaillement">Ravitaillement</option>
                              <option value="Débarquement">Débarquement</option>
                              <option value="Transbordement">Transbordement</option>
                              <option value="Escale Technique">Escale Technique</option>
                              <option value="Autre">Autre </option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-warning text-white">02</div>
               <div class="nk-kycfm-title">
                  <h5 class="title">Escale effectuée</h5>
                  <p class="sub-title">Your simple personal information required for identification</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Your can’t edit these details once you submitted the form.</p>
               </div>
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Date de la dernière escale<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control"  id="dateLastEscale">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Port d'escale</label>
                        </div>
                        <div class="form-control-group">
                           <select class="form-select js-select2" data-placeholder="Select  options"  id="accueilPort">
                              <option value="option_select_name">Abidjan</option>
                              <option value="option_select_name">San-Pedro</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-warning text-white">03</div>
               <div class="nk-kycfm-title">
                  <h5 class="title">Arrivée estimée</h5>
                  <p class="sub-title">Your simple personal information required for identification</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
               </div>
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Date d'arrivée estimée<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control"  id="dateArriveEstim">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Heure d'arrivée estimée <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <div class="row g-4">
                              <div class="col-lg-6 col-sm-6">
                                 <div class="form-group">
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" data-placeholder="Select Multiple options"  id="heureArriveEstim">
                                          @for ($i = 0; $i < 24; $i++)
                                          @if ($i<10)
                                          <option value="option_select_name">0{{$i}} H</option>
                                          @endif
                                          @if ($i>=10)
                                          <option value="option_select_name">{{$i}} H</option>
                                          @endif
                                          @endfor
                                       </select>
                                       <label class="form-label-outlined" for="outlined-default1">Heure </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6">
                                 <div class="form-group">
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" data-placeholder="Select Multiple options" id="minuteArriveEstim">
                                          @for ($i = 0; $i <= 60; $i++)
                                          @if ($i<10)
                                          <option value="option_select_name">0{{$i}}</option>
                                          @endif
                                          @if ($i>=10)
                                          <option value="option_select_name">{{$i}}</option>
                                          @endif
                                          @endfor
                                       </select>
                                       <label class="form-label-outlined" for="outlined-default">Min</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-footer -->
         </div>
         <!-- nk-kycfm -->
      </div>
      <!-- .card -->
   </div>
   <!-- nk-block -->

<!-- .kyc-app -->