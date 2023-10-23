
   {{-- <div class="card  " style="background-color:#ffe6d7" >
   <div class="card-inner" >
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les informations du navires </h2>
               <div class="nk-block-des ">
                  <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                  <div class="nk-block-head-content">
                                                <ul class="nk-block-tools gx-3">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">Modal With Form</button>
                                                    <li class="order-md-last"><a id="MoalSelectNavire" class="btn btn-white btn-dim btn-outline-primary"><span>Nouvelle Demande</span></a></li>
                                                </ul>
                                            </div>
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
   <div class="nk-block ">
   
      <div class="card card-bordered mt-2 ">
      <form>
      
         <div class="nk-kycfm">
         
            <div class="nk-kycfm-head ">

               <div class="nk-kycfm-count bg-light">01</div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Détails concernant le navire</h4>
                  <p class="sub-title">Veuillez fournir les informations essentielles concernant le navire.</p>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalForm">Selectionner un navire</button>
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
                           <label class="form-label">Nom du Navire <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control" id="nomNavire">
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
                           <input type="text" class="form-control form-control" id="ircs">
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
                           <input type="text" class="form-control form-control" id="etatPavillonNavire">
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
                        
                           <select class="form-select js-select2" data-search="on" id="typeNavire">
                              <option value="default_option">Default Option</option>
                              <option value="option_select_name">Option select name  </option>
                              <option value="option_select_name">Option select name</option>
                           </select>
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
                           <input type="text" class="form-control form-control date-picker-alt" id="certifNavire">
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
                           <input type="text" class="form-control form-control" id="tiranNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head ">
               <div class="nk-kycfm-count bg-light">02</div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Dimension du navire</h4>
                  <p class="sub-title">Spécifiez les caractéristiques physiques du navire.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               {{-- <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Your can’t edit these details once you submitted the form.</p>
               </div> --}}
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Longueur <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control" id="longNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Largeur <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control" id="largNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head ">
               <div class="nk-kycfm-count bg-light">03</div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Autres informations </h4>
                  <p class="sub-title">Incluez des détails supplémentaires pertinents sur le navire.</p>
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
                           <label class="form-label">ID certificat d'immatriculation<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control" id="immaCertifNavire">
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
                           <input type="text" class="form-control form-control" id="omi">
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
                           <input type="text" class="form-control form-control" id="nomNavire">
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
                           <input type="text" class="form-control form-control" id="orgp">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
               {{-- <div class="nk-kycfm-head ">
                  <div class="nk-kycfm-count bg-light">04</div>
                  <div class="nk-kycfm-title">
                     <h4 class="title">Propirétaire du Navire</h4>
                     <p class="sub-title">Indiquez les informations du propriétaire. </p>
                  </div>
               </div> --}}
            <!-- nk-kycfm-head -->
               {{-- <div class="nk-kycfm-content">
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
                              <input type="text" class="form-control form-control" id="contactNavireForInfo">
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
                              <input type="text" class="form-control form-control" id="proprioNavire">
                           </div>
                        </div>
                     </div>
                     <!-- .col -->
                  </div>
                  <!-- .row -->
               </div> --}}
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-light">04</div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Capitaine du navire</h4>
                  <p class="sub-title">Indiquez le nom et le pays du capitaine responsable du navire pour cette demande.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
               {{-- <div class="nk-kycfm-note">
                  <em class="icon ni ni-info-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"></em>
                  <p>Your can’t edit these details once you submitted the form.</p>
               </div> --}}
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Nom du capitaine<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control" id="captaineName">
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
                           <input type="text" class="form-control form-control" id="captaineNationality">
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
      
      
      </form>
      
      </div>
      <!-- .card -->
   </div>
   <!-- nk-block -->
