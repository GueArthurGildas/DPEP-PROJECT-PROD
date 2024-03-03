@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid " id="content-step1">
   <div class="container-xl wide-lg ">
    <div class="nk-block-between-md g-4" >
                              <div class="nk-block-head-content">
                                 <h2 class="nk-block-title fw-normal">Navire & Port d'accueil</h2>
                                 <div class="nk-block-des">
                                    <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                 </div>
                              </div>
                              <div class="nk-block-head-content">
                                 <div>
                                    <ul class="nk-block-tools g-3">
                                    
                                       <li> 
                                          <a href="#" id="Ajouter-navire" class="btn btn-l btn-white btn-dim btn-outline-dark"  ><em class="icon ni ni-plus"></em> Ajouter un navire</a>
                                       </li>
                                       {{-- <li> 
                                          <a href="{{route("home.demandes.naviredemande.index")}}" class="btn btn-secondary" style="background-color:#066C02" ><em class="icon ni ni-home"></em><span>Mes demandes</span></a>
                                       </li> --}}
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
                            <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                                 <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                                    <div class="number-square" style="background-color:green">
                                       A 
                                    </div>
                                 </div>
                              </div>
                        <hr>
      <div class="example-alert" >
         <div class="alert alert-pro alert-warning ">
            <div class="nk-content-inner ">
            
               <div class="nk-content-body ">
               
                  <div class="nk-content nk-content-lg nk-content-fluid">
                     <div class="container-xl wide-lg"></div>
                     <div class="nk-content-inner">
                     
                        <div class="nk-content-body ">
                           {{-- 
                           <div class="row">
                              <div class="col-6">
                                 <div class=""><a class="back-to text-danger" href="{{route('home')}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
                              </div>
                              <div class="col-6 justify-end">
                                 <ul>
                                    <li><a href="#">Accueil</a> > <a class="text-danger" href="#">Etape 1 </a> > <a href="#">Etape 2 </a> > <a href="#" >Etape 3</a> > <a href="#">Fin</a>  </li>
                                 </ul>
                              </div>
                           </div>
                           <br> --}}
                          </div>
                        <!-- .nk-block-head -->
                        
                        <form action="{{route("home.demandes.traitStep1.index")}}" id="FormStep1" method="post">
                        @csrf
                        <div class="row g-4 mb-3">
                           <div class="col-12">
                             
                              <div class="nk-block">
                                 <div class="example-alert">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em> <strong>Selectionner un navire</strong>
                                       <p>Faites une recherche dans le champ afin de selectionner le navire concerné par la demande</p>
                                    </div>
                                 </div>
                              </div>
                              <div id="sectionSelectNavire">
                                 <div class="" >
                                    <br>
                                    {{-- 
                                    <div class="justify-end mt-2">
                                       <div class="form-group ">
                                          <a href="#" id="valide-select-navire" class="btn btn-danger"><em class="icon ni ni-search"></em>Rechercher</a>
                                          <a href="#" id="Ajouter-navire" class="btn btn-dark"><em class="icon ni ni-plus"></em> Ajouter un navire</a>
                                       </div>
                                    </div>
                                    --}}
                                    <div class="form-group" >
                                       <label class="form-label">
                                       <em class="icon ni ni-search"></em> <b>Selectionner le Navire</b> <span class="text-danger"> * </span>
                                       </label>
                                       </label>
                                       
                                       <input type="text" name="navire-selected"  id="takeIdNavireSelected" value="@if(Session::has("step1")) {{session('navireSelectedData')['id']}} @else {{old('navire-selected')}} @endif"  class=""  style="display:none" required >
                                       <div class="form-control-wrap field-navire" >
                                          <select class="form-select js-select2 "    data-search="on" id="navire-selected" onchange="getSelectNavire()" data-placeholder="Selectionner un navire"  >
                                             <option value="default_option"><em class="icon ni ni-search"></em> Selectionner un navire </option>
                                             @foreach ( $lesNavires as $i )
                                             <option value="{{$i->id}}">{{$i->Nom_Navire}} |  {{$i->Etat_Pavillon}}    </option>
                                             @endforeach 
                                          </select>
                                           @if ($errors->hasAny("navire-selected"))
                                                 <p class="text-danger"> <b>Veuillez senlectionner un navire *</b></p>
                                           @endif
                                       </div>
                                    </div>
                                    
                                    {{-- ici le loading svg  --}}
                                    <div id="loading-svg" style=" display: none;">
                                       <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                                    </div>
                                    <div class="" id="blockToShowNavireDetailSelected"  >
                                       <div class="form-group">
                                          <label class="form-label" for="pay-amount">1- Etat du pavillon  </label>
                                          <div class="form-control-wrap">
                                             <input type="text" class="form-control "   id="etatPavillon"  value="@if(Session::has("step1")) {{session('navireSelectedData')['Etat_Pavillon']}} @endif"  disabled>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="form-label" for="pay-amount">2- Type de Navire  </label>
                                          <div class="form-control-wrap">
                                             <input type="text" class="form-control "   id="typeNavire" name="typeNavire" value="@if(Session::has("step1")) {{session('navireSelectedData')['Type_Navire']}} @else {{old('typeNavire')}}  @endif" disabled>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="form-label" for="pay-amount">3- IRCS   </label>
                                          <div class="form-control-wrap">
                                             <input type="text" class="form-control "  id="ircsNavire"  value="@if(Session::has("step1")) {{session('navireSelectedData')['Num_IRCS']}} @endif" disabled>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="form-label" for="pay-amount">4- Id certificat d'immatriculation  </label>
                                          <div class="form-control-wrap">
                                             <input type="text" class="form-control "   id="certifNavire"  value="@if(Session::has("step1")) {{session('navireSelectedData')['Id_Certificat_Immat']}} @endif" disabled>
                                          </div>
                                       </div>
                                       <br>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="" id="formAjoutNewNAvire"  >
                           <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                              <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                                 
                              </div>
                           </div>
                           <div class="example-alert">
                              <div class="alert alert-success alert-icon">
                                 <em class="icon ni ni-check-circle"></em> <strong>Description des champs</strong>
                                 <p>Port de la dernière escale : le Port où le bateau a fait escale pour la dernière fois.</p>
                                 <p>Objet de l'accès au port : la raison pour laquelle le bateau souhaite accéder à un port.</p>
                                 <p>Date d'arrivée estimée : date à laquelle le bateau est susceptible d'arriver au port.</p>
                              </div>
                           </div>
                           <div class="nk-kycfm">
                              <div class="row g-4 mb-3">
                                 <div class="col-md-12">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label"></b>Port d'escale envisagé</b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group">
                                          {{-- <input type="text" class="form-control form-control-lg"> --}}
                                          <select id="pays"  class="form-select-lg js-select2 form-control form-control-lg"  name="portEscalEnvisage" data-placeholder="Selectionner le pays" required>
                                             <option value="@if(Session::has("step1")) {{session('step1')['portEscalEnvisage']}} @else {{old('portEscalEnvisage')}}  @endif">@if(Session::has("step1")) {{session('step1')['portEscalEnvisage']}} @else {{old('portEscalEnvisage')}}  @endif</option> 
                                             <option value="Abidjan" >Abidjan</option>
                                             <option value="San-Pedro">San-Pedro</option>
                                             {{-- 
                                             <option value="option_select_name"></option>
                                             --}}
                                          </select>
                                          @if ($errors->hasAny("portEscalEnvisage"))
                                                 <p class="text-danger"> <b>Le port d'escale envisgé est réquis *</b></p>
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                              <div class="row g-4 mb-3">
                                 <div class="col-md-12">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label"><b>Objet de l'accès au port </b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group" >
                                          <select  id="objetAccesPort"  onchange="getObjectPort()" class="form-select js-select2" multiple="multiple" name='testValue' data-placeholder="@if(Session::has("step1")) {{session('step1')['objetAccesPort']}}   @endif" value=" " required >
                                             
                                             <option value="-Ravitaillement">Ravitaillement</option>
                                             <option value="-Debarquement">Débarquement</option>
                                             <option value="-Transbordement">Transbordement</option>
                                             <option value="-Escale Technique">Escale Technique</option>
                                             <option value="-Autre">Autre </option>
                                          </select>
                                           @if ($errors->hasAny("objetAccesPort"))
                                                 <p class="text-danger"> Veuillez senlectionner l'objet de votre accès au port</p>
                                           @endif
                                          {{-- <small class="text-primary">Veuillez cliquer ici si vous vloulez ajouter un motif d'entrée au port</small> --}}
                                       </div>
                                    </div>
                                    <div class="form-group mt-2"  id="containAutreObjetAccPort" style="display:none">
                                       <label class="form-label text-danger">~ Autre objet d'accès au port <span class="text-danger"> * </span> </label>
                                       <input type="text" class="form-control"   placeholder="Saisir l'objet de votre entrée au port " required>
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                              <div class="row g-4 mb-3">
                                 <div class="col-md-6">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label"><b>Date de la dernière escale</b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group">
                                          <input type="text" class="form-control date-picker" id="dateLastEscale" placeholder="YYYY-MM-JJ" name="dateLastEscale"  value="@if(Session::has("step1")) {{session('step1')['dateLastEscale']}} @else {{old('dateArriveEstim')}}  @endif" required>
                                       </div>
                                        @if ($errors->hasAny("dateLastEscale"))
                                                 <p class="text-danger"> date obligatoire </p>
                                        @endif
                                    </div>
                                 </div>
                                 <!-- .col -->
                                 <div class="col-md-6">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label"><b>Port de la dernière escale</b><span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group">
                                          <select required class="form-select js-select2" data-placeholder="" name="PortDernEscal" value="@if(Session::has("step1")) {{session('step1')['PortDernEscal']}} @else {{old('PortDernEscal')}}  @endif" placeholder="-- Selectionner un port --"  id="portDerniereEscale"   required>
                                             {{-- @if (Session::has("step1")) 
                                             <option value={{session('step1')['accueilPort']}}>{{session('step1')['accueilPort']}}</option>
                                             @endif  --}}
                                             <option value="@if(Session::has("step1")) {{session('step1')['PortDernEscal']}} @else {{old('PortDernEscal')}}  @endif">@if(Session::has("step1")) {{session('step1')['PortDernEscal']}} @else {{old('PortDernEscal')}}  @endif</option> 
                                             {{-- <option value="" ></option> --}}
                                             <option value="Option-1" >Option-1</option>
                                             <option value="Option-2">Option-2</option>
                                          </select>
                                          @if ($errors->hasAny("PortDernEscal"))
                                                 <p class="text-danger"> Le port de la dernière escale est obligatoire *</p>
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .col -->
                              </div>
                              <!-- .row -->
                              <div class="row g-4">
                                 <div class="col-md-6">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label"><b>Date d'arrivée estimée</b><span class="text-danger"> *</span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group">
                                          <input type="text" class="form-control date-picker" name="dateArriveEstim" id="dateArriveEstim"  value="@if(Session::has("step1")) {{session('step1')['dateArriveEstim']}} @else {{old('dateArriveEstim')}}  @endif"  placeholder="YYYY-MM-JJ" required>
                                       </div>
                                       @if ($errors->hasAny("dateArriveEstim"))
                                                 <p class="text-danger"> date obligatoire *</p>
                                        @endif
                                    </div>
                                 </div>
                                 <!-- .col -->
                                 <div class="col-md-6 mt-4 ">
                                    <div class="form-group mt-2">
                                       <div class="form-label-group">
                                          <label class="form-label">Heure d'arrivée estimée <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici "></strong></label>
                                       </div>
                                       <div class="form-control-group">
                                          <div class="row g-4">
                                             <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                   <div class="form-control-wrap" required>
                                                      <select class="form-select js-select2" data-placeholder="Select Multiple options" name="heureArriveEstim" id="heureArriveEstim" required>
                                                         @for ($i = 0; $i < 24; $i++)
                                                         @if ($i<10)
                                                         <option value={{$i}}>0{{$i}} H</option>
                                                         @endif
                                                         @if ($i>=10)
                                                         <option value={{$i}}>{{$i}} H</option>
                                                         @endif
                                                         @endfor
                                                      </select>
                                                      <label class="form-label-outlined" for="outlined-default1">Heure </label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                   <div class="form-control-wrap">
                                                      <select class="form-select js-select2" data-placeholder="Select Multiple options" name="minuteArriveEstim" id="minuteArriveEstim" required>
                                                         @for ($i = 0; $i <= 60; $i++)
                                                         @if ($i<10)
                                                         <option value={{$i}}>0{{$i}}</option>
                                                         @endif
                                                         @if ($i>=10)
                                                         <option value={{$i}}>{{$i}}</option>
                                                         @endif
                                                         @endfor
                                                      </select>
                                                      <label class="form-label-outlined" for="outlined-default">Min</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 {{-- ici l'element qui enregistre reelement la valeur de l'objet à envoyer --}}
                                 <input type="text" id="getObjectAccessPort" name="objetAccesPort"  value="@if(Session::has("step1")) {{session('step1')['objetAccesPort']}} @else {{old('objetAccesPort')}}  @endif" class="" style="display:none"  >
                                 <!-- .col -->
                                 <!-- .row -->
                              </div>
                              <hr>
                              <br>
                              <div class="nk-block-between-md g-4">
                                 <div class="nk-block-head-content">
                                 </div>
                                 <div class="nk-block-head-content">
                                    <div>
                                       {{-- <a href="#" id="Ajouter-navire" class="btn btn-danger"><em class="icon ni ni-plus"></em> Ajouter un navire</a> --}}
                                       <a href="javascript:void(0);" onclick="showSpinnerLoadingToGoOnStep2()" class="btn btn-l btn-white btn-dim btn-outline-dark" ><span>Suivant</span><em class="icon ni ni-arrow-right"></em></a>
                                       {{-- 
                                       <li class="order-md-last">
                                          <input type="submit" class="btn btn-wider btn-primary"value="Suivant" style="background-color:#066C02"> 
                                       </li>
                                       --}}
                                    </div>
                                    <li>
                                       <div id="loading-svg" style=" display: none;" class="pl-5">
                                       </div>
                                    </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           </form>
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
         <div id="text-content-loading" style="display:none;">
            <h3 class="mt-5" id="preparation-text" >suivant ...</h3>
            <div></div>
            <div class="spinner-border justify-center"  style="width: 5rem; height: 5rem" role="status"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
         </div>
      </div>
</div>
@endsection