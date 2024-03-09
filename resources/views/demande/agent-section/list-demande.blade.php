@extends("layouts.master-agent")
@section("content")
<div class="nk-block-head nk-block-head-sm">
   <div class="nk-block-between">
      <div class="nk-block-head-content">
         <h3 class="nk-block-title page-title mt-1">Liste des demandes</h3>
         <div class="nk-block-des text-soft">
            <p>Il y'a au total 2,595 demandes.</p>
         </div>
      </div>
      <!-- .nk-block-head-content -->
      <div class="nk-block-head-content">
         <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">
               <ul class="nk-block-tools g-3">
                  <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Exporter</span></a></li>
                  <li class="nk-block-tools-opt">
                     <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-icon btn-dark" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                        <div class="dropdown-menu dropdown-menu-end">
                           <ul class="link-list-opt no-bdr">
                              <li><a href="#"><span>Add User</span></a></li>
                              <li><a href="#"><span>Add Team</span></a></li>
                              <li><a href="#"><span>Import User</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <!-- .toggle-wrap -->
      </div>
      <!-- .nk-block-head-content -->
   </div>
   <!-- .nk-block-between -->
</div>
<!-- .nk-block-head -->
<div class="nk-block">
   <div class="card card-stretch">
      <div class="card-inner-group">
         <div class="card-inner position-relative card-tools-toggle">
            <div class="card-title-group">
               <div class="card-tools">
                  <div class="form-inline flex-nowrap gx-3">
                     <div class="form-wrap w-150px text-dark">
                        <select class="form-select js-select2" data-search="off" data-placeholder="Statut">
                           <option value="">Tout</option>
                           <option value="email">En cours</option>
                           <option value="email">Accepté</option>
                           <option value="group">Réfusé</option>
                           <option value="suspend">Suspendu</option>
                        </select>
                     </div>
                     <div class="form-wrap w-150px text-dark">
                        <select class="form-select js-select2" data-search="off" data-placeholder="Début">
                           <option value="">01/01/2021</option>
                           <option value="email">01/01/2021</option>
                           <option value="group">01/01/2021</option>
                           <option value="suspend">01/01/2021</option>
                           <option value="delete">01/01/2021</option>
                        </select>
                     </div>
                     <div class="form-wrap w-150px text-dark">
                        <select class="form-select js-select2" data-search="off" data-placeholder="Fin">
                           <option value="">01/01/2021</option>
                           <option value="email">01/01/2021</option>
                           <option value="group">01/01/2021</option>
                           <option value="suspend">01/01/2021</option>
                           <option value="delete">01/01/2021</option>
                        </select>
                     </div>
                     <div class="btn-wrap">
                        <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light "> Appliquer</button></span>
                        <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                     </div>
                  </div>
                  <!-- .form-inline -->
               </div>
               <!-- .card-tools -->
               <div class="card-tools me-n1">
                  <ul class="btn-toolbar gx-1">
                     <li>
                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                     </li>
                     <!-- li -->
                     <li class="btn-toolbar-sep"></li>
                     <!-- li -->
                     {{-- 
                     <li>
                        <div class="toggle-wrap">
                           <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                           <div class="toggle-content" data-content="cardTools">
                              <ul class="btn-toolbar gx-1">
                                 <li class="toggle-close">
                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                 </li>
                                 <!-- li -->
                                 <li>
                                    <div class="dropdown">
                                       <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                          <div class="dot dot-primary"></div>
                                          <em class="icon ni ni-filter-alt"></em>
                                       </a>
                                       <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                          <div class="dropdown-head">
                                             <span class="sub-title dropdown-title">Filter Users</span>
                                             <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-icon">
                                                <em class="icon ni ni-more-h"></em>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="dropdown-body dropdown-body-rg">
                                             <div class="row gx-6 gy-3">
                                                <div class="col-6">
                                                   <div class="custom-control custom-control-sm custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="hasBalance">
                                                      <label class="custom-control-label" for="hasBalance"> Have Balance</label>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="custom-control custom-control-sm custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="hasKYC">
                                                      <label class="custom-control-label" for="hasKYC"> KYC Verified</label>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="form-group">
                                                      <label class="overline-title overline-title-alt">Role</label>
                                                      <select class="form-select js-select2">
                                                         <option value="any">Any Role</option>
                                                         <option value="investor">Investor</option>
                                                         <option value="seller">Seller</option>
                                                         <option value="buyer">Buyer</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="form-group">
                                                      <label class="overline-title overline-title-alt">Status</label>
                                                      <select class="form-select js-select2">
                                                         <option value="any">Any Status</option>
                                                         <option value="active">Active</option>
                                                         <option value="pending">Pending</option>
                                                         <option value="suspend">Suspend</option>
                                                         <option value="deleted">Deleted</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-12">
                                                   <div class="form-group">
                                                      <button type="button" class="btn btn-secondary">Filter</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="dropdown-foot between">
                                             <a class="clickable" href="#">Reset Filter</a>
                                             <a href="#">Save Filter</a>
                                          </div>
                                       </div>
                                       <!-- .filter-wg -->
                                    </div>
                                    <!-- .dropdown -->
                                 </li>
                                 <!-- li -->
                                 <li>
                                    <div class="dropdown">
                                       <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                       <em class="icon ni ni-setting"></em>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                          <ul class="link-check">
                                             <li><span>Show</span></li>
                                             <li class="active"><a href="#">10</a></li>
                                             <li><a href="#">20</a></li>
                                             <li><a href="#">50</a></li>
                                          </ul>
                                          <ul class="link-check">
                                             <li><span>Order</span></li>
                                             <li class="active"><a href="#">DESC</a></li>
                                             <li><a href="#">ASC</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <!-- .dropdown -->
                                 </li>
                                 <!-- li -->
                              </ul>
                              <!-- .btn-toolbar -->
                           </div>
                           <!-- .toggle-content -->
                        </div>
                        <!-- .toggle-wrap -->
                     </li>
                     <!-- li --> --}}
                  </ul>
                  <!-- .btn-toolbar -->
               </div>
               <!-- .card-tools -->
            </div>
            <!-- .card-title-group -->
            <div class="card-search search-wrap" data-search="search">
               <div class="card-body">
                  <div class="search-content">
                     <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                     <input type="text" class="form-control border-transparent form-focus-none" placeholder="Rechercher une demande par son ID">
                     <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                  </div>
               </div>
            </div>
            <!-- .card-search -->
         </div>
         <!-- .card-inner -->
         <div class="card-inner p-0">
            <div class="nk-tb-list nk-tb-ulist is-compact">
               <div class="nk-tb-item nk-tb-head">
                  <div class="nk-tb-col nk-tb-col-check">
                     <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid">
                        <label class="custom-control-label" for="uid"></label>
                     </div>
                  </div>
                  <div class="nk-tb-col"><span class="sub-text"><b>Ref demande</b></span></div>
                  <div class="nk-tb-col tb-col-md"><span class="sub-text"><b>date soumisson</b></span></div>
                  <div class="nk-tb-col tb-col-sm"><span class="sub-text"><b>Navire</b></span></div>
                  <div class="nk-tb-col tb-col-md"><span class="sub-text"><b>Demandeur</b></span></div>
                  <div class="nk-tb-col tb-col-xxl"><span class="sub-text"><b>Progression</b></span></div>
                  <div class="nk-tb-col"><span class="sub-text"><b>Statuts</b></span></div>
                  <div class="nk-tb-col tb-col-md"><span class="sub-text"><b>date Traitement</b></span></div>
                  <div class="nk-tb-col tb-col-lg"><span class="sub-text"><b>Résultat</b></span></div>
                  <div class="nk-tb-col nk-tb-col-tools text-end">
                     <div class="dropdown">
                        <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                           <ul class="link-tidy sm no-bdr">
                              <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="bl">
                                    <label class="custom-control-label" for="bl">Balance</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                    <label class="custom-control-label" for="ph">Phone</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="vri">
                                    <label class="custom-control-label" for="vri">Verified</label>
                                 </div>
                              </li>
                              <li>
                                 <div class="custom-control custom-control-sm custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="st">
                                    <label class="custom-control-label" for="st">Status</label>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .nk-tb-item -->
               @foreach ($demandes as $demande )
               <div class="nk-tb-item">
                  <div class="nk-tb-col nk-tb-col-check">
                     <div class="custom-control custom-control-sm custom-checkbox notext">
                        <input type="checkbox" class="custom-control-input" id="uid1">
                        <label class="custom-control-label" for="uid1"></label>
                     </div>
                  </div>
                  <div class="nk-tb-col">
                     <div class="user-card">
                        <div class="user-name">
                           <b><span class="">{{$demande->Ref}}{{$demande->id}} </span></b>
                        </div>
                     </div>
                  </div>
                  <div class="nk-tb-col tb-col-md">
                     <span>{{$demande->created_at}}</span>
                  </div>
                  <div class="nk-tb-col tb-col-sm">
                     <span>{{$demande->navire->Nom_Navire??""}}</span>
                  </div>
                  <div class="nk-tb-col tb-col-md">
                     <span>{{$demande->User->name}}</span>
                  </div>
                  <div class="nk-tb-col tb-col-xxl">
                     <span>
                        <div class="progress progress-lg bg-light" >
                           <div class="progress-bar bg-dark " data-progress="70">70% </div>
                        </div>
                     </span>
                  </div>
                  <div class="nk-tb-col">
                     {{-- <span class="tb-status text-success">Active </span> --}}
                     <span class="badge" style="background-color:#df6d14">En cours</span>
                  </div>
                  <div class="nk-tb-col tb-col-xxl">
                     <span>...</span>
                  </div>
                  <div class="nk-tb-col tb-col-lg">
                     <ul class="list-status">
                        <li> <span class="text-dark"><i>En attente...</i></span></li>
                     </ul>
                  </div>
                  <div class="nk-tb-col nk-tb-col-tools">
                     <ul class="nk-tb-actions gx-2">
                        <li class="nk-tb-action-hidden">
                           <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Imprimer">
                           <em class="icon ni ni-printer-fill"></em>
                           </a>
                        </li>
                        <li class="nk-tb-action-hidden">
                           <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Envoi Email">
                           <em class="icon ni ni-mail-fill"></em>
                           </a>
                        </li>
                        <li class="nk-tb-action-hidden">
                           <a href="{{route("home.demandes.detaildemandeagents.index")}}" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title=" Détail">
                           <em class="icon ni ni-eye"></em> 
                           </a>
                        </li>
                        <li>
                           <div class="drodown">
                              <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                              <div class="dropdown-menu dropdown-menu-end">
                                 <ul class="link-list-opt no-bdr">
                                    <li><a  href="#" ><em class="icon ni ni-user-fill"></em><span>Demandeur</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Exporter</span></a></li>
                                    <li class="divider"></li>
                                    {{-- <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Demandeur</span></a></li> --}}
                                    <li><a href="#"><em class="icon ni ni-puzzle"></em><span>Navire</span></a></li>
                                    {{-- 
                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                    --}}
                                 </ul>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- .nk-tb-item -->
               @endforeach
               
         </div>
         <!-- .nk-tb-list -->
      </div>
      <!-- .card-inner -->
      <div class="card-inner">
         {{$demandes->links()}}
         {{-- 
         <ul class="pagination justify-content-center justify-content-md-start">
            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
         </ul>
         <!-- .pagination --> --}}
      </div>
      <!-- .card-inner -->
   </div>
   <!-- .card-inner-group -->
</div>
<!-- .card -->
</div><!-- .nk-block -->
@endsection