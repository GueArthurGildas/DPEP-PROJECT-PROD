
   <div class="circle-line justify-content-center ">
        <div class="circle">1</div>
        <div class="line"></div>
        <div class="circle"><i class=" fas fa-solid fa-check"></i></div>
        <div class="line"></div>
        <div class="circle">3</div>
        <div class="line"></div>
        <div class="circle">4</div>
        <div class="line"></div>
        <div class="circle">5</div>
    </div>
<br><div id="block-search-navire" style=" display: none;">
   <div class="form-group">
      <div class="form-control-wrap">
         <select class="form-select js-select2" data-search="on" id="navire-selected">
            <option value="selectNavire">Selectionner le Navire</option>
            @foreach ( $lesNavires as $i )
            <option value="{{$i->id}}">{{$i->id}}  | {{$i->Nom_Navire}} |  {{$i->Etat_Pavillon}}</option>
            @endforeach
         </select>
      </div>
   </div>
   <ul>
   </ul>
   <div class="form-group">
      <a href="#" id="valide-select-navire" class="btn btn-danger">valider</a>
      <a href="#" id="annul-select-navire" class="btn btn-dark">annuler</a>
   </div>
</div>
<div class="nk-block ">
   <div class="card card-bordered mt-2 ">
      <form>
         <div class="nk-kycfm">
            <div class="nk-kycfm-head ">
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Détails concernant le navire  </h4>
                  <p id="newNavireCreated"> je suis ici </p>
                  <p class="sub-title">Veuillez fournir les informations essentielles concernant le navire.</p>
                  {{-- <button type="button" id="btnSwitchToNavireSearch" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalForm">Selectionner un navire</button> --}}
                  <button type="button" id="btnSwitchToNavireSearch" class="btn btn-danger" >Selectionner un navire</button>
                  <button type="button" id="btnDoappearFieldNavire" class="btn btn-danger" >Vider</button>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">

               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Nom du Navire <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="nomNavire" >
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group" id="pereIrcsNavire">
                        <div class="form-label-group" >
                           <label class="form-label">IRCS<span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="ircsNavire">
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
                           <input type="text" class="form-control form-control field-navire" id="etatPavillonNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     
                     <div class="form-group" >
                        <label class="form-label">Type Navire </label> <span class="text-danger">*</span></label>
                        <div class="form-control-wrap field-navire" id="pereTypeNavire">
                           <select class="form-select js-select2 " data-search="on" id="typeNavire">
                              <option value="default_option">Default Option</option>
                              <option value="option_select_name">Option select name</option>
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
                           <input type="text" class="form-control form-control field-navire" id="certifNavire">
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
                           <input type="text" class="form-control form-control field-navire" id="tiranNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head ">
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Dimension du navire</h4>
                  <p class="sub-title">Spécifiez les caractéristiques physiques du navire.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
              
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Longueur <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="number" class="form-control form-control field-navire" id="longNavire">
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
                           <input type="number" class="form-control form-control field-navire" id="largNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head ">
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Autres informations </h4>
                  <p class="sub-title">Incluez des détails supplémentaires pertinents sur le navire.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">
              
               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID certificat d'immatriculation <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="immaCertifNavire">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID navivire OMI <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="omi">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID externe <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="idExterne">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">ID ORGP <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="orgp">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
           
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-head">
               <div class="nk-kycfm-count bg-light"><i class=" fas fa-solid fa-check"></i></div>
               <div class="nk-kycfm-title">
                  <h4 class="title">Capitaine du navire</h4>
                  <p class="sub-title">Indiquez le nom et le pays du capitaine responsable du navire pour cette demande.</p>
               </div>
            </div>
            <!-- nk-kycfm-head -->
            <div class="nk-kycfm-content">

               <div class="row g-4">
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Nom du capitaine <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="captaineName">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="form-label-group">
                           <label class="form-label">Nationalité du Capitaine <span class="text-danger">*</span></label> 
                        </div>
                        <div class="form-control-group">
                           <input type="text" class="form-control form-control field-navire" id="captaineNationality">
                        </div>
                     </div>
                  </div>
                  <!-- .col -->
               </div>
               <!-- .row -->
            </div>
            <!-- nk-kycfm-content -->
            <div class="nk-kycfm-footer field-navire">
               <div class="form-group">
                  <label class="form-label">National ? </label>
                  <div class="form-control-wrap">
                     <ul class="custom-control-group">
                        <li>
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input field-navire" name="sv2-work-place" id="sv2-work-place-office" value="in-ofice" required>
                              <label class="custom-control-label" for="sv2-work-place-office">Oui </label>
                           </div>
                        </li>
                        <li>
                           <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input field-navire" name="sv2-work-place" id="sv2-work-place-remote" value="remote-home" required>
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