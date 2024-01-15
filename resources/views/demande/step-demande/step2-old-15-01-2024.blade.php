@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg">
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">
            <div class="nk-content nk-content-lg nk-content-fluid">
               <div class="container-xl wide-lg">
                  <div class="nk-content-inner">
                     <div class="nk-content-body">
                        {{-- 
                        <div class="row">
                           <div class="col-6">
                              <div class="">
                                 <div class=""><a class="back-to text-danger" href="{{route('home.demandes.naviredemande.index',["idNavireStep1"=>session('step1')['navire-selected']]) }}" ><em class="icon ni ni-arrow-left"></em><span>go to section 1</span></a></div>
                              </div>
                           </div>
                           <div class="col-6 justify-end">
                              <ul>
                                 <li><a >Accueil</a> > <a >Etape 1 </a> > <a class="text-danger" href="#">Etape 2 </a> > <a>Etape 3</a> > <a>Fin</a>  </li>
                              </ul>
                           </div>
                        </div>
                        --}}
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
                                       <a href="{{route("home.demandes.naviredemande.index")}}" class="btn text-white btn-outline-dark bg-dark "><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                                    </li>
                                    <li> 
                                       <a href="" class="btn btn-dark" style="background-color:#066C02"><em class="icon ni ni-home"></em><span>Mes demandes</span></a>
                                    </li>
                                 </ul>
                                 {{-- 
                                 <li class="order-md-last">
                                    <a href="{{route("home.demandes.naviredemande.index")}}" class="btn text-white btn-outline-dark bg-dark    d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                                 </li>
                                 <li class="order-md-last">
                                    <a href="{{route("home.demandes.naviredemande.index")}}" class="btn text-white btn-outline-dark bg-dark    d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                                 </li>
                                 --}}
                                 <br>
                                 {{-- 
                                 <li class="order-md-last"><a href="#"  style=" display: none;" id="btnAfficheSelectNavire" class="btn  btn-dark"><span><em class="icon ni ni-trash-alt"></em> Test Something </span></a></li>
                                 --}}
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
                        <br>
                        {{-- 
                        <div class="nk-block">
                           <div class="nk-news card card-bordered">
                              <div class="card-inner">
                                 <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                       <div class="nk-news-icon">
                                          <em class="icon ni ni-card-view"></em>
                                       </div>
                                       <div class="nk-news-text">
                                          <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                                          <em class="icon ni ni-external"></em>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <!-- .card -->
                        </div>
                        <br> --}}
                        @if ($errors->any())
                        @foreach ($errors->all() as $error )
                        <p>pas bon il ya des erreurs</p>
                        @endforeach
                        @endif
                        <hr>
                     </div>
                     <!-- .nk-block-head -->
                     <form action="home.demandes.traitStep2.index" method="get">
                        <div class="justify-center">
                           <div id="loading-svg" style=" display: none;" class="pl-5 ">
                              <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                           </div>
                        </div>
                        <div class="" id="formAjoutNewNAvire"  >
                           <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
                              <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                                 <div class="number-square">
                                    A 
                                 </div>
                              </div>
                           </div>
                           <div class="justify-end">
                              <a href="#" id="btnAddCaptureToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter </a>
                              {{-- <a href="#" id="Ajouter-navire" class="btn btn-dark m-1"> <em class="icon ni ni-trash-alt"></em> </a> --}}
                           </div>
                           <div class="nk-kycfm">
                              <div class="row g-4 mb-3">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="form-label" for="full-name">Espèce  <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                                       <label class="form-label" for="pay-amount">Qté à Bord  <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                                       <label class="form-label" for="phone-no">Zone de capture  <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                                       <label class="form-label" for="pay-amount">Qté à Débarquer  <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                                    <label class="form-label" for="email-address">Produit  <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                           <div class="row ">
                              <table class="table table-ulogs">
                                 <thead class="table-light" style="backgr">
                                    <tr>
                                       <th class="tb-col-os"><span class="overline-title">Espèce <span class="d-sm-none">/ IP</span></span></th>
                                       <th class="tb-col-ip"><span class="overline-title">Produit</span></th>
                                       <th class="tb-col-ip"><span class="overline-title">Zone de capture</span></th>
                                       <th class="tb-col-ip"><span class="overline-title">Qté à Bord </span></th>
                                       <th class="tb-col-time"><span class="overline-title">Qté à Débarquer</span></th>
                                       <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                    </tr>
                                 </thead>
                                 <tbody id="iciAddRetourAcptureOk">
                                    @if ($lesCaptures)
                                    @foreach ($lesCaptures as $myCapture)
                                    <tr>
                                       <span class="text-white" >{{$myCapture->id}}</span>
                                       <td class="tb-col-os">{{$myCapture->espece}}</td>
                                       <td class="tb-col-ip"><span class="sub-text">{{$myCapture->Produit}}</span></td>
                                       <td class="tb-col-ip"><span class="sub-text">{{$myCapture->zone_capture}}</span></td>
                                       <td class="tb-col-ip"><span class="sub-text">{{$myCapture->qte_a_bord}}</span></td>
                                       <td class="tb-col-time"><span class="sub-text"><span class="d-none d-sm-inline-block">{{$myCapture->qte_debarque}}</span></span></td>
                                       <td class="tb-col-action"><a href="javascript:void(0);" data-id="{{$myCapture->id}}" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    {{-- 
                                    <tr>
                                       <td class="tb-col-os">Mozilla on Window</td>
                                       <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                       <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                       <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                       <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                       <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                    </tr>
                                    --}}
                                 </tbody>
                              </table>
                           </div>
                     </form>
                     <hr style="color:red">
                     <div class="nk-block-between-md g-4">
                     <div class="nk-block-head-content">
                     </div>
                     <div class="nk-block-head-content">
                     <div>
                     <li class="order-md-last"><a href="{{route("home.demandes.traitStep2.index")}}" class="btn btn-xl btn-white btn-dim btn-outline-danger"><span>Etape 3</span></a></li>
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
@endsection