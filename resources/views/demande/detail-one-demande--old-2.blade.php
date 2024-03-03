@extends("layouts.master")
@section("content")
<div class="nk-content nk-content-fluid">
   <div class="container-xl wide-xl">
      <div class="nk-content-inner">
         <div class="nk-block-head-sub"><a href="html/invest/schemes.html" class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>Mon espace</span></a></div>
         <div class="nk-block-between-md g-3">
            <div class="nk-block-head-content">
               <div class="nk-block-head-sub"><span></span></div>
               <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                  {{-- 
                  <div><a href="#" class="btn btn-white btn-light"> <em class="icon ni ni-arrow-long-left text-danger ms-2"></em> Retour </a></div>
                  --}}
                  <div>
                     <h2 class="nk-block-title fw-normal text-danger"><em class="fs-20px far fa-paper-plane"></em> DPEP-A03-2Z0   </h2>
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
                  <div class="slider-dots"> test ici je suis la</div>
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
                              <li><a href="#" class="btn btn-white btn-dim btn-outline-danger"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                              <li><a href="#" class="btn btn-white btn-dim btn-outline-warning"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                              <li class="nk-block-tools-opt">
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
                              </li>
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
                        <th class="">Date d'emmission </th>
                        <th class="">Emetteur</th>
                        <th>Objet de la demande</th>
                        <th>statut</th>
                        <th>Résultat</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr style="border-width: 0;">
                        <td>80ZB</td>
                        <td>o	Honeywell</td>
                        <td>bonjour je suis , je suis ici, et toi </td>
                        <td><span class="badge bg-outline bg-danger">Running</span></td>
                        <td class="text-danger">1fedsjdoofj </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="nk-block">
            <div class="row g-gs">
               <div class="col-xxl-8">
                  <div class="card card-bordered">
                     <div class="card-inner">
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
                     <div class="col-lg-6 col-xxl-12">
                        <div class="card card-bordered">
                           <div class="card-inner">
                              <div class="nk-block-head">
                                 <div class="nk-block-head-content">
                                    <div class="card card-bordered">
                                       <ul class="data-list is-compact">
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="nk-block-head-content">
                                                   <h5 class="nk-block-title title">Information de la demande</h5>
                                                   <p>Informations utiles de la demande </p>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">1- Port d'escale Envisagé </div>
                                                <div class="data-value">Abu Bin </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">2- Etat du port</div>
                                                <div class="data-value">Ishtiyak</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">3- Date et heure d'arrivée estimées</div>
                                                <div class="data-value">info@softnio.com</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">4- Objet de l'accès au port</div>
                                                <div class="data-value text-soft"><em>Not available</em></div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">5- Nom du port </div>
                                                <div class="data-value">28 Oct, 2015</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">6- Date de la dernière escale</div>
                                                <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
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
                                                <div class="data-value">Kenya</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">2- Etat du pavillon</div>
                                                <div class="data-value">6516, Eldoret, Uasin Gishu, 30100</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">3- Type de navire</div>
                                                <div class="data-value">Bitcoin</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">4- IRCS</div>
                                                <div class="data-value text-break">1F1tAaz5x1HUXrCNLbtMDqcw6o5GNn4xqX</div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col">
                                                <div class="data-label">15- Nom du capitaine</div>
                                                <div class="data-value">
                                                   <span>@tokenlite</span> <a href="https://t.me/tokenlite" target="_blank"><em class="icon ni ni-telegram"></em></a>
                                                </div>
                                             </div>
                                          </li>
                                          <li class="data-item">
                                             <div class="data-col justify-end">
                                                <div class="data-value ">
                                                   <span class="text-primary"> </span> <a href="https://t.me/tokenlite" target="_blank"><< Voir plus >></a>
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
                     <div class="col-lg-6 col-xxl-12">
                        <div class="row g-gs">
                           <div class="col-sm-6 col-lg-12 col-xxl-6">
                              <div class="card card-bordered">
                                 <div class="card-inner">
                                    <div class="card-title-group align-start mb-2">
                                       <div class="card-title">
                                          <h6 class="title">Active Subscriptions</h6>
                                       </div>
                                       <div class="card-tools">
                                          <em class="card-hint icon ni ni-help-fill bg-danger" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total active subscription" data-bs-original-title="Total active subscription"></em>
                                       </div>
                                    </div>
                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                       <div class="nk-sale-data">
                                          <span class="amount">9.69K</span>
                                          <span class="sub-title"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span>since last month</span>
                                       </div>
                                       <div class="nk-sales-ck">
                                          <canvas class="sales-bar-chart" id="activeSubscription" width="761" height="112" style="display: block; box-sizing: border-box; height: 56px; width: 380px;"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- .card -->
                           </div>
                           <!-- .col -->
                           <div class="col-sm-6 col-lg-12 col-xxl-6">
                              <div class="card card-bordered">
                                 <div class="card-inner">
                                    <div class="card-title-group align-start mb-2">
                                       <div class="card-title">
                                          <h6 class="title">Avg Subscriptions</h6>
                                       </div>
                                       <div class="card-tools">
                                          <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Daily Avg. subscription" data-bs-original-title="Daily Avg. subscription"></em>
                                       </div>
                                    </div>
                                    <div class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                       <div class="nk-sale-data">
                                          <span class="amount">346.2</span>
                                          <span class="sub-title"><span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>2.45%</span>since last week</span>
                                       </div>
                                       <div class="nk-sales-ck">
                                          <canvas class="sales-bar-chart" id="totalSubscription" width="774" height="112" style="display: block; box-sizing: border-box; height: 56px; width: 387px;"></canvas>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- .card -->
                           </div>
                           <!-- .col -->
                        </div>
                        <!-- .row -->
                     </div>
                     <!-- .col -->
                  </div>
                  <!-- .row -->
               </div>
               <!-- .col -->
               <div class="col-md-6 col-xxl-4">
                  <div>
                     <div class="card card-bordered card-full">
                        <div class="card-inner border-bottom">
                           <div class="card-title-group">
                              <div class="card-title">
                                 <h6 class="title">Recent Activities</h6>
                              </div>
                              <div class="card-tools">
                                 <ul class="card-tools-nav">
                                    {{-- 
                                    <li><a href="#"><span>Cancel</span></a></li>
                                    --}}
                                    <li class="active"><a href="#"><span>All</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <ul class="nk-activity">
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-success">1</div>
                              <div class="nk-activity-data">
                                 <div class="label">Keith Jensen requested to Widthdrawl.</div>
                                 <span class="time"><i class=" fas fa-solid fa-check text-warning"></i></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-success">2</div>
                              <div class="nk-activity-data">
                                 <div class="label">Harry Simpson placed a Order.</div>
                                 <span class="time"><i class=" fas fa-solid fa-check text-warning"></i></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">3</div>
                              <div class="nk-activity-data">
                                 <div class="label">Stephanie Marshall got a huge bonus.</div>
                                 <span class="time"><span class="badge bg-outline bg-dark"><i>En cours ...</i></span></span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">4</div>
                              <div class="nk-activity-data">
                                 <div class="label">Nicholas Carr deposited funds.</div>
                                 <span class="time">2 hours ago</span>
                              </div>
                           </li>
                           <li class="nk-activity-item">
                              <div class="nk-activity-media user-avatar bg-lighter">5</div>
                              <div class="nk-activity-data">
                                 <div class="label">Timothy Moreno placed a Order.</div>
                                 <span class="time">2 hours ago</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <!-- .card -->
                     <div class="card card-bordered">
                        <div class="card-inner">
                           <div class="card-title-group align-start mb-2">
                              <div class="card-title">
                                 <h5 class="title">Capture à bors</h5>
                              </div>
                              <div class="card-tools">
                                 <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Total active subscription" data-bs-original-title="Total active subscription"></em>
                              </div>
                           </div>
                           <div class="card-body table-responsive bg-white  table-head-fixedp-0" style="height: 180px;">
                                 <table style="table table-bordered;font-size: 0.8em;border-collapse: collapse;">
                                    <thead>
                                       <tr>
                                          <th>Titre 1</th>
                                          <th>Titre 2</th>
                                          <th>Titre 3</th>
                                          <th>Titre 3</th>
                                          <th>Titre 3</th>
                                          <th>Titre 3</th>
                                       </tr>
                                    </thead>
                                    <tbody class="tb-aff-detail-demande">
                                       <tr>
                                          <td>Contenu 1</td>
                                          <td>Contenu 2</td>
                                          <td>Contenu 3</td>
                                          <td>Contenu 3</td>
                                          <td>Contenu 3</td>
                                          <td>Contenu 3</td>
                                       </tr>
                                       <tr>
                                          <td>Contenu 4</td>
                                          <td>Contenu 5</td>
                                          <td>Contenu 6</td>
                                          <td>Contenu 3</td>
                                          <td>Contenu 3</td>
                                          <td>Contenu 3</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                        </div>
                     </div>
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