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
{{-- <div class="card  " style="background-color:#ffe6d7">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les informations relatives au port </h2>
               <div class="nk-block-des ">
                  <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
               </div>
            </div>
            <div class="nk-block-head-content">
               <ul class="nk-block-tools gx-3">
               <div class="user-avatar lg bg-white">
                  <img class="" src="{{asset("images/CI-Logov.png")}}" alt="User profile picture" width="100" height="50">        
               </div>
                  
               </ul>
            </div>
         </div>
      </div>
      <!-- .nk-block-head -->
   </div>
</div> --}}

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

   <div class="circle-line justify-content-center ">
        <div class="circle"><i class=" fas fa-solid fa-check"></i></div>
        <div class="line"></div>
        <div class="circle">2</div>
        <div class="line"></div>
        <div class="circle">3</div>
        <div class="line"></div>
        <div class="circle">4</div>
        <div class="line"></div>
        <div class="circle">5</div>
    </div>

   <div class="nk-block">
      <div class="card card-bordered mt-2">
         <div class="nk-kycfm">
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Port d'acceuil et objet d'entrée</h4>
                  <p class="sub-title">Sélectionnez le pays où vous prévoyez d'arriver. Précisez également le but de votre arrivée.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               {{-- <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Please Sélectionnez le pays où vous prévoyez d'arriver. Précisez également le but de votre arrivée.</p>
               </div> --}}
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Pays <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           {{-- <input type="text" class="form-control form-control-lg"> --}}
                           <select id="pays"  class="form-select-lg js-select2 form-control form-control-lg"  required>
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
                        <div class="form-control-group" >
                           <select  id="objetAccesPort"  class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple options" required >
                              {{-- 
                              <option value="default_option">Default Option</option>
                              --}}
                              <option value="Ravitaillement">Ravitaillement</option>
                              <option value="Debarquement">Débarquement</option>
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
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Escale effectuée</h4>
                  <p class="sub-title">Remplir cette partie si vous avez effectué une escale avant d'arriver au port d'accueil final.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               {{-- <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Veuillez correctement remplir cette partie si vous avez effectué une escale avant d'arriver au port d'accueil final</p>
               </div> --}}
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Date de la dernière escale<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control date-picker" id="dateLastEscale" >
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Port d'escale<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <select required class="form-select js-select2" data-placeholder="Select  options"  id="accueilPort"   required>
                              <option value="Abidjan" >Abidjan</option>
                              <option value="San-Pedro">San-Pedro</option>
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
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Arrivée estimée</h4>
                  <p class="sub-title">Fournissez la date prévue d'arrivée au port.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               {{-- <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
               </div> --}}
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Date d'arrivée estimée<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control date-picker"  id="dateArriveEstim" required>
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
                                    <div class="form-control-wrap" required>
                                       <select class="form-select js-select2" data-placeholder="Select Multiple options"  id="heureArriveEstim" required>
                                          @for ($i = 0; $i < 24; $i++)
                                          @if ($i<10)
                                          <option value={{$i}}>0{{$i}} H</option>
                                          @endif
                                          @if ($i>=10)
                                          <option value={{$i}}>{{$i}} H</option>
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
                                          <option value={{$i}}>0{{$i}}</option>
                                          @endif
                                          @if ($i>=10)
                                          <option value={{$i}}>{{$i}}</option>
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
