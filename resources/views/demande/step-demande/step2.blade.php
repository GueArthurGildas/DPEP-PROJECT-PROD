@extends("layouts.master")
@section("content")

<div class="nk-content nk-content-lg nk-content-fluid" >
   <div class="container-xl wide-lg" id="content-step2">

   <div class="nk-block-between-md g-4">
                           <div class="nk-block-head-content">
                              <h2 class="nk-block-title fw-normal">Les captures à bord du navire</h2>
                              <div class="nk-block-des">
                                 <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                              </div>
                           </div>
                           <div class="nk-block-head-content">
                              <div>
                                 <ul class="nk-block-tools g-3">
                                    <li> 
                                       <h5><a href="{{route("home.demandes.naviredemande.index")}}" class=" text-dark btn-outline-dark  "><em class="icon ni ni-arrow-left text-danger"></em><span>Retour</span></a></h5>
                                    </li>
                                    {{-- <li> 
                                       <a href="" class="btn btn-dark" style="background-color:#066C02"><em class="icon ni ni-home"></em><span>Mes demandes</span></a>
                                    </li> --}}
                                 </ul>
                                
                                 <br>
                                 
                              </div>
                              <li>
                                 {{-- 
                                 <div id="loading-svg" style=" display: none;" class="pl-5">
                                    <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                                 </div>
                                 --}}
                              </li>
                              </ul>
                           </div>
                        </div>
                         <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                              <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                                 <div class="number-square" style="background-color:green">
                                  <span> B </span>
                                 </div>
                              </div>
                           </div>
                        <hr>
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">
            <div class="nk-content nk-content-lg nk-content-fluid">
               <div class="container-xl wide-lg">
                  <div class="nk-content-inner">
                    
                     <!-- .nk-block-head -->
                     <form action="home.demandes.traitStep2.index" method="get">
                        <div class="justify-center">
                           <div id="loading-svg" style=" display: none;" class="pl-5 ">
                              <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                           </div>
                        </div>
                        <div class="" id="formAjoutNewNAvire"  >
                          
                           <div class="justify-end">
                              <a href="#" id="btnAddCaptureToCollection" class="btn btn-dark m-1"><em class="icon ni ni-plus"></em>Ajouter </a>
                              {{-- <a href="#" id="Ajouter-navire" class="btn btn-dark m-1"> <em class="icon ni ni-trash-alt"></em> </a> --}}
                           </div>
                           <div class="nk-kycfm">
                              <div class="row g-4 mb-3">
                              
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="form-label" for="full-name"><b>Espèce </b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       <div class="form-control-wrap">
                                          <select required class="form-select js-select2 " data-search="on" data-placeholder="Select  options" name="espece "   id="espece" required>
                                             <option ></option>
                                             <option value="espèces-1" >espèces-1</option>
                                             <option value="espèces-2">espèces-2</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="form-label" for="pay-amount"><b>Qté à Bord </b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       <div class="form-control-wrap">
                                          <input type="number" class="form-control"  name="qteBord" id="qteBord"  placeholder="Saisir  la quantités à bord pour l'espèce choisie " required>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                              <div class="row g-4 mb-3">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="form-label" for="phone-no"><b>Zone de capture </b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       <div class="form-control-wrap">
                                          <select required class="form-select js-select2" data-placeholder="Select  options" name="zoneCapture " id="zoneCapture" placeholder="-- Selectionner un port --" required>
                                             <option ></option>
                                             <option value="Zone-capture-1" >Zone-capture-1</option>
                                             <option value="Zone-capture-2">Zone-capture-2</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="form-label" for="pay-amount"><b>Qté à Débarquer  </b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       <div class="form-control-wrap">
                                          <input type="number" class="form-control" name="qteDebarque" id="qteDebarque" placeholder="Saisir  la quantités à debarquer pour l'espèce choisie " required>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                              <div class="row g-4">
                                 <div class="form-group">
                                    <label class="form-label" for="email-address"><b>Produit </b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <select required class="form-select js-select2" data-placeholder="Select  options" name=" produit" id="produit" placeholder="-- Selectionner un port --" required>
                                          <option ></option>
                                          <option value="Produit-1" >Produit- 1</option>
                                          <option value="Produit-2">Produit- 2</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <!-- .row -->
                           </div>
                           <hr>
                             <div class="nk-block">
                                 <div class="example-alert">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em><strong>les captures sont ajoutées ci-dessous</strong>
                                       <p></p>
                                    </div>
                                 </div>
                              </div>
                            {{--///////  ici viennent s'installer les captures nouvellement ajoutés,    --}}
                           <div class="row " id="iciAddRetourAcptureOk">
                                       @foreach ( $lesCaptures as $myCapture ) 
                                             <div class="content-capture-added">
                                                <span class="text-white" >{{$myCapture->id}}</span>
                                                <div class="ml-2 mr-2" id="testDelete">
                                                   <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                                                      <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left ml-3 mr-3" style="position: relative;">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="justify-end">
                                                   <a href="javascript:void(0);" data-id="{{$myCapture->id}}" onclick="myDelete(this)" class="btn btn-l btn-white text-danger btn-dim btn-outline-dark">[X]</a>
                                                </div>
                                                <div class="nk-kycfm">
                                                   <div class="row g-4 mb-3">
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="full-name">Espèce  <span class="text-danger"></label>
                                                            <div class="form-control-wrap">
                                                               <input type="number" class="form-control" placeholder="{{$myCapture->espece}}" disabled>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- .col -->
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="pay-amount">Qté à Bord  <span class="text-danger"></label>
                                                            <div class="form-control-wrap">
                                                               <input type="number" class="form-control" placeholder="{{$myCapture->qte_a_bord}}"   disabled>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- .col -->
                                                   </div>
                                                   <!-- .row -->
                                                   <div class="row g-4 mb-3">
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="phone-no">Zone de capture  <span class="text-danger"></label>
                                                            <div class="form-control-wrap">
                                                               <input type="number" class="form-control" placeholder="{{$myCapture->zone_capture}}"   disabled>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- .col -->
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="form-label" for="pay-amount">Qté à Débarquer  <span class="text-danger"></label>
                                                            <div class="form-control-wrap">
                                                               <input type="number" class="form-control" placeholder="{{$myCapture->qte_debarque}}"   disabled>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- .col -->
                                                   </div>
                                                   <!-- .row -->
                                                   <div class="row g-4">
                                                      <div class="form-group">
                                                         <label class="form-label" for="email-address">Produit  <span class="text-danger"></label>
                                                         <div class="form-control-wrap">
                                                            <input type="number" class="form-control" placeholder="{{$myCapture->Produit}}"   disabled>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- .row -->
                                                </div>
                                                <hr>
                                             </div>
                                       @endforeach
                                
                           </div>
                     </form>
                    
                     <div class="nk-block-between-md g-4">
                     <div class="nk-block-head-content">
                     </div>
                     <div class="nk-block-head-content">
                     <div>
                     <li class="order-md-last">
                        <a href="javascript:void(0);" class="btn btn-l btn-white btn-dim btn-outline-dark" onclick="showSpinnerLoadingToGoOnStep3()" ><span>Suivant</span><em class="icon ni ni-arrow-right"></em></a>
                        <form id="FormStep2" action="{{route("home.demandes.traitStep2.index")}}" method="GET" class="d-none">
                                 @csrf
                        </form>
                    
                     </li>
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
<div class="justify-center"  >
         <div id="text-content-loading-step2" style="display:none;">
            <h3 class="mt-5" id="preparation-text" >suivant ...</h3>
            <div></div>
            <div class="spinner-border justify-center"  style="width: 5rem; height: 5rem" role="status"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
@endsection