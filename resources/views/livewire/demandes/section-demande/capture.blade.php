
{{-- <div class="card " style="background-color:#ffe6d7">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les captures à bord </h2>
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
               </div><div class="form-group">
                        <label class="form-label" for="phone-no">Zone de capture <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <input type="text" class="form-control" id="zoneCapture">
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
                  <label class="form-label" for="pay-amount">Qté à Bord <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="number" class="form-control" id="qteBord">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="pay-amount">Qté à Débarquer <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="number" class="form-control" id="qteDebarque">
                  </div>
               </div>
               <hr>
               <span class="text-white" id="demandeId">{{$idDemadne}}</span>

               <table class="table table-bordered">
   <thead>
      <tr>
         <th scope="col text-danger">Total à Bord</th>
         <th scope="col text-danger">Total à débarquer</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <th scope="row">0</th>
         <td scope="row">0</td>
         
      </tr>
   </tbody>
</table>

            </form>
         </div>
      </div>
   </div>
</div>
<div class="row g-gs  mt-1 p-2">
   <div class="card card-bordered h-100">
      <div class="card-inner">
         {{-- 
         <div class="card-head">
            <h5 class="card-title">Contact Form</h5>
         </div>
         --}}
         <div ></div><table class="table table-ulogs">
                        <thead class="table-light" style="backgr">
                            <tr>
                                <th class="tb-col-os"><span class="overline-title">Espèce <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">Produit</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Zone de capture</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Qté à Bord </span></th>
                                <th class="tb-col-time"><span class="overline-title">Qté à Débarquer</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                            </tr>
                        </thead><tbody id="iciAddRetourAcptureOk">
                           
                            {{-- <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                            </tr> --}}
                            
                        </tbody>
                    </table>
      </div>
   </div>
</div>