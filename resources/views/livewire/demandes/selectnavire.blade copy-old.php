@extends("layouts.master")
@section("content")
<div class="nk-block-head-sub"><a class="back-to" href="{{route('home')}}"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
<div class="nk-block-head-content">
   <h2 class="nk-block-title fw-normal">Selectionner un navire</h2>
   <div class="nk-block-des">
      <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
   </div>
   <br>
</div>
<div class="nk-fmg-body-head  d-lg-flex p-2 bg-light">
   <div class="nk-fmg-search">
      <input type="text" class="form-control border-transparent form-focus-none"  style="font-size: 18px;" placeholder="Entrez le nom du navire">  &nbsp; &nbsp;
   </div>
   <div class="nk-fmg-actions">
      <ul class="nk-block-tools g-3">
         <li>
            <div class="dropdown">
               <a href="#" class="btn btn-primary" data-bs-toggle="dropdown"> <em class="icon ni ni-search"></em> <span>Chercher</span></a>
               <div class="dropdown-menu dropdown-menu-end">
                  <ul class="link-list-opt no-bdr">
                     <li><a href="#file-upload" data-bs-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                     <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                     <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li><a href="#file-upload" class="btn btn-light" data-bs-toggle="modal"><em class="icon ni ni-plus"></em><span>Ajouter </span></a></li>
      </ul>
   </div>
