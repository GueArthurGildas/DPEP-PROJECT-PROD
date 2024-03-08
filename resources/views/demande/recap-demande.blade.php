@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-lg nk-content-fluid">
   <div class="container-xl wide-lg">
    <div class="nk-block-between-md">
                  <div class="nk-block-head-content">
                     <h2 class="nk-block-title fw-normal">Récapitulatif </h2>
                     <div class="nk-block-des">
                        <p>Facilitez la vie en utilisant e-Dpep pour vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                     </div>
                  </div>
                  <div class="nk-block-head-content">
                     <div>
                        <ul class="nk-block-tools g-3">
                            <li> 
                               <h5><a href="{{route('home.demandes.uploadfiledemande.index')}}" class=" text-dark btn-outline-dark  "><em class="icon ni ni-arrow-left text-danger"></em><span>Retour</span></a></h5>
                           </li>
                           {{-- <li> 
                              <a href="{{route('home.demandes.uploadfiledemande.index')}}" class=" text-dark btn-outline-dark  "><span><em class="icon ni ni-arrow-left text-danger"></em></span><span>Retour</span></a>
                           </li> --}}
                           {{-- <li> 
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
                              
                           </div>
                        </div>
                     </div>
               <hr>
               
      <div class="example-alert">
         <div class="alert alert-pro alert-warning">

               <div class="nk-content nk-content-lg nk-content-fluid">
                  <div class="container-xl wide-lg">
                     <div class="nk-content-inner">
                        <div class="nk-content-body ml-5 mr-5">
                           {{-- <div class=""><a class="back-to text-danger" href="{{route("home.demandes.uploadfiledemande.index")}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
                           <br> --}}
                           {{-- <hr> --}}
                           <div class="nk-block-between-md g-4">
                              
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
                                                <h2 class="nk-block-title fw-normal text-danger"> N* : DPEP-01A154</h2>
                                             </div>
                                             {{-- 
                                             <div><a href="html/invest/schemes.html" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ms-2"></em></a></div>
                                             --}}
                                             <div>ICi remettre le QRcode de la demande</div>
                                          </div>
                                          <div class="nk-block-des">
                                             
                                             <p>Aliquam mauris diam tristique ligula. Natoque sit</p>
                                            
                                          </div>
                                       </div>
                                       <!-- .nk-block-head-content -->
                                       <div class="nk-block-head-content d-none d-md-block">
                                          <div class="nk-slider nk-slider-s1">
                                             <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                                <!-- .slider-item -->
                                                <div class="slider-item">
                                                   <div class="nk-iv-wg1">
                                                      <div class="nk-iv-wg1-sub sub-text text-danger">Brouillon Enregistré </div>
                                                      <h6 class="nk-iv-wg1-info title">Mardi, le 12 Décembre 2024</h6>
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Etape 1</span></a> >
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Etape 2</span></a> >
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Etape 3</span></a> >
                                                      <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Etape 4</span></a>
                                                      
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
                                 
                           </div>
                                 <div class="nk-block">
                                    <div class="nk-news card card-bordered  bg-liighter">
                                       <div class="card-inner">
                                          <div class="nk-news-list">
                                             <a class="nk-news-item" href="#">
                                                {{-- <div class="nk-news-icon mt-2">
                                                   <em class="icon ni ni-check-round-cut x2" style="color:#066C02"></em>
                                                </div> --}}
                                                <div class="nk-text text-danger ">
                                                   <p> <span><h4>A - Navire & Port d'accueil </h4> </span></p>
                                                   {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .card -->
                                 </div>
                                 <!-- .nk-block -->
                                 
                                 <div class="example-alert mt-1">
                                    <div class="alert alert-success alert-icon">
                                       <em class="icon ni ni-check-circle"></em> <strong>Integer lectus enim vivamus </strong>. Integer lectus enim vivamus natoque.
                                       <p> natoque sagittis duis.ridiculus dapibus hac.</p>
                                       <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac Your account balance has been updated accordingly.</p>
                                       <p> enim vivamus natoque sagittis duis.ridiculus dapibus hacy.</p>
                                    </div>
                                 </div>
                                 <div class="form-group mt-4">
                                    <label class="form-label" for="default-01"> 1 - Navire </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("navireSelectedData")["Nom_Navire"]}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> 2 - Port d'escale envisagé </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("demande")["Port_Escale_Envisag"]}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> 3 - Objet de l'accès au port  </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("demande")["Objet_Acces_Port"]}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> 4 - Date de la dernière escale </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("demande")["Date_escale"]}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> 5 - Port de la dernière escale </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("demande")["Port_Dern_Escal"]}}">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="default-01"> 6 - Date d'arrivée estimée </label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="default-1-03" disabled="" value="{{session("demande")["Date_arrivee"]}}">
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="no-passport-details clearfix" style="border-bottom: 3px solid orange; margin-top: 15px; margin-bottom: 10px;">
                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                          
                        </div>
                     </div>
                                 <div class="nk-block">
                                    <div class="nk-news card card-bordered">
                                       <div class="card-inner">
                                          <div class="nk-news-list">
                                             <a class="nk-news-item" href="#">
                                                 {{-- <div class="nk-news-icon mt-2">
                                                   <em class="icon ni ni-check-round-cut x2" style="color:#066C02"></em>
                                                </div> --}}
                                                <div class="nk-text text-danger ">
                                                   <p> <span><h4>B - Les captures à bord du navire </h4> </span></p>
                                                   {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .card -->
                                 </div>
                                 <!-- .nk-block -->
                                  <div id="" >
               <div class="card-body table-responsive bg-white  table-head-fixedp-0" >
                  <table class="table table-bordered" >
                     <thead>
                        <tr >
                           <th scope="col">#</th>
                           <th scope="col">Espèce</th>
                           <th scope="col">Zone de capture</th>
                           <th scope="col">Produit</th>
                           <th scope="col"> Qté à Bord</th>
                           <th scope="col">Qté à Débarquer</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                       @foreach ($Captures as $capture )
                       
                          <tr>
                           <th scope="row">#</th>
                           <td data-ref="">{{$capture->espece}}</td>
                           <td data-lib="">{{$capture->zone_capture}}</td>
                           <td data-pu="">{{$capture->Produit}}</td>
                           <td data-pu="">{{$capture->qte_a_bord}}</td>
                           <td data-pu="">{{$capture->qte_debarque}}</td>
                           {{-- <td><a href="javascript:void(0);" class="btn btn-danger" data-id="" onclick="ajouterArticle(this)">Ajouter</a></td> --}}
                        </tr>
                       @endforeach
                        
                     </tbody>
                  </table>
               </div>
            </div>

                                   <hr>
                                   <div class="no-passport-details clearfix" style="border-bottom: 3px solid orange; margin-top: 15px; margin-bottom: 10px;">
                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left" style="position: relative;">
                          
                        </div>
                     </div>
                                 <div class="nk-block">
                                    <div class="nk-news card card-bordered">
                                       <div class="card-inner">
                                          <div class="nk-news-list">
                                             <a class="nk-news-item" href="#">
                                                 {{-- <div class="nk-news-icon mt-2">
                                                   <em class="icon ni ni-check-round-cut x2" style="color:#066C02"></em>
                                                </div> --}}
                                                <div class="nk-text text-danger ">
                                                   <p> <span><h4>C - Les autorisations de pêches </h4> </span></p>
                                                   {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- .card -->
                                 </div>
                                 <!-- .nk-block -->
                                  <div id="" >
               <div class="card-body table-responsive bg-white  table-head-fixedp-0" >
                  <table class="table table-bordered" >
                     <thead>
                        <tr >
                           <th scope="col">#</th>
                           <th scope="col">Identif°</th>
                           <th scope="col"> Delivré Par</th>
                           <th scope="col">Date Emission</th>
                           <th scope="col">Date Expiration</th>
                           <th scope="col">Zone de pêche</th>
                           <th scope="col">Espèce</th>
                           <th scope="col">Engin</th>
                        </tr>
                     </thead>
                     <tbody>
                       @foreach ( $AutoPeches  as $autoPeche )
                          
                      
                        <tr>
                           <th scope="row">#</th>
                           <td data-ref="">{{$autoPeche->identif_auto_peche}}</td>
                           <td data-lib="">{{$autoPeche->Deliv_Par}}</td>
                           <td data-pu="">{{$autoPeche->Date_Stat_Activities}}</td>
                           <td data-pu="">{{$autoPeche->Date_end_Activities}}</td>
                           <td data-pu="">{{$autoPeche->Zone_peche}}</td>
                           <td data-pu="">{{$autoPeche->espece}}</td>
                           <td data-pu="">{{$autoPeche->engin}}</td>
                           {{-- <td><a href="javascript:void(0);" class="btn btn-danger" data-id="" onclick="ajouterArticle(this)">Ajouter</a></td> --}}
                        </tr>
                     
                     @endforeach
                       
                     </tbody>
                  </table>
               </div>
            </div>
                                 

                                   
                                 
                                 
                                 
                                 <hr>
                                 <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                    </div>
                                    <div class="nk-block-head-content">
                                       <div>

                                       <ul class="nk-block-tools g-3">
                                          <li><a href="#" class="btn btn-white btn-dim btn-outline-danger"><em class="icon ni ni-cross-circle"></em><span>Annuler</span></a></li>
                                          <li><a href="{{route("home.demandes.traiterecapedemande.index")}}" class="btn btn-white btn-dim btn-outline-dark"><em class="icon ni ni-check-circle-fill"></em><span>Valider</span></a></li>
                                       </ul>
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
@endsection