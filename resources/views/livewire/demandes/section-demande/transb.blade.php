<div class="card text-white bg-secondary">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les autorisations de transbordement </h2>
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
      <h2 class="nk-block-title fw-normal">Les transbordements </h2>
      <div class="nk-block-des">
         <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
      </div>
   </div>
</div>
<!-- nk-block --> --}}
<div class="row g-gs mt-1">
   <div class="col-lg-5">
      <div class="card card-bordered h-100">
         <div class="card-inner">
            <div class="card-head">
               <h5 class="card-title"> Les autorisations de transbordement </h5>
               <ul class="nk-block-tools gx-3">
            </div>
            <form action="#">
               <div class="form-group">
                  <label class="form-label" for="full-name">Identificateur <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="full-name">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="email-address">Délivré par<span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="email-address">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount"> Date émission<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="number" class="form-control" id="pay-amount">
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Date Expiration <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="number" class="form-control" id="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-plus"></em></a>
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-trash"></em></a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-7">
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
</div>

<hr>

<hr><hr>
<!-- form info transb table -->
@include("livewire.demandes.section-demande.info-transb-table")
<!-- . -->
