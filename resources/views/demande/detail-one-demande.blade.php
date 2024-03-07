@extends("layouts.master")
@section("content")

<div class="nk-content nk-content-fluid">
   <div class="container-xl wide-xl">
      <div class="nk-content-inner">
         <div class="nk-block-head-sub"><a href="{{route("home")}}" class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>Mon espace</span></a></div>
         <div class="nk-block-between-md g-3">
            <div class="nk-block-head-content">
               <div class="nk-block-head-sub"><span></span></div>
               <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                  {{-- 
                  <div><a href="#" class="btn btn-white btn-light"> <em class="icon ni ni-arrow-long-left text-danger ms-2"></em> Retour </a></div>
                  --}}
                  <div>
                     <h2 class="nk-block-title fw-normal text-danger"><em class="fs-20px far fa-paper-plane"></em>&nbsp{{$demande->Ref}}{{$demande->id}}</h2>
                     <div class="nk-block-des">
                     </div>
                  </div>
               </div>
               {{-- 
               <div class="nk-block-des">
                  <p>At a glance summary of your investment account. Have fun!</p>
               </div>
               --}}
            </div>
            <!-- .nk-block-head-content -->
            <div class="nk-block-head-content d-none d-md-block">
               <div class="nk-slider nk-slider-s1">
                  <div class="slider-dots"> test ici mettre le qrCode</div>
               </div>
               <!-- .nk-slider -->
            </div>
            <!-- .nk-block-head-content -->
            <div class="nk-block-head nk-block-head-sm">
               <div class="nk-block-between">
                  <div class="nk-block-head-content">
                     <h3 class="nk-block-title page-title"></h3>
                     <div class="nk-block-des text-soft">
                        <p></p>
                     </div>
                  </div>
                  <!-- .nk-block-head-content -->
                  <div class="nk-block-head-content">
                     <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                           <ul class="nk-block-tools g-3">
                              <li><a href="#" class="btn btn-white btn-dim btn-outline-danger"><em class="icon ni ni-cross-circle"></em><span>Annuler</span></a></li>
                              <li><a href="#" class="btn btn-white btn-dim btn-outline-dark"><em class="icon ni ni-printer"></em><span>Imprimer</span></a></li>
                              {{-- <li class="nk-block-tools-opt">
                                 <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-danger" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                       <ul class="link-list-opt no-bdr">
                                          <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                          <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                          <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li> --}}
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- .nk-block-head-content -->
               </div>
               <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
         </div>
         <div class="nk-block">
            <div class="table-responsive mt-2 bg-lighter">
               <table class="table table-striped bg-lighter">
                  <thead class="bg-lighter " style=" border-width: 0;">
                     <tr style="border-width: 0;">
                        <th class="">Date d'emission </th>
                        <th class="">Emetteur</th>
                        <th>Objet de la demande</th>
                        <th>statut</th>
                        <th>Résultat</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr style="border-width: 0;">
                        <td>{{$demande->created_at}}</td>
                        <td>{{userFullName()}}</td>
                        <td>{{$demande->Objet_Acces_Port}}</td>
                        <td><span class="badge bg-outline bg-danger">{{$demande->Resultat}} statut traite</span></td>
                        <td class="text-danger">{{$demande->Resultat}} ici mettre le resultat </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="nk-block">
            <div class="row g-gs">
               <div class="col-md-8 col-xxl-8">
                  <div class="card card-bordered">
                     <div class="card-inner">
                        <div class="card-title">
                           <h5 class="nk-block-title fw-normal">Statut du  traitement</h5>
                           <p>Situation de l'avancement du traitement de la demande  <a href="#" class="link link-sm text-danger">: {{$demande->Ref}}{{$demande->id}} </a></p>
                        </div>
                        <div class="circle-line justify-content-center ">
                           <div class="circle"><i class=" fas fa-solid fa-check text-warning"></i></div>
                           <div class="line"></div>
                           <div class="circle">
                              <i class=" fas fa-solid fa-check text-warning"></i>
                              <p></p>
                           </div>
                           <div class="line"></div>
                           <div class="circle" style="">3</div>
                           <div class="line"></div>
                           <div class="circle">4</div>
                           <div class="line"></div>
                           <div class="circle">5</div>
                        </div>
                     </div>
                  </div>
                  <!-- .card -->
                  <div class="row g-gs">
                     <div class=" col-xxl-12">
                        <div class="card card-bordered">
                           <div class="card-inner">
                              <div class="nk-block-head">
                                 <div class="nk-block-head-content">
                                    <div class="card card-bordered">
                                       <ul class="data-list is-compact">
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="nk-block-head-content">
                                                   <h5 class="nk-block-title title">Information sur la demande</h5>
                                                   <p>Informations renseignées par le demandeur </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">1- Port d'escale Envisagé </div>
                                                <div class="data-value">{{$demande->Port_Escale_Envisag}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">2- Etat du port</div>
                                                <div class="data-value">Côte d'ivoire</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">3- Date et heure d'arrivée estimées</div>
                                                <div class="data-value">{{$demande->Date_arrivee}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">4- Objet de l'accès au port</div>
                                                <div class="data-value text-soft"><em>{{$demande->Objet_Acces_Port}}</em></div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">5- Nom du port </div>
                                                <div class="data-value">{{$demande->Port_Escale_Envisag}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">6- Date de la dernière escale</div>
                                                <div class="data-value">{{$demande->Date_escale}}</div>
                                             </div>
                                          </li>
                                          {{-- ------ ici je mettrai  les informations du navire -------- --}}
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="nk-block-head-content">
                                                   <strong>
                                                      <h5 class="nk-block-title title">Navire </h5>
                                                   </strong>
                                                   <p>les Informations concernant le navire</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">1- Nom du navire</div>
                                                <div class="data-value">{{$demande->navire->Nom_Navire}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">2- Etat du pavillon</div>
                                                <div class="data-value">{{$demande->navire->Etat_Pavillon}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">3- Type de navire</div>
                                                <div class="data-value">{{$demande->navire->Type_Navire}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">4- IRCS</div>
                                                <div class="data-value text-break">{{$demande->navire->Num_IRCS}}</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">15- Id_Certificat_Immat</div>
                                                <div class="data-value">
                                                   <div class="data-value text-break">{{$demande->navire->Id_Certificat_Immat}}</div>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">15- Omi</div>
                                                <div class="data-value">
                                                   <div class="data-value text-break">{{$demande->navire->Omi}}</div>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">15- ORGP</div>
                                                <div class="data-value">
                                                   <div class="data-value text-break">{{$demande->navire->ORGP}}</div>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col justify-end">
                                                <div class="data-value ">
                                                   <div class="data-value text-break">Voir plus</div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- .col -->
                     <div class=" col-xxl-12">
                        <div class="row g-gs">
                           <!-- .col -->
                        </div>
                        <!-- .row -->
                     </div>
                     <!-- .col -->
                  </div>
                  <!-- .row -->
               </div>
               <!-- .col -->
               <div class="col-md-4 col-xxl-4">
                  <div>
                     <div class="card card-bordered card-full">
                        <div class="card-inner border-bottom">
                           <div class="card-title-group">
                              <div class="card-title">
                                 <h6 class="title">Les étapes du traitement</h6>
                              </div>
                              <div class="card-tools">
                                 <ul class="card-tools-nav">
                                    {{-- 
                                    <li><a href="#"><span>Cancel</span></a></li>
                                    --}}
                                    <li class="active"><a href="#"><span><small><i class="text-danger">Traitement...</i></small></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <ul class="nk-activity">
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-success">1</div>
                              <div class="nk-activity-data">
                                 <div class="label">Création de la demande</div>
                                 <span class="time"><i class=" fas fa-solid fa-check text-warning"></i></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-success">2</div>
                              <div class="nk-activity-data">
                                 <div class="label">Reception de la demande.</div>
                                 <span class="time"><i class=" fas fa-solid fa-check text-warning"></i></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">3</div>
                              <div class="nk-activity-data">
                                 <div class="label">Traitement de la demande.</div>
                                 <span class="time"><span class="badge bg-outline bg-dark"><i>En cours ...</i></span></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">4</div>
                              <div class="nk-activity-data">
                                 <div class="label">Analyse de la demande.</div>
                                 <span class="time">...</span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">5</div>
                              <div class="nk-activity-data">
                                 <div class="label">Clôture de la demande.</div>
                                 <span class="time">...</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <!-- .card -->
                     <div class="nk-refwg-url mt-1">
                        <div class="form-control-wrap">
                           <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Cliquer ici</span></div>
                           <div class="form-icon">
                              <em class="icon ni ni-link-alt"></em>
                           </div>
                           <input type="text" class="form-control copy-text bg-white" id="refUrl" value="Liste des documents afferent " disabled>
                        </div>
                     </div>
                     <div class="card card-bordered mt-1">
                        <div class="card-inner">
                           <div class="card-title-group align-start mb-2">
                              <div class="card-title">
                                 <h6 class="title">Total capture à bord</h6>
                              </div>
                              <div class="card-tools">
                                 <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total capture dans le navire" data-bs-original-title="Total capture dans le navire"></em>
                              </div>
                           </div>
                           <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                              <div class="nk-sale-data">
                                 <span class="amount">345</span>
                                 <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em> <b>255</b> </span>Total à débarquer</span>
                              </div>
                              <div class="nk-sales-ck">
                                 <canvas class="sales-bar-chart" id="totalSubscription" width="774" height="112" style="display: block; box-sizing: border-box; height: 56px; width: 387px;"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- .card -->
                      <div class="card card-bordered mt-1">
                        <div class="card-inner">
                           <div class="card-title-group align-start mb-2">
                              <div class="card-title">
                                 <h5 class="title">Capture à bors</h5>
                              </div>
                              <div class="card-tools">
                                 <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Les captures à bord " data-bs-original-title="Les captures à bord "></em>
                              </div>
                           </div>
                           <div class="card-body table-responsive bg-white  table-head-fixedp-0" style="height: 110px;">
                              
                                 
                                 

                                       @forelse ($captures as $capture)
                                           <div class="form-control-wrap">
                                             <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">voir</span></div>
                                             <div class="form-icon">
                                                <em class="icon ni ni-link-alt"></em>
                                             </div>
                                             <input type="text" class="form-control copy-text bg-white" id="refUrl" value="Liste des documents afferent " disabled>
                                            
                                          </div>
                                       @empty

                                          <p>Pas de capture enregistrée</p>
                                          
                                       @endforelse
                                       
                                    

                             
                           </div>
                        </div>
                     </div>
                     <!-- .card -->

                     
                      <div class="card card-bordered mt-1">
                        <div class="card-inner">
                           <div class="card-title-group align-start mb-2">
                              <div class="card-title">
                                 <h5 class="title">Les autorisations de pêche</h5>
                              </div>
                              <div class="card-tools">
                                 <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Les autorisations de pêche" data-bs-original-title="Les autorisations de pêche"></em>
                              </div>
                           </div>
                           <div class="card-body table-responsive bg-white  table-head-fixedp-0" style="height: 110px;">
                              
                                 
                                 
                                    @forelse ($autopeches as $autopeche )
                                          <div class="form-control-wrap">
                                             <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">voir</span></div>
                                             <div class="form-icon">
                                                <em class="icon ni ni-link-alt"></em>
                                             </div>
                                             <input type="text" class="form-control copy-text" id="refUrl" value="Liste des documents afferent "disabled>
                                          </div>
                                    @empty
                                       <p>Pas d'autorisation de peche renseignée</p>
                                    @endforelse
                                          
                                          
                                       
                                    

                             
                           </div>
                        </div>
                     </div>
                     <!-- .card -->
                     
                    
                  </div>
               </div>
               <!-- .col -->
            </div>
            <!-- .row -->
         </div>
      </div>
   </div>
</div>
@endsection