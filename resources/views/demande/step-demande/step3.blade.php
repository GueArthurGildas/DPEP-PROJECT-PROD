@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg" id="content-step3">
               <div class="nk-block-between-md">
                  <div class="nk-block-head-content">
                     <h2 class="nk-block-title fw-normal">Les autorisations de pêches</h2>
                     <div class="nk-block-des">
                        <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                     </div>
                  </div>
                  <div class="nk-block-head-content">
                     <div>
                        <ul class="nk-block-tools g-3">
                           <li> 
                              <h5><a href="{{route('home.demandes.caputredemande.index',["checkhascaptures"=>true]) }}" class=" text-dark btn-outline-dark  "><em class="icon ni ni-arrow-left text-danger"></em><span>Retour</span></a></h5>
                           </li>
                           {{-- <li> 
                              <a href="{{route('home.demandes.caputredemande.index',["checkhascaptures"=>true]) }}" class="btn text-white btn-outline-dark bg-dark "><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
                           </li>
                           <li> 
                              <a href="" class="btn btn-dark" style="background-color:#066C02"><em class="icon ni ni-home"></em><span>Mes demandes</span></a>
                           </li> --}}
                        </ul>
                       
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
                                    <!-- .nk-block-head -->
                     <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                           <div class="number-square style" style="background-color:green">
                              D 
                           </div>
                        </div>
                     </div>
               <hr>
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">
            <div class="nk-content nk-content-lg nk-content-fluid">
               
               <div class="container-xl wide-lg">
                  <div class="nk-content-inner">
                     <div class="nk-content-body">

                        @if ($errors->any())
                        @foreach ($errors->all() as $error )
                        <p>pas bon il ya des erreurs</p>
                        @endforeach
                        @endif
                        
                     </div>

                     <div class="justify-end">
                        <a href="#" id="btnAddAutoPecheToCollection" class="btn btn-dark "><em class="icon ni ni-plus"></em>Ajouter </a>     
                     </div>
                     <form>
                        <div class="row g-gs ">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="form-label" for="full-name"><b>Identificateur </b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                 <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="Identificateur">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="email-address"> <b>Delivré Par</b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                 <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="devlivrePar">
                                 </div>
                              </div>
                              <div class="row mb-3">
                                 <div class="col-6">
                                    <div class="form-group">
                                       <label class="form-label" for="pay-amount"><b>Date Emission</b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
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
                                       <label class="form-label" for="pay-amount"><b>Date Expiration </b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
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
                                 <label class="form-label" for="email-address"> <b>Zone de pêche</b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                 <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-search="on" id="zondPeche">
                                       <option value="default_option"></option>
                                       <option value="option_select_name">Option select name  </option>
                                       <option value="option_select_name">Option select name</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="phone-no"><b>Espèce </b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                 <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-search="on" id="especeForPeche">
                                       <option value="default_option"></option>
                                       <option value="option_select_name">Option select name</option>
                                       <option value="option_select_name">Option select name</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="form-label" for="phone-no"><b>Engin</b> <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                 <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-search="on" id="engin">
                                       <option value="default_option"></option>
                                       <option value="option_select_name">Option select name</option>
                                       <option value="option_select_name">Option select name</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="nk-block">
                                 <div class="example-alert">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em><strong>les autorisations sont ajoutées ci-dessous</strong>
                                       <p></p>
                                    </div>
                                 </div>
                              </div>
                     </form>
                     
                     <div class="g-gs " id="iciAddRetourPecheOk">
                              @foreach ( $lesAutoPeches as $autoPeche )
                                     <div class=" row g-4 mb-3  content-autopeche-added">
                    
            <div class="ml-2 mr-2" id="testDelete">
            <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left ml-3 mr-3" style="position: relative;">
                </div>  
            </div>
        </div>
        <div class="justify-end">
            <a href="javascript:void(0);" data-id="{{$autoPeche->id}}"  onclick="myDeleteAutoPeche(this)" class="btn btn-l btn-white btn-dim btn-outline-dark text-danger" >[X]</a>
        </div>
        <div class="col-lg-6">
           <div class="form-group">
              <label class="form-label" for="full-name">Identificateur <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                 <input type="text" class="form-control" id="Identificateur" placeholder={{$autoPeche->identif_auto_peche}}  disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="email-address">Delivré Par <span class="text-danger">  </span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                 <input type="text" class="form-control" id="devlivrePar" placeholder={{$autoPeche->Deliv_Par}}   disabled>
              </div>
           </div>
           <div class="row mb-3">
              <div class="col-6">
                 <div class="form-group">
                    <label class="form-label" for="pay-amount">Date Emission <span class="text-danger"></span> <strong class="text-danger"></strong></label>
                    <div class="form-control-wrap">
                       <div class="form-icon form-icon-right">
                          <em class="icon ni ni-calendar-alt"></em>
                       </div>
                       <input type="text" class="form-control date-picker" id="dateEmission" placeholder={{$autoPeche->Date_Stat_Activities}}   disabled>
                    </div>
                 </div>
              </div>
              <div class="col-6">
                 <div class="form-group">
                    <label class="form-label" for="pay-amount">Date Expiration <span class="text-danger"></span> <strong class="text-danger"></strong></label>
                    <div class="form-control-wrap">
                       <div class="form-icon form-icon-right">
                          <em class="icon ni ni-calendar-alt"></em>
                       </div>
                       <input type="text" class="form-control date-picker" id="dateExpiration" placeholder={{$autoPeche->Date_end_Activities}}   disabled >
                    </div>
                 </div>
              </div>
           </div>
           
        </div>
        <div class="col-lg-6">
           <div class="form-group">
              <label class="form-label" for="email-address">Zone de pêche <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder={{$autoPeche->Zone_peche}}   disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="phone-no">Espèce <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder={{$autoPeche->espece}}   disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="phone-no">Engin <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder={{$autoPeche->engin}}   disabled>
              </div>
           </div>
        </div>
            </div>
                              @endforeach
                     </div>

                     <br>
                    <hr>
                     <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                        </div>
                        <div class="nk-block-head-content">
                           <div>
                           
                              <li class="order-md-last">
                              
                                 <a href="javascript:void(0);" class="btn btn-l btn-white btn-dim btn-outline-dark" onclick="showSpinnerLoadingToGoOnStep4()"><span>Suivant</span><em class="icon ni ni-arrow-right"></em></a>
                                 <form id="FormStep3" action="{{route("home.demandes.uploadfiledemande.index")}}" method="GET" class="d-none">
                                   
                                 </form>
                              </li>
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
         <div id="text-content-loading-step3" style="display:none;">
            <h3 class="mt-5" id="preparation-text" >suivant ...</h3>
            <div></div>
            <div class="spinner-border justify-center"  style="width: 5rem; height: 5rem" role="status"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </div>
</div>
@endsection