</div>
</div><br>
<div class="card card-bordered card-stretch">
   <div class="card-inner-group">
      <div class="card-inner">
         <div class="card-title-group">
            <div class="card-title">
               <h5 class="title">Liste des Navires</h5>
            </div>
            <div class="card-tools me-n1">
               <ul class="btn-toolbar gx-1">
                  <li class="btn-toolbar-sep"></li>
                  <!-- li -->
                  <li>
                     <div class="dropdown">
                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                        <em class="icon ni ni-filter-alt"></em>
                        </a>
                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                           <div class="dropdown-head">
                              <span class="sub-title dropdown-title">Advance Filter</span>
                              <div class="dropdown">
                                 <a href="#" class="link link-light">
                                 <em class="icon ni ni-more-h"></em>
                                 </a>
                              </div>
                           </div>
                           <div class="dropdown-body dropdown-body-rg">
                              <div class="row gx-6 gy-4">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="overline-title overline-title-alt">Type</label>
                                       <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                          <option value="any" data-select2-id="3">Any Type</option>
                                          <option value="deposit">Deposit</option>
                                          <option value="buy">Buy Coin</option>
                                          <option value="sell">Sell Coin</option>
                                          <option value="transfer">Transfer</option>
                                          <option value="withdraw">Withdraw</option>
                                       </select>
                                       <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-klyh-container"><span class="select2-selection__rendered" id="select2-klyh-container" role="textbox" aria-readonly="true" title="Any Type">Any Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="overline-title overline-title-alt">Status</label>
                                       <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                          <option value="any" data-select2-id="6">Any Status</option>
                                          <option value="pending">Pending</option>
                                          <option value="cancel">Cancel</option>
                                          <option value="process">Process</option>
                                          <option value="completed">Completed</option>
                                       </select>
                                       <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-htg3-container"><span class="select2-selection__rendered" id="select2-htg3-container" role="textbox" aria-readonly="true" title="Any Status">Any Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="overline-title overline-title-alt">Pay Currency</label>
                                       <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                          <option value="any" data-select2-id="9">Any Coin</option>
                                          <option value="bitcoin">Bitcoin</option>
                                          <option value="ethereum">Ethereum</option>
                                          <option value="litecoin">Litecoin</option>
                                       </select>
                                       <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-fu4z-container"><span class="select2-selection__rendered" id="select2-fu4z-container" role="textbox" aria-readonly="true" title="Any Coin">Any Coin</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="overline-title overline-title-alt">Method</label>
                                       <select class="form-select js-select2 select2-hidden-accessible" data-select2-id="10" tabindex="-1" aria-hidden="true">
                                          <option value="any" data-select2-id="12">Any Method</option>
                                          <option value="paypal">PayPal</option>
                                          <option value="bank">Bank</option>
                                       </select>
                                       <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-enrj-container"><span class="select2-selection__rendered" id="select2-enrj-container" role="textbox" aria-readonly="true" title="Any Method">Any Method</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="form-group">
                                       <div class="custom-control custom-control-sm custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="includeDel">
                                          <label class="custom-control-label" for="includeDel"> Including Deleted</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group">
                                       <button type="button" class="btn btn-secondary">Filter</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="dropdown-foot between">
                              <a class="clickable" href="#">Reset Filter</a>
                              <a href="#savedFilter" data-bs-toggle="modal">Save Filter</a>
                           </div>
                        </div>
                        <!-- .filter-wg -->
                     </div>
                     <!-- .dropdown -->
                  </li>
                  <!-- li -->
                  <li>
                     <div class="dropdown">
                        <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                        <em class="icon ni ni-setting"></em>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                           <ul class="link-check">
                              <li><span>Show</span></li>
                              <li class="active"><a href="#">10</a></li>
                              <li><a href="#">20</a></li>
                              <li><a href="#">50</a></li>
                           </ul>
                           <ul class="link-check">
                              <li><span>Order</span></li>
                              <li class="active"><a href="#">DESC</a></li>
                              <li><a href="#">ASC</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- .dropdown -->
                  </li>
                  <!-- li -->
               </ul>
               <!-- .btn-toolbar -->
            </div>
            <!-- .card-tools -->
            <div class="card-search search-wrap" data-search="search">
               <div class="search-content">
                  <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                  <input type="text" class="form-control border-transparent form-focus-none" placeholder="Quick search by transaction">
                  <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
               </div>
            </div>
            <!-- .card-search -->
         </div>
         <!-- .card-title-group -->
      </div>
      <!-- .card-inner -->
      <div class="card-inner p-0">
         <div class="nk-tb-list nk-tb-tnx">
            <div class="nk-tb-item nk-tb-head">
               <div class="nk-tb-col"><span>Details</span></div>
               <div class="nk-tb-col tb-col-xxl"><span>Source</span></div>
               <div class="nk-tb-col tb-col-lg"><span>Order</span></div>
               <div class="nk-tb-col text-end"><span>Amount</span></div>
               <div class="nk-tb-col text-end tb-col-sm"><span>Balance</span></div>
               <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-none d-md-block">Status</span></div>
               <div class="nk-tb-col nk-tb-col-tools"></div>
            </div>
            <!-- .nk-tb-item -->
            @foreach ( $lesNavires as $i )
            <div class="nk-tb-item">
               <div class="nk-tb-col">
                  <div class="nk-tnx-type">
                     <div class="nk-tnx-type-text">
                        <span class="tb-lead">Deposited Funds</span>
                        <span class="tb-date">18/10/2019 12:04 PM</span>
                     </div>
                  </div>
               </div>
               <div class="nk-tb-col tb-col-xxl">
                  <span class="tb-lead-sub">Using PayPal Account</span>
                  <span class="tb-sub">mypay*****com</span>
               </div>
               <div class="nk-tb-col tb-col-lg">
                  <span class="tb-lead-sub">YWLX52JG73</span>
                  <span class="badge badge-dot bg-success">Deposit</span>
               </div>
               <div class="nk-tb-col text-end">
                  <span class="tb-amount">+ 0.010201 <span>BTC</span></span>
                  <span class="tb-amount-sm">1290.49 USD</span>
               </div>
               <div class="nk-tb-col text-end tb-col-sm">
                  <span class="tb-amount">1.30910201 <span>BTC</span></span>
                  <span class="tb-amount-sm">101290.49 USD</span>
               </div>
               <div class="nk-tb-col nk-tb-col-status">
                  <div class="dot dot-success d-md-none"></div>
                  <span class="badge badge-sm badge-dim bg-outline-success d-none d-md-inline-flex">Completed</span>
               </div>
               <div class="nk-tb-col nk-tb-col-tools">
                  <ul class="nk-tb-actions gx-2">
                     <li class="nk-tb-action-hidden">
                        <a href="#" class="bg-white btn btn-sm btn-outline-light btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Approve" data-bs-original-title="Approve"><em class="icon ni ni-done"></em></a>
                     </li>
                     <li class="nk-tb-action-hidden">
                        <a href="#tranxDetails" data-bs-toggle="modal" class="bg-white btn btn-sm btn-outline-light btn-icon btn-tooltip" aria-label="Details" data-bs-original-title="Details"><em class="icon ni ni-eye"></em></a>
                     </li>
                     <li>
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-more-h"></em></a>
                           <div class="dropdown-menu dropdown-menu-end" style="">
                              <ul class="link-list-opt">
                                 <li><a href="#"><em class="icon ni ni-done"></em><span>Approve</span></a></li>
                                 <li><a href="#"><em class="icon ni ni-cross-round"></em><span>Reject</span></a></li>
                                 <li><a href="#"><em class="icon ni ni-repeat"></em><span>Check</span></a></li>
                                 <li><a href="#tranxDetails" data-bs-toggle="modal"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- .nk-tb-item -->
            @endforeach 
         </div>
         <!-- .nk-tb-list -->
      </div>
      <!-- .card-inner -->
      <div class="card-inner">
         {{$lesNavires->links()}}
         {{-- 
         <ul class="pagination justify-content-center justify-content-md-start">
            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
         </ul>
         --}}
      </div>
      <!-- .card-inner -->
   </div>
   <!-- .card-inner-group -->
</div>
@endsection