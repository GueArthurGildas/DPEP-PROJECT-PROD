@extends("layouts.master-agent")
@section("content")

    <div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
       <div class="nk-block-between g-3">
          <div class="nk-block-head-content">
             <h4 class="nk-block-title page-title mt-2">Ref :   <strong class="text-danger small">DPEP-0D575D</strong></h4>
             <div class="nk-block-des text-soft">
                <ul class="list-inline">
                   <li>ID demandeur: <span class="text-base">UD003054</span></li>
                   <li>Date de la demande: <span class="text-base">15 Feb, 2019 01:02 PM</span></li>
                </ul>
             </div>
          </div>
          <div class="nk-block-head-content">
             <a href="{{route("home.demandes.listedemandeforagents.index")}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Retour</span></a>
             <a href="html/user-list-regular.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
          </div>
       </div>
    </div>
    <!-- .nk-block-head -->
    <div class="nk-block">
       <div class="card">
          <div class="card-aside-wrap">
             <div class="card-content">
                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                   <li class="nav-item">
                      <a class="nav-link active"  data-bs-toggle="tab" href="#tabItem5"  ><em class="icon ni ni-file-text"></em><span>Détail Demande </span></a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link " data-bs-toggle="tab" href="#tabItem6" ><em class="icon ni ni-repeat"></em><span>Les autorisations</span></a>
                   </li>
                    <li class="nav-item">
                      <a class="nav-link"data-bs-toggle="tab" href="#tabItem7"><em class="icon ni ni-activity"></em><span>Capture</span></a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tabItem5"><em class="icon ni ni-clip"></em><span>Documents</span></a>
                   </li>
                  
                   {{-- <li class="nav-item">
                      <a class="nav-link" href="#tabItem7"><em class="icon ni ni-user-circle"></em><span>Demandeur</span></a>
                   </li> --}}
                   <li class="nav-item nav-item-trigger d-xxl-none">
                      <a href="#tabItem6" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                   </li>
                </ul>
                <!-- .nav-tabs -->

                 <div class="tab-content">
                        
                        <div class="tab-pane active" id="tabItem5">
                                 <div class="card-inner">
                                    <div class="nk-block">
                                       <div class="nk-block-head">
                                          <h5 class="title">Détail Demande</h5>
                                          <p>Basic info, like your Demande ID and so on, that you use on Nio Platform.</p>
                                       </div>
                                       <!-- .nk-block-head -->
                                       <div class="profile-ud-list">
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Port d'escale Envisagé</span>
                                                <span class="profile-ud-value">Abidjan</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Etat du port</span>
                                                <span class="profile-ud-value">Côte d'Ivoire</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date et heure d'arrivée estimées</span>
                                                <span class="profile-ud-value">10 Aug, 1980</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Surname</span>
                                                <span class="profile-ud-value">IO</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Mobile Number</span>
                                                <span class="profile-ud-value">01713040400</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email Address</span>
                                                <span class="profile-ud-value">info@softnio.com</span>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                                    <div class="nk-block">
                                       <div class="nk-block-head nk-block-head-line">
                                          <h6 class="title overline-title text-base">Additional Information</h6>
                                       </div>
                                       <!-- .nk-block-head -->
                                       <div class="profile-ud-list">
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Joining Date</span>
                                                <span class="profile-ud-value">08-16-2018 09:04PM</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Reg Method</span>
                                                <span class="profile-ud-value">Email</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Country</span>
                                                <span class="profile-ud-value">United State</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nationality</span>
                                                <span class="profile-ud-value">United State</span>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                       <div class="nk-block-head nk-block-head-sm nk-block-between">
                                          <h5 class="title">Demandeur</h5>
                                          <a href="#" class="link link-sm">+ Add Note</a>
                                       </div>
                                       <!-- .nk-block-head -->
                                       <div class="bq-note">
                                          <div class="bq-note-item">
                                             <div class="bq-note-text">
                                                <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                             </div>
                                             <div class="bq-note-meta">
                                                <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                <span class="bq-note-sep sep">|</span>
                                                <span class="bq-note-by">By <span>Softnio</span></span>
                                                <a href="#" class="link link-sm link-danger">Delete Note</a>
                                             </div>
                                          </div>
                                          <!-- .bq-note-item -->
                                          <div class="bq-note-item">
                                             <div class="bq-note-text">
                                                <p>Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra. </p>
                                             </div>
                                             <div class="bq-note-meta">
                                                <span class="bq-note-added">Added on <span class="date">November 18, 2019</span> at <span class="time">5:34 PM</span></span>
                                                <span class="bq-note-sep sep">|</span>
                                                <span class="bq-note-by">By <span>Softnio</span></span>
                                                <a href="#" class="link link-sm link-danger">Delete Note</a>
                                             </div>
                                          </div>
                                          <!-- .bq-note-item -->
                                       </div>
                                       <!-- .bq-note -->
                                    </div>
                                    <!-- .nk-block -->
                                 </div>
                                 <!-- .card-inner --> 
                        </div>

                        <div class="tab-pane" id="tabItem6">
                                 <div class="card-inner">
                                    <div class="nk-block">
                                       <div class="nk-block-head">
                                          <h5 class="title">Les Autorisations de pêche </h5>
                                          <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                       </div>
                                       <!-- .nk-block-head -->
                                       <div class="profile-ud-list">
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nb de demandes</span>
                                                <span class="profile-ud-value">5</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">peche</span>
                                                <span class="profile-ud-value">4</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Autorisation</span>
                                                <span class="profile-ud-value">10 Aug, 1980</span>
                                             </div>
                                          </div>
                                          <div class="profile-ud-item">
                                             <div class="profile-ud wider">
                                                <span class="profile-ud-label">Pêches</span>
                                                <span class="profile-ud-value">20</span>
                                             </div>
                                          </div>
                                       
                                       </div>
                                       <!-- .profile-ud-list -->
                                    </div>
                                    <!-- .nk-block -->
                                    <div class="nk-block">
                                      <div class="card card-preview">
                                            <table class="table table-tranx is-compact">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Nom </span>
                                                            </span>
                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Date</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Issue Date</span>
                                                                    <span>Due Date</span>
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="tb-tnx-amount">
                                                            <span class="tb-tnx-total">Total</span>
                                                            <span class="tb-tnx-status d-none d-md-inline-block">Autre</span>
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4947</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-05-2019</span>
                                                                <span class="date">10-13-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status">
                                                                <span class="badge badge-dot bg-warning">test</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4904</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Maintenance Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">06-19-2019</span>
                                                                <span class="date">06-26-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$99.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4829</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-04-2018</span>
                                                                <span class="date">10-12-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4830</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Anniversary Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">12-04-2018</span>
                                                                <span class="date">14-12-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$399.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4840</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Coverage Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">12-08-2018</span>
                                                                <span class="date">13-22-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$99.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">test</span></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .card -->
                                    </div>
                                    <!-- .nk-block -->
                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                       <div class="nk-block-head nk-block-head-sm nk-block-between">
                                          <h5 class="title">Les autorisations de transbordement</h5>
                                          <a href="#" class="link link-sm">+ Add Note</a>
                                       </div>
                                       <!-- .nk-block-head -->
                                       <div class="card card-preview">
                                            <table class="table table-tranx is-compact">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Nom</span>
                                                            </span>
                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Date</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Issue Date</span>
                                                                    <span>Due Date</span>
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="tb-tnx-amount">
                                                            <span class="tb-tnx-total">Total</span>
                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4947</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-05-2019</span>
                                                                <span class="date">10-13-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status">
                                                                <span class="badge badge-dot bg-warning">Test</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4904</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Maintenance Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">06-19-2019</span>
                                                                <span class="date">06-26-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$99.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4829</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-04-2018</span>
                                                                <span class="date">10-12-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4830</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Anniversary Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">12-04-2018</span>
                                                                <span class="date">14-12-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$399.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-success">Test</span></div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4840</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Coverage Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">12-08-2018</span>
                                                                <span class="date">13-22-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$99.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span class="badge badge-dot bg-danger">Test</span></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- .card -->
                                    </div>
                                    <!-- .nk-block -->
                                 </div>
                                 <!-- .card-inner --> 
                        </div>

                        
                        
                  </div>
              
             </div>
             <!-- .card-content -->
             <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl toggle-screen-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                <div class="card-inner-group" data-simplebar="init">
                   <div class="simplebar-wrapper" style="margin: 0px;">
                      <div class="simplebar-height-auto-observer-wrapper">
                         <div class="simplebar-height-auto-observer"></div>
                      </div>
                      <div class="simplebar-mask">
                         <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                               <div class="simplebar-content" style="padding: 0px;">
                                  <div class="card-inner">
                                     <div class="user-card user-card-s2">
                                        <div class="user-avatar lg " style="background-color:#df6d14">
                                           <span></span>
                                        </div>
                                        <div class="user-info">
                                           <div class="badge bg-outline-light rounded-pill ucap">Demande</div>
                                           <h5>Navire</h5>
                                           <span class="sub-text">Nom du navire :</span>
                                           <ul class="btn-toolbar justify-center gx-1 mt-1">
                                        {{-- <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li> --}}
                                        
                                          <li><a href="#" class="btn btn-white btn-dim btn-outline-danger"><em class="icon ni ni-cross-circle"></em><span>refuser </span></a></li>
                                          <li><a href="{{route("home.demandes.traiterecapedemande.index")}}" class="btn btn-white btn-dim btn-outline-dark"><em class="icon ni ni-check-circle-fill"></em><span>Accepter</span></a></li>
                                       
                                     </ul>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .card-inner -->
                                  {{-- <div class="card-inner card-inner-sm">
                                     <ul class="btn-toolbar justify-center gx-1">
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                        <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                        
                                          <li><a href="#" class="btn btn-white btn-dim btn-outline-danger"><em class="icon ni ni-cross-circle"></em><span>refuser </span></a></li>
                                          <li><a href="{{route("home.demandes.traiterecapedemande.index")}}" class="btn btn-white btn-dim btn-outline-dark"><em class="icon ni ni-check-circle-fill"></em><span>Accepter</span></a></li>
                                       
                                     </ul>
                                  </div>
                                  <!-- .card-inner --> --}}
                                  <div class="card-inner">
                                     <div class="overline-title-alt mb-2">In Account</div>
                                     <div class="profile-balance">
                                        <div class="profile-balance-group gx-4">
                                                <ul class="custom-control-group">
                                                   
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                            <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio3">
                                                            <label class="custom-control-label" for="btnRadio3">Radio Label</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-control-sm custom-radio custom-control-pro">
                                                            <input type="radio" class="custom-control-input" name="btnRadio" id="btnRadio5" checked>
                                                            <label class="custom-control-label" for="btnRadio5">Radio Checked</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .card-inner -->
                                  <div class="card-inner">
                                     <div class="row text-center">
                                        <div class="col-4">
                                           <div class="profile-stats">
                                              <span class="amount">23</span>
                                              <span class="sub-text">Nb Inspections</span>
                                           </div>
                                        </div>
                                        <div class="col-4">
                                           <div class="profile-stats">
                                              <span class="amount">20</span>
                                              <span class="sub-text">Complete</span>
                                           </div>
                                        </div>
                                        <div class="col-4">
                                           <div class="profile-stats">
                                              <span class="amount">3</span>
                                              <span class="sub-text">Progress</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .card-inner -->
                                  <div class="card-inner">
                                     <h6 class="overline-title-alt mb-2">Additional</h6>
                                     <div class="row g-3">
                                        <div class="col-6">
                                           <span class="sub-text">User ID:</span>
                                           <span>UD003054</span>
                                        </div>
                                        <div class="col-6">
                                           <span class="sub-text">Last Login:</span>
                                           <span>15 Feb, 2019 01:02 PM</span>
                                        </div>
                                        <div class="col-6">
                                           <span class="sub-text">Status:</span>
                                           <span class="lead-text text-success">Approved</span>
                                        </div>
                                        <div class="col-6">
                                           <span class="sub-text">Register At:</span>
                                           <span>Nov 24, 2019</span>
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .card-inner -->
                                  <div class="card-inner">
                                     <h6 class="overline-title-alt mb-3">Groups</h6>
                                     <ul class="g-1">
                                        <li class="btn-group">
                                           <a class="btn btn-xs btn-light btn-dim" href="#">investor</a>
                                           <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                        </li>
                                        <li class="btn-group">
                                           <a class="btn btn-xs btn-light btn-dim" href="#">support</a>
                                           <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                        </li>
                                        <li class="btn-group">
                                           <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                           <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                        </li>
                                     </ul>
                                  </div>
                                  <!-- .card-inner -->
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="simplebar-placeholder" style="width: auto; height: 892px;"></div>
                   </div>
                   <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                      <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                   </div>
                   <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                      <div class="simplebar-scrollbar" style="height: 605px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                   </div>
                </div>
                <!-- .card-inner -->
             </div>
             <!-- .card-aside -->
          </div>
          <!-- .card-aside-wrap -->
       </div>
       <!-- .card -->
    </div>
    <!-- .nk-block -->
 </div>

@endsection