@extends("layouts.master")
@section("content")
<div class="nk-content-inner">
   <div class="nk-content-body">
      <div class="kyc-app wide-sm m-auto">
         <div class="example-alert">
            <div class="alert alert-pro alert-warning">
               <div class="nk-content nk-content-lg nk-content-fluid">
                  <div class="container-xl wide-lg">
                     <div class="nk-content-inner">
                        <div class="nk-content-body ml-5 mr-5">
                           <div class=""><a class="back-to text-danger" href="{{route("home.demandes.uploadfiledemande.index")}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
                           <br>
                           <hr>
                           <div class="nk-block-between-md g-4">
                              <div class="nk-block-head-content">
                                 <h2 class="nk-block-title fw-normal">Récapitulatif </h2>
                                 <div class="nk-block-des">
                                    <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                 </div>
                              </div>
                              <div class="nk-block-head-content">
                                 <div>
                                    {{-- <a href="#" id="btnAddCaptureToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter </a> --}}
                                    {{-- <a href="#" id="Ajouter-navire" class="btn btn-dark m-1"> <em class="icon ni ni-trash-alt"></em> </a> --}}
                                 </div>
                                 <li>
                                    <div id="loading-svg" style=" display: none;" class="pl-5">
                                       <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                                    </div>
                                 </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- .nk-block-head -->
                        <hr>
                        <br>
                        <div class="container-xl wide-lg ">
                           <div class="nk-content-inner">
                              <div class="nk-content-body">
                                 <div class="nk-block-head">
                                    <div class="nk-block-between-md g-3">
                                       <div class="nk-block-head-content">
                                          {{-- 
                                          <div class="nk-block-head-sub"><span class="text-danger">Fait le 12 Novembre 2023 !</span></div>
                                          --}}
                                          <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                             <div>
                                                <h2 class="nk-block-title fw-normal text-danger">DPEP-01A-154</h2>
                                             </div>
                                             {{-- 
                                             <div><a href="html/invest/schemes.html" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ms-2"></em></a></div>
                                             --}}
                                          </div>
                                          <div class="nk-block-des">
                                             {{-- 
                                             <p>ci-dessous le recapitulatif de votre demande</p>
                                             --}}
                                          </div>
                                       </div>
                                       <!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content d-none d-md-block">
                                          <div class="nk-slider nk-slider-s1">
                                             <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                                <div class="slider-item">
                                                   <div class="nk-iv-wg1">
                                                      <div class="nk-iv-wg1-sub sub-text text-danger">Fait le 12 Novembre 2023</div>
                                                      <h6 class="nk-iv-wg1-info title">Brouillon Enregistré </h6>
                                                      {{-- <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a> --}}
                                                      <div class="nk-iv-wg1-progress">
                                                         <div class="progress-bar bg-primary" data-progress="80"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- .slider-item -->
                                                <div class="slider-item">
                                                   <div class="nk-iv-wg1">
                                                      <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                      <h6 class="nk-iv-wg1-info title">Demande non validée</h6>
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                      <div class="nk-iv-wg1-progress">
                                                         <div class="progress-bar bg-primary" data-progress="80"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- .slider-item -->
                                                <div class="slider-item">
                                                   <div class="nk-iv-wg1">
                                                      <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                      <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6>
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                      <div class="nk-iv-wg1-progress">
                                                         <div class="progress-bar bg-primary" data-progress="80"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- .slider-item -->
                                             </div>
                                             <div class="slider-dots"></div>
                                          </div>
                                          <!-- .nk-slider -->
                                       </div>
                                       <!-- .nk-block-head-content -->
                                    </div>
                                    <!-- .nk-block-between -->
                                 </div>
                                 <!-- .nk-block-head -->
                                 <div class="nk-block">
                                    <div class="nk-news card card-bordered">
                                       <div class="card-inner">
                                          <div class="nk-news-list">
                                             <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                   <em class="icon ni ni-card-view text-danger"></em>
                                                </div>
                                                <div class="nk-text text-danger ">
                                                   <p> 1 - Detail concernant la demande effectuée <span> </span></p>
                                                   {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .card -->
                                 </div>
                                 <!-- .nk-block -->
                                 <div class="form-group mt-4">
                                    <label class="form-label" for="default-01"> A - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="Transbordement ">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> B - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="Abidjan Port d'accueil">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> C - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="11-Décembre-2023">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> D - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="11-Janvier-2024">
                                    </div>
                                 </div>
                                 <div class="example-alert">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em> <strong>Thanks for your deposit</strong>. Your account balance has been updated accordingly.
                                       <p>Your account balance has been updated accordingly.</p>
                                       <p>Your account balance has been updated accordingly. Your account balance has been updated accordingly.</p>
                                       <p>Your account balance has been updated accordingly.</p>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="nk-block">
                                    <div class="nk-news card card-bordered">
                                       <div class="card-inner">
                                          <div class="nk-news-list">
                                             <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                   <em class="icon ni ni-card-view text-danger"></em>
                                                </div>
                                                <div class="nk-text text-danger ">
                                                   <p> 2 - Detail concernant la demande effectuée <span> </span></p>
                                                   {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .card -->
                                 </div>
                                 <!-- .nk-block -->
                                 <div class="form-group mt-4">
                                    <label class="form-label" for="default-01"> A - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> B - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> C - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> D - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <div class="example-alert">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em> <strong>Thanks for your deposit</strong>. Your account balance has been updated accordingly.
                                       <p>Your account balance has been updated accordingly.</p>
                                       <p>Your account balance has been updated accordingly. Your account balance has been updated accordingly.</p>
                                       <p>Your account balance has been updated accordingly.</p>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> C - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> D - Ici ramener les informations liés au champs enregistrer dapuis la base </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="info@softnio.com">
                                    </div>
                                 </div>
                                 <hr style="color:red">
                                 <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                    </div>
                                    <div class="nk-block-head-content">
                                       <div>
                                          <li class="order-md-last"><a href="{{route("home.demandes.traiterecapedemande.index")}}" class="btn btn-xl btn-white btn-dim btn-outline-danger"><span>Valider</span></a></li>
                                       </div>
                                       <li>
                                          <div id="loading-svg" style=" display: none;" class="pl-5">
                                          </div>
                                       </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection