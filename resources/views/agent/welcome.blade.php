               
              
                 <div class="nk-block-head m-4" >
                                <div class="nk-block-between-md g-3">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub">Binvenue ! <b> <strong>{{userFullName()}}</strong> </b></div>
                                        <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                            <div>
                                                <h2 class="nk-block-title fw-normal"><strong class="text-danger">e-DPEP</strong>  /  Accueil </h2>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"  onclick="afficheAndDisapearingLoadSvg()" class="btn btn-white btn-light">Liste des demandes <em class="icon ni ni-arrow-long-right ms-2"></em>
                                                </a>
                                                 <form id="form-go-to-ListeDemande" action="{{route("home.navires.listnavire.index")}}" method="get" class="d-none">
                                                            @csrf
                                                 </form>

                                            </div>
                                        </div>
                                        <div class="nk-block-des">
                                            <p>Aperçu des statistiques de toute l'application MIRAH GESTION e-DPEP  . Profitez!</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content d-none d-md-block">
                                        <div class="nk-slider nk-slider-s1">
                                            <div class="slider-init" data-slick='{"dots": false, "arrows": false, "fade": true}'>
                                                <div class="slider-item">
                                                    <div class="nk-iv-wg1">
                                                        <div class="nk-iv-wg1-sub sub-text text-danger">Recente demande</div>
                                                        <h6 class="nk-iv-wg1-info title">Silver - vient d'effectuer une demande</h6>
                                                        <a href="#" class="nk-iv-wg1-link link link-primary"><em class="icon ni ni-trend-up"></em> <span>Voir le Detail</span></a>
                                                        <div class="nk-iv-wg1-progress">
                                                            <div class="progress-bar bg-primary" data-progress="80"></div>
                                                        </div>
                                                    </div>
                                                </div><!-- .slider-item -->
                                            </div>
                                            
                                        </div><!-- .nk-slider -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->