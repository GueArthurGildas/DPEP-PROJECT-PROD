@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg">
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">

<div class="nk-content-inner">
   <div class="nk-content-body">
         <div class="nk-content nk-content-lg nk-content-fluid">
            <div class="container-xl wide-lg"></div>
            <div class="nk-content-inner">
               <div class="nk-content-body">
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
                  <br>
                  {{-- <br>
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
                  <div class="alert alert-warning alert-icon">
                     <em class="icon ni ni-cross-circle"></em> <strong>Attention</strong> ! Rassurez-vous d'avoir selectionné le navire et remplir correctement les champs ci-dessous !.
                  </div>
                  <p class="text-danger"></p>
                  @endforeach
                  @endif
                  <hr>
                  <div class="nk-block-between-md g-4">
                     <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Navire & Port d'accueil</h2>
                        <div class="nk-block-des">
                           <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                     </div>
                     <div class="nk-block-head-content">
                        <div>
                           <li class="order-md-last"><a href="{{route("home.demandes.naviredemande.index")}}" class="btn  btn-dark" title="Rafraichir la page"><span><em class="icon ni ni-undo"></em></span></a></li>
                           <br>
                           <li class="order-md-last"><a href="#"  style=" display: none;" id="btnAfficheSelectNavire" class="btn  btn-dark"><span><em class="icon ni ni-trash-alt"></em></span></a></li>
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
               <form action="{{route("home.demandes.traitStep1.index")}}" method="post">
               @csrf
               <div class="row">
                  <div class="col-8">
                     <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                           <div class="number-square">
                              A 
                           </div>
                        </div>
                     </div>
                     <div id="sectionSelectNavire">
                        <div class="m-5" >
                           <br>
                           <div class="form-group" >
                              <label class="form-label text-danger">
                                 <h4> Veuillez choisir un Navire</h4>
                              </label>
                              </label>
                              <input type="text" name="navire-selected"  id="takeIdNavireSelected" @if($navireStep1) value={{$navireStep1->id}} @endif class=""  style="display:none" required >
                              <div class="form-control-wrap field-navire" >
                                 <select class="form-select js-select2 "    data-search="on" id="navire-selected" onchange="getSelectNavire()" data-placeholder="Selectionner un navire"  >
                                    <option value="default_option">-- Selectionner un navire --</option>
                                    @foreach ( $lesNavires as $i )
                                    <option value="{{$i->id}}">{{$i->Nom_Navire}} |  {{$i->Etat_Pavillon}}    </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="justify-end mt-2">
                              <div class="form-group ">
                                 {{-- <a href="#" id="valide-select-navire" class="btn btn-danger"><em class="icon ni ni-search"></em>Rechercher</a> --}}
                                 <a href="#" id="Ajouter-navire" class="btn btn-danger"><em class="icon ni ni-plus"></em> Ajouter un navire</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
                  <div class="col-4">
                     <div class="example-alert">
                        <div class="alert alert-light alert-icon">
                           <div class="card-inner h-100">
                              <div class="nk-refwg-head g-3">
                                 <div class="nk-refwg-title">
                                    <h5 class="title" id="enteteInfoNavire" >Détail du Navire  <em id="iconInfoNavireCheck" class="icon ni ni-check-fill-c "></em></h5>
                                    <div class="title-sub">Ci-dessous vous avez une breve descitpion du navire</div>
                                 </div>
                              </div>
                              <div class="nk-iv-wg2">
                                 <hr>
                                 <div class="nk-iv-wg2-text">
                                    {{-- 
                                    <div class="nk-iv-wg2-amount ui-v2"><span class="change up"><span class="sign"></span></span></div>
                                    --}}
                                    <ul class="nk-iv-wg2-list"  id="containNavireDetail">
                                       <li>
                                          <span class="item-label"><b>Nom : </b>  &ensp; </span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger" id="nomNavire">{{$navireStep1->Nom_Navire}} </span>
                                          @else
                                          <span class="item-value text-danger" id="nomNavire">_</span>
                                          @endif
                                       </li>
                                       <li>
                                          <span class="item-label"><b> Etat Pavillon  : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger" id="nomNavire">{{$navireStep1->Etat_Pavillon}} </span>
                                          @else
                                          <span class="item-value text-danger" id="etatPavillonNavire">_</span>
                                          @endif
                                       </li>
                                       <li>
                                          <span class="item-label"> <b>Type Navire :</b>  &ensp; </span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="typeNavire">{{$navireStep1->Type_Navire}} </span>
                                          @else
                                          <span class="item-value text-danger" id="typeNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>ID Certificat: </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="certifNavire">{{$navireStep1->Id_Certificat_Immat}} </span>
                                          @else
                                          <span class="item-value text-danger" id="certifNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>Tirant d'eau : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="tiranNavire">{{$navireStep1->Power_of_Main_Engine}} </span>
                                          @else
                                          <span class="item-value text-danger" id="tiranNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>Long du navire : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="longNavire">{{$navireStep1->Length_Overall}} </span>
                                          @else
                                          <span class="item-value text-danger" id="longNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>Larg du navire : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="largNavire">{{$navireStep1->Dimension_Navire}} </span>
                                          @else
                                          <span class="item-value text-danger" id="largNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>ID certif d'immat : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="immaCertifNavire">{{$navireStep1->Id_Certificat_Immat}} </span>
                                          @else
                                          <span class="item-value text-danger" id="immaCertifNavire">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>ID navire OMI : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="omi">{{$navireStep1->Omi}} </span>
                                          @else
                                          <span class="item-value text-danger" id="omi">_</span>
                                          @endif
                                       </li>
                                       <li class="total">
                                          <span class="item-label"> <b>ID ORGP : </b>  &ensp;</span>
                                          @if ($navireStep1)
                                          <span class="item-value text-danger"  id="orgp">{{$navireStep1->ORGP}} </span>
                                          @else
                                          <span class="item-value text-danger" id="orgp">_</span>
                                          @endif
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="nk-iv-wg2-cta">
                                    @if ($navireStep1)
                                    <a href="#" class="btn btn-danger btn-lg btn-block mt-2">Voir plus</a>
                                    @else
                                    <a href="#" class="btn btn-secondary btn-lg btn-block mt-2">Voir plus</a>
                                    @endif
                                    {{-- 
                                    <div class="cta-extra">Earn up to 25$ <a href="#" class="link link-dark">Refer friend!</a></div>
                                    --}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- ici le loading svg  --}}
               <div class="justify-center">
                  <div id="loading-svg" style=" display: none;" class="pl-5 ">
                     <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
                  </div>
               </div>
               <div class="" id="formAjoutNewNAvire"  >
                  <div class="no-passport-details clearfix" style="border-bottom: 3px solid red; margin-top: 15px; margin-bottom: 10px;">
                     <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                        <div class="number-square">
                           B 
                        </div>
                     </div>
                  </div>
                  <div class="nk-kycfm">
                     <div class="row g-4 mb-3">
                        <div class="col-md-6">
                           <div class="form-group mt-2">
                              <div class="form-label-group">
                                 <label class="form-label">Port d'escale envisagé<span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
                              </div>
                              <div class="form-control-group">
                                 {{-- <input type="text" class="form-control form-control-lg"> --}}
                                 <select id="pays"  class="form-select-lg js-select2 form-control form-control-lg"  name="portEscalEnvisage" data-placeholder="Selectionner le pays" required>
                                    <option value="Abidjan" >Abidjan</option>
                                    <option value="San-Pedro">San-Pedro</option>
                                    {{-- 
                                    <option value="option_select_name"></option>
                                    --}}
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6">
                           <div class="form-group mt-2">
                              <div class="form-label-group">
                                 <label class="form-label">Objet de l'accès au port <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
                              </div>
                              <div class="form-control-group" >
                                 <select  id="objetAccesPort"  onchange="getObjectPort()" class="form-select js-select2" multiple="multiple" data-placeholder="Veuillez selectionner un objet" required >
                                    {{-- 
                                    <option value="default_option">Default Option</option>
                                    --}}
                                    <option value="-Ravitaillement">Ravitaillement</option>
                                    <option value="-Debarquement">Débarquement</option>
                                    <option value="-Transbordement">Transbordement</option>
                                    <option value="-Escale Technique">Escale Technique</option>
                                    <option value="-Autre">Autre </option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                     </div>
                     <!-- .row -->
                     <div class="row g-4 mb-3">
                        <div class="col-md-6">
                           <div class="form-group mt-2">
                              <div class="form-label-group">
                                 <label class="form-label">Date de la dernière escale<span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
                              </div>
                              <div class="form-control-group">
                                 <input type="text" class="form-control date-picker" id="dateLastEscale" placeholder="YYYY-MM-JJ" name="dateLastEscale" @if (Session::has("step1")) value={{session('step1')['dateLastEscale']}} @endif required>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6">
                           <div class="form-group mt-2">
                              <div class="form-label-group">
                                 <label class="form-label">Port de la dernière escale<span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
                              </div>
                              <div class="form-control-group">
                                 <select required class="form-select js-select2" data-placeholder="test-ici" name="accueilPort" placeholder="-- Selectionner un port --"  id="portDerniereEscale"   required>
                                    {{-- @if (Session::has("step1")) 
                                    <option value={{session('step1')['accueilPort']}}>{{session('step1')['accueilPort']}}</option>
                                    @endif  --}}
                                    <option value="Option-1" >Option-1</option>
                                    <option value="Option-2">Option-2</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                     </div>
                     <!-- .row -->
                     <div class="row g-4">
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="form-label-group">
                                 <label class="form-label">Date d'arrivée estimée<span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
                              </div>
                              <div class="form-control-group">
                                 <input type="text" class="form-control date-picker" name="dateArriveEstim" id="dateArriveEstim" @if (Session::has("step1")) value={{session('step1')['dateArriveEstim']}} @endif  placeholder="YYYY-MM-JJ" required>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                        <div class="col-md-6 mt-4 ">
                           <div class="form-group">
                              <div class="form-label-group">
                                 <label class="form-label">Heure d'arrivée estimée <span class="text-danger"> * </span> <strong class="text-danger" title="ici ici ici ici ici ici ici ">[?]</strong></label>
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
                        <input type="text" id="getObjectAccessPort" name="objetAccesPort" class=""  style="display:none">
                        <!-- .col -->
                        <!-- .row -->
                     </div>
                     <hr style="color:red">
                     <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                        </div>
                        <div class="nk-block-head-content">
                           <div>
                              <li class="order-md-last">
                                 <input type="submit" class="btn btn-xl btn-white btn-dim btn-outline-danger" value="Etape 2">
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
</div>
@endsection