                <div class="nk-header bg-white is-white">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="html/index.html" class="logo-link">
                                    {{-- <img class="" src="{{asset("images/logo_mirah.png")}}" alt="User profile picture"> --}}
                                    <img class="" src="{{asset("images/logo_mirah.png")}}" srcset="{{asset("images/logo_mirah.png")}}"  alt="logo">
                                    {{-- <img class="" src="{{asset("images/logo_mirah.png")}}" srcset="{{asset("images/logo_mirah.png")}}" alt="logo-dark"> --}}
                                </a>
                                
                            </div><!-- .nk-header-brand -->
                            <div class="">
                                
                                    <li class="nk-menu-item">
                                        <a href="html/index.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Accueil</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                               
                            </div><!-- .nk-header-menu -->

                            <div class="">
                                
                                    <li class="nk-menu-item">
                                        <a href="html/index.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Contact</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                               
                            </div><!-- .nk-header-menu -->

                            <div class="">
                                
                                    <li class="nk-menu-item">
                                        <a href="html/index.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Infos</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                               
                            </div><!-- .nk-header-menu -->
                            
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                <img class="" src="{{asset("images/CI-Logov-2.png")}}" alt="User profile picture">
                                    <li class="dropdown notification-dropdown">
                                       {{-- <a href="#" class="btn btn-round btn-danger">Déconexion</a> --}}
                                        <a class="btn btn-round btn-danger" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                           <span>Déconnexion</span> <em class="icon ni ni-signout"></em>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                    </li><!-- .dropdown -->
                                    {{-- <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"> {{userFullName()}}</span>
                                                        <span class="sub-text">{{Auth()->user()->email}}</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                            <em class="icon ni ni-signout"></em><span>Déconnexion</span>
                                                        </a>
                                                    </li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="d-lg-none">
                                        <a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li> --}}
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>