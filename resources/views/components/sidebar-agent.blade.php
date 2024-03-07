 <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link nk-sidebar-logo">
                            {{-- <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo-small"> --}}
                                    <img class="" src="{{asset("images/logo_mirah.png")}}" srcset="{{asset("images/logo_mirah.png")}}"  alt="logo">

                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item ">
                                    <a href="{{route("home.demandes.accueilagents.index")}}" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth-fill "></em></span>
                                        <span class="nk-menu-text">Statistiques</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Pricipale </h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Demandes</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                         
                                        <li class="nk-menu-item">
                                            <a href="{{route("home.demandes.listedemandeforagents.index")}}" class="nk-menu-link"><span class="nk-menu-text">Liste des Demandes</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Demande(s) Traitée(s)</span></a>
                                        </li>
                                        
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Demande(s) en Attente(s)</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-puzzle-fill"></em></span> 
                                        <span class="nk-menu-text">Navires</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                       
                                        <li class="nk-menu-item">
                                            <a href="{{route("home.navires.listnavire.index")}}"  class="nk-menu-link"><span class="nk-menu-text">Liste des navires</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route("home.navires.newnavire.index")}}"  class="nk-menu-link"><span class="nk-menu-text">Ajouter un navire</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                                        <span class="nk-menu-text">Armateurs</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route("home.armateurs.listarmateur.index")}}" class="nk-menu-link"><span class="nk-menu-text">Liste Armateurs</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2-fill"></em></span>
                                        <span class="nk-menu-text">Inspections</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        
                                        <li class="nk-menu-item"> 
                                            <a href="{{route("home.inspections.newinspection.index")}}" class="nk-menu-link"><span class="nk-menu-text">Nouvelle Inspection</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route("home.inspections.listinspection.index")}}" class="nk-menu-link"><span class="nk-menu-text">Liste des inspections</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Configuration</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item  ">
                                    <a href="#" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
                                        <span class="nk-menu-text">Paramètre</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item"><a href="#" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span><span class="nk-menu-text">Administration</span></a></li>
                                
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>