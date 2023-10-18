<div class="card text-white bg-secondary">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les captures à bord du navire</h2>
               <div class="nk-block-des text-white">
                  <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
               </div>
            </div>
            <div class="nk-block-head-content">
               <ul class="nk-block-tools gx-3">
                  <em class="icon ni ni-list-thumb-fill"></em>
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
      <h2 class="nk-block-title fw-normal">Les captures à bord </h2>
      <div class="nk-block-des">
         <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
      </div>
   </div>
</div>
<!-- nk-block --> --}}
<div class="row g-gs mt-1">

   <div class="col-lg-4">
      <div class="card card-bordered h-100 "   >
         <div class="card-inner">
            {{-- 
            <div class="card-head">
               <h5 class="card-title">Customer Info </h5>
            </div>
            --}}
            <form action="#">
               <div class="form-group">
                  <label class="form-label" for="full-name">Espèce <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="espece">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="email-address">Produit <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="produit">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="phone-no">Zone de capture <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="zoneCapture">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Qté à Bord <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="number" class="form-control" id="qteBord">
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Qté à Débarquer <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="number" class="form-control" id="qteDebarque">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <a class="btn btn-icon btn-small btn-primary" eg-toastr-top-right id="btnAddCaptureToCollection"><em class="icon ni ni-plus"></em></a>
                  <a href="#" class="btn btn-icon btn-small btn-primary"><em class="icon ni ni-trash"></em></a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="col-lg-8">
      <div class="card card-bordered h-100">
         <div class="card-inner">
            {{-- 
            <div class="card-head">
               <h5 class="card-title">Contact Form</h5>
            </div>
            --}}

            <div ></div>
            <table class="table table-ulogs">
                        <thead class="table-light">
                            <tr>
                                <th class="tb-col-os"><span class="overline-title">Espèce <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">Produit</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Zone de capture</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Qté à Bord </span></th>
                                <th class="tb-col-time"><span class="overline-title">Qté à Débarquer</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                            </tr>
                        </thead><tbody id="iciAddRetourAcptureOk">
                           
                            <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                            </tr>
                            
                        </tbody>
                    </table>
         </div>
      </div>
   </div>
      <span class="text-white" id="demandeId">{{$idDemadne}}</span>
</div>



