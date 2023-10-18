    <th>Date de transbordement</th>
                  <th>Lieu</th>
                  <th>Nom</th>
                  <th>Etat pavillon</th>
                  <th>Numéro ID</th>
                  <th>Espèce</th>
                  <th>Produit</th>
                  <th>Quantité</th>
                  <th>Zone de capture</th>
    
    <!-- Modal Form -->
    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Information sur un transbordement</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                     <form action="#">
               <div class="form-group">
                  <label class="form-label" for="full-name">Date de transbordement <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="dateTransb">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="email-address">Lieu <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="lieuTransb">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Nom <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <div class="form-icon form-icon-right">
                              <em class="icon ni ni-calendar-alt"></em>
                           </div>
                           <input type="text" class="form-control date-picker" id="nomTransb">
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Numéro ID<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <div class="form-icon form-icon-right">
                              <em class="icon ni ni-calendar-alt"></em>
                           </div>
                           <input type="text" class="form-control date-picker" id="numIdTransb">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="email-address">Espèce <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="especeTransb">
                        <option value="default_option">Default Option</option>
                        <option value="option_select_name">Option select name  </option>
                        <option value="option_select_name">Option select name</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="phone-no">Produit <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="idProduitTransb">
                        <option value="default_option">Default Option</option>
                        <option value="option_select_name">Option select name</option>
                        <option value="option_select_name">Option select name</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="phone-no">Quantité <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="number" class="form-control" id="qteTransb">
                        </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="phone-no">Zone de capture<span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="zoneCapture">
                        <option value="default_option">Default Option</option>
                        <option value="option_select_name">Option select name</option>
                        <option value="option_select_name">Option select name</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-plus"></em></a>
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-trash"></em></a>
               </div>
            </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Footer Text</span>
                </div>
            </div>
        </div>
    </div>