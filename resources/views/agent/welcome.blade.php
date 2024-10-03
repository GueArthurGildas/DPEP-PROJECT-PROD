

                 <div class="nk-block-head m-4" >

                                <div class="nk-block-between-md g-3">
                                    <div class="nk-block-head-content">
                                        <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                            <div>
                                                <h2 class="nk-block-title fw-normal">Bienvenue <b> <strong>{{userFullName()}}</strong>  /  Accueil </h2>
                                            </div>
                                            <div>
                                                @can("Agent")
                                                        <a href="javascript:void(0);"  onclick="afficheAndDisapearingLoadSvg()" class="btn btn-white btn-light">Liste des demandes <em class="icon ni ni-arrow-long-right ms-2"></em>
                                                        </a>
                                                        <form id="form-go-to-ListeDemande" action="{{route("home.navires.listnavire.index")}}" method="get" class="d-none">
                                                                    @csrf
                                                        </form>
                                                @endcan
                                                

                                            </div>
                                        </div>
                                        <div class="nk-block-des">
                                            <p>Aperçu des statistiques de toute les demandes dans l'application MIRAH GESTION e-DPEP  . Profitez!</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content d-none d-md-block">
                                        <div class="nk-slider nk-slider-s1">
                                            <div class="slider-init" data-slick='{"dots": false, "arrows": false, "fade": true}'>
                                                <div class="slider-item">
                                                    {{-- <div class="nk-iv-wg1">
                                                        <div class="nk-iv-wg1-sub sub-text text-danger">Les demandes recentes</div>
                                                        <a href="#" class="nk-iv-wg1-link link link-primary"><em class="icon ni ni-trend-up"></em> <span>Voir la liste</span></a>
                                                        <div class="nk-iv-wg1-progress">
                                                            <div class="progress-bar bg-primary" data-progress="80"></div>
                                                        </div>
                                                    </div> --}}
                                                </div><!-- .slider-item -->
                                            </div>

                                        </div><!-- .nk-slider -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->