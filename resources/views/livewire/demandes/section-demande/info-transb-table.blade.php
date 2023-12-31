<div class="row g-gs  mt-1">
   <div class="col-lg-6">
      <div class="card card-bordered h-100">
         <div class="card-inner">
            {{-- 
            <div class="card-head">
               <h5 class="card-title">Customer Info</h5>
            </div>
            --}}
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
               <div class="form-group">
                  <label class="form-label" for="pay-amount">Nom <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <div class="form-icon form-icon-right">
                        <em class="icon ni ni-calendar-alt"></em>
                     </div>
                     <input type="text" class="form-control date-picker" id="nomTransb">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="pay-amount">Numéro ID<span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <div class="form-icon form-icon-right">
                        <em class="icon ni ni-calendar-alt"></em>
                     </div>
                     <input type="text" class="form-control date-picker" id="numIdTransb">
                  </div>
               </div>
               <div class="form-group">
                  <a  class="btn btn-icon btn-small btn-primary" id="btnAddinfoTransbToCollection"><em class="icon ni ni-plus"></em></a>
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-trash"></em></a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="card card-bordered h-100">
         <div class="card-inner">
            {{-- 
            <div class="card-head">
               <h5 class="card-title">Customer Info</h5>
            </div>
            --}}
            <form action="#">
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
                     <input type="number" class="form-control" id="qteInfoTranb">  
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="phone-no">Zone de capture<span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="zoneCaptureInfoTranb">
                        <option value="default_option">Default Option</option>
                        <option value="option_select_name">Option select name</option>
                        <option value="option_select_name">Option select name</option>
                     </select>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="card card-bordered h-100">
      <div class="card-inner">
         {{-- 
         <div class="card-head">
            <h5 class="card-title">Contact Form</h5>
         </div>
         --}}
         <table class="table table-tranx">
            <thead>
               <tr class="tb-tnx-head">
                  <th class="tb-tnx-id"><span class="">#</span></th>
                  <th class="tb-tnx-info">
                     <span class="tb-tnx-desc d-none d-sm-inline-block">
                     <span>Bill For</span>
                     </span>
                     <span class="tb-tnx-date d-md-inline-block d-none">
                     <span class="d-md-none">Date</span>
                     <span class="d-none d-md-block">
                     <span>Issue Date</span>
                     <span>Due Date</span>
                     </span>
                     </span>
                  </th>
                  <th class="tb-tnx-amount is-alt">
                     <span class="tb-tnx-total">Total</span>
                     <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                  </th>
                  <th class="tb-tnx-action">
                     <span>&nbsp;</span>
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr class="tb-tnx-item">
                  <td class="tb-tnx-id">
                     <a href="#"><span>4947</span></a>
                  </td>
                  <td class="tb-tnx-info">
                     <div class="tb-tnx-desc">
                        <span class="title">Enterprize Year Subscription</span>
                     </div>
                     <div class="tb-tnx-date">
                        <span class="date">10-05-2019</span>
                        <span class="date">10-13-2019</span>
                     </div>
                  </td>
                  <td class="tb-tnx-amount is-alt">
                     <div class="tb-tnx-total">
                        <span class="amount">$599.00</span>
                     </div>
                     <div class="tb-tnx-status">
                        <span class="badge badge-dot bg-warning">Due</span>
                     </div>
                  </td>
                  <td class="tb-tnx-action">
                     <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                           <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Remove</a></li>
                           </ul>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr class="tb-tnx-item">
                  <td class="tb-tnx-id">
                     <a href="#"><span>4904</span></a>
                  </td>
                  <td class="tb-tnx-info">
                     <div class="tb-tnx-desc">
                        <span class="title">Maintenance Year Subscription</span>
                     </div>
                     <div class="tb-tnx-date">
                        <span class="date">06-19-2019</span>
                        <span class="date">06-26-2019</span>
                     </div>
                  </td>
                  <td class="tb-tnx-amount is-alt">
                     <div class="tb-tnx-total">
                        <span class="amount">$99.00</span>
                     </div>
                     <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                  </td>
                  <td class="tb-tnx-action">
                     <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                           <ul class="link-list-plain">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Remove</a></li>
                           </ul>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr class="tb-tnx-item">
                  <td class="tb-tnx-id">
                     <a href="#"><span>4829</span></a>
                  </td>
                  <td class="tb-tnx-info">
                     <div class="tb-tnx-desc">
                        <span class="title">Enterprize Year Subscription</span>
                     </div>
                     <div class="tb-tnx-date">
                        <span class="date">10-04-2018</span>
                        <span class="date">10-12-2018</span>
                     </div>
                  </td>
                  <td class="tb-tnx-amount is-alt">
                     <div class="tb-tnx-total">
                        <span class="amount">$599.00</span>
                     </div>
                     <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                  </td>
                  <td class="tb-tnx-action">
                     <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                           <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Remove</a></li>
                           </ul>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr class="tb-tnx-item">
                  <td class="tb-tnx-id">
                     <a href="#"><span>4830</span></a>
                  </td>
                  <td class="tb-tnx-info">
                     <div class="tb-tnx-desc">
                        <span class="title">Enterprize Anniversary Subscription</span>
                     </div>
                     <div class="tb-tnx-date">
                        <span class="date">12-04-2018</span>
                        <span class="date">14-12-2018</span>
                     </div>
                  </td>
                  <td class="tb-tnx-amount is-alt">
                     <div class="tb-tnx-total">
                        <span class="amount">$399.00</span>
                     </div>
                     <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Paid</span></div>
                  </td>
                  <td class="tb-tnx-action">
                     <div class="dropdown">
                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                           <ul class="link-list-plain">
                              <li><a href="#">View</a></li>
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Remove</a></li>
                           </ul>
                        </div>
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>