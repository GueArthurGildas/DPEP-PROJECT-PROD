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
                           <div class="row">
                              <div class="col-6">
                                 <div class=""><a class="back-to text-danger" href="{{route('home.demandes.caputredemande.index',["checkhascaptures"=>true]) }}" ><em class="icon ni ni-arrow-left"></em><span>Retour</span></a></div>
                              </div>
                              <div class="col-6 justify-end">
                                 <ul>
                                    <li><a >Accueil</a> > <a >Etape 1 </a> > <a>Etape 2 </a> > <a class="text-danger" href="#">Etape 3</a> > <a>Fin</a>  </li>
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
                           <div class="nk-block-between-md g-4">
                              <div class="nk-block-head-content">
                                 <h2 class="nk-block-title fw-normal">Les autorisations de pêches</h2>
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
                        <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
                           <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                              <div class="number-square">
                                 B 
                              </div>
                           </div>
                        </div>
                        <div class="justify-end">
                           <a href="#" id="btnAddAutoPecheToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter </a>     
                        </div>
                        <form>
                           <div class="row g-gs  mt-1">
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="form-label" for="full-name">Identificateur <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="Identificateur">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="email-address">Delivré Par <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="devlivrePar">
                                    </div>
                                 </div>
                                 <div class="row mb-3">
                                    <div class="col-6">
                                       <div class="form-group">
                                          <label class="form-label" for="pay-amount">Date Emission <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
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
                                          <label class="form-label" for="pay-amount">Date Expiration <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
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
                                    {{-- <a  class="btn btn-icon btn-small btn-dark" id="btnAddAutoPecheToCollection"><em class="icon ni ni-plus"></em></a>
                                    <a href="#" class="btn btn-icon btn-small btn-dark"><em class="icon ni ni-trash"></em></a> --}}
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="form-label" for="email-address">Zone de pêche <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" data-search="on" id="zondPeche">
                                          <option value="default_option">Default Option</option>
                                          <option value="option_select_name">Option select name  </option>
                                          <option value="option_select_name">Option select name</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="phone-no">Espèce <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" data-search="on" id="especeForPeche">
                                          <option value="option_select_name">Option select name  </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="phone-no">Engin <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" data-search="on" id="engin">
                                          <option value="default_option">Default Option</option>
                                          <option value="option_select_name">Option select name</option>
                                          <option value="option_select_name">Option select name</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                        <hr>
                        <div class="row g-gs ">
                           {{-- 
                           <div class="card-head">
                              <h5 class="card-title">Contact Form</h5>
                           </div>
                           --}}
                           <div >
                           </div>
                           <table class="table table-ulogs ">
                              <thead class="table-light ">
                                 <tr>
                                    <th class="tb-col-os text-dark"><span class="overline-title">Identificateur <span class="d-sm-none"></span></span></th>
                                    <th class="tb-col-ip"><span class="overline-title">Delivré Par</span></th>
                                    <th class="tb-col-ip"><span class="overline-title">Date Emission</span></th>
                                    <th class="tb-col-ip"><span class="overline-title">Date Expiration</span></th>
                                    <th class="tb-col-time"><span class="overline-title">Zone de pêche</span></th>
                                    <th class="tb-col-time"><span class="overline-title">Espèce</span></th>
                                    <th class="tb-col-time"><span class="overline-title">Engin</span></th>
                                    <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                                 </tr>
                              </thead>
                              <tbody id="iciAddRetourPecheOk">
                                 @if ($lesAutoPeches)
                                 @foreach ($lesAutoPeches as $autoPeches )
                                 <tr>
                                    <td class="tb-col-os">{{$autoPeches->identif_auto_peche}}<span class="sub-text text-white">{{$autoPeches->id}}</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">{{$autoPeches->Deliv_Par}}</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">{{$autoPeches->Date_Deliv_Autorisation}}</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">{{$autoPeches->Date_end_Activities}}</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">{{$autoPeches->Zone_peche}}</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">{{$autoPeches->espece}}</span></td>
                                    <td class="tb-col-time"><span class="sub-text">{{$autoPeches->engin}}<span class="d-none d-sm-inline-block">{{$autoPeches->id}}</span></span></td>
                                    <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDeleteAutoPeche(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                 </tr>
                                 @endforeach
                                 @endif
                                 {{-- 
                                 <tr>
                                    <td class="tb-col-os">Mozilla on Window</td>
                                    <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">86.188.  154.22586 . 188.154. 225  86.188.154.   22586.188.1   54.225</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                    <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                    <td class="tb-col-time"><span class="sub-text">Nov 20, 2019 <span class="d-none d-sm-inline-block">10:34 PM</span></span></td>
                                    <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                                 </tr>
                                 --}}
                              </tbody>
                           </table>
                        </div>
                        <hr style="color:red">
                        <div class="nk-block-between-md g-4">
                           <div class="nk-block-head-content">
                           </div>
                           <div class="nk-block-head-content">
                              <div>
                                 <li class="order-md-last"><a href="{{route("home.demandes.uploadfiledemande.index")}}" class="btn btn-xl btn-white btn-dim btn-outline-danger"><span>Terminer</span></a></li>
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
 
@endsection