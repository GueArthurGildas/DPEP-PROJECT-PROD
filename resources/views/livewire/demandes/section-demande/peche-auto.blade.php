


{{-- <div class="card " style="background-color:#ffe6d7">
   <div class="card-inner">
      <div class="nk-block-head nk-block-head-lg">
         <div class="nk-block-head-sub"><span></span></div>
         <div class="nk-block-between-md g-4">
            <div class="nk-block-head-content">
               <h2 class="nk-block-title fw-normal">Les autorisations de pêche </h2>
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
                  <label class="form-label" for="full-name">Identificateur <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="Identificateur">
                  </div>
               </div>
               <div class="form-group">
                  <label class="form-label" for="email-address">Delivré Par <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <input type="text" class="form-control" id="devlivrePar">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Date Emission <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <div class="form-icon form-icon-right">
                              <em class="icon ni ni-calendar-alt"></em>
                           </div>
                           <input type="text" class="form-control date-picker" id="dateEmission">
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                        <label class="form-label" for="pay-amount">Date Expiration <span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                           <div class="form-icon form-icon-right">
                              <em class="icon ni ni-calendar-alt"></em>
                           </div>
                           <input type="text" class="form-control date-picker" id="dateExpiration">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <a  class="btn btn-icon btn-small btn-primary" id="btnAddAutoPecheToCollection"><em class="icon ni ni-plus"></em></a>
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
                  <label class="form-label" for="email-address">Zone de pêche <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="zondPeche">
                        <option value="default_option">Default Option</option>
                        <option value="option_select_name">Option select name  </option>
                        <option value="option_select_name">Option select name</option>
                     </select>
                  </div>
               </div>

               <div class="form-group">
                  <label class="form-label" for="phone-no">Espèce <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="especeForPeche">
                          @foreach ($lesNavires as $i )
                                 <option value="Ravitaillement">{{$i->Nom_Navire}} {{$i->Nom_Navire}}</option>
                             @endforeach
                     </select>
                  </div>
               </div>

               <div class="form-group">
                  <label class="form-label" for="phone-no">Engin <span class="text-danger">*</span></label>
                  <div class="form-control-wrap">
                     <select class="form-select js-select2" data-search="on" id="engin">
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
</div>
<div class="row g-gs  mt-1 p-2">
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
                                <th class="tb-col-os"><span class="overline-title">Identificateur <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">Delivré Par</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Date Emission</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Date Expiration</span></th>
                                <th class="tb-col-time"><span class="overline-title">Zone de pêche</span></th>
                                <th class="tb-col-time"><span class="overline-title">Espèce</span></th>
                                <th class="tb-col-time"><span class="overline-title">Engin</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                            </tr>
                        </thead><tbody id="iciAddRetourPecheOk">
                           
                            {{-- <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.  154.22586 . 188.154. 225  86.188.154.   22586.188.1   54.225</span></td>
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

