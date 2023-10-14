<div class="kyc-app wide-sm m-auto .border-primary">
   <div class="card text-white bg-secondary">
      <div class="card-inner">
         <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
            <div class="nk-block-head-content text-center">
            <div class="nk-kycfm-count text-white">01</div>
               <h2 class="nk-block-title fw-normal">Information sur  Le Navire</h2>
               
               <div class="nk-block-des text-white">
               
                  <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
               </div>
               
               <img class="" src="{{asset("images/CI-Logov.png")}}" alt="User profile picture" width="100" height="50">
               
            </div>
         </div>
         <!-- nk-block --> 
      </div>
   </div>
   <div class="nk-block ">
      <div class="card card-bordered mt-2 ">
         <div class="nk-kycfm">
            <div class="nk-kycfm-head">
               {{-- <div class="nk-kycfm-count">01</div> --}}
               <div class="nk-kycfm-title">
                  <h5 class="title"> Détails concernant le navire</h5>
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
                           <label class="form-label">Nom du Navire<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="nomNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">IRCS <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="ircs">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Etat Pavillon <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="etatPavillonNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Type Navire <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="typeNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID Certificat <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg date-picker-alt" id="certifNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Tirant d'eau <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="tiranNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               {{-- <div class="nk-kycfm-count">02</div> --}}
               <div class="nk-kycfm-title">
                  <h5 class="title">Dimension du navire</h5>
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
                           <label class="form-label">Longueur<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="longNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Largeur</label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="largNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               {{-- <div class="nk-kycfm-count">03</div> --}}
               <div class="nk-kycfm-title">
                  <h5 class="title">Autres informations</h5>
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
                           <label class="form-label">ID certificat d'immatriculation<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="immaCertifNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID navivire OMI<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="omi">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID externe<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="nomNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID ORGP<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="orgp">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               {{-- <div class="nk-kycfm-count">04</div> --}}
               <div class="nk-kycfm-title">
                  <h5 class="title">Propirétaire du Navire</h5>
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
                           <label class="form-label">Contact pour infos sur le Navire<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="contactNavireForInfo">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Propirétaire du Navire</label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="proprioNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               {{-- <div class="nk-kycfm-count">05</div> --}}
               <div class="nk-kycfm-title">
                  <h5 class="title">Capitaine du navire</h5>
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
                           <label class="form-label">Nom du capitaine<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="captaineName">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Nationalité du Capitaine</label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control-lg" id="captaineNationality">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-footer">
               <div class="form-group">
                  <label class="form-label">National ? </label>
                  <div class="form-control-wrap">
                     <ul class="custom-control-group">
                        <li>
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="sv2-work-place" id="sv2-work-place-office" value="in-ofice" required>
                              <label class="custom-control-label" for="sv2-work-place-office">Oui </label>
                           </div>
                        </li>
                        <li>
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="sv2-work-place" id="sv2-work-place-remote" value="remote-home" required>
                              <label class="custom-control-label" for="sv2-work-place-remote">Non</label>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- nk-kycfm-footer -->
         </div>
         <!-- nk-kycfm -->
      </div>
      <!-- .card -->
   </div>
   <!-- nk-block -->
</div>
<!-- .kyc-app -->