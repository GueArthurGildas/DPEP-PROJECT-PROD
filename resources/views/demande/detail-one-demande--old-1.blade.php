
@extends("layouts.master")
@section("content")


<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-block-between-md g-3">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><span></span></div>
                                            <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                                {{-- <div><a href="#" class="btn btn-white btn-light"> <em class="icon ni ni-arrow-long-left text-danger ms-2"></em> Retour </a></div> --}}
                                                <div class="nk-block-head-sub"><a href="html/invest/schemes.html" class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>Mon espace</span></a></div>
                                                
                                                <div>
                                                    <h2 class="nk-block-title fw-normal text-danger">DPEP-A03-2Z0  <span class="badge bg-outline bg-danger">Running</span> </h2>
                                                    <div class="nk-block-des">
                                                            
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="nk-block-des">
                                                <p>At a glance summary of your investment account. Have fun!</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->

                                         <div class="nk-block-head-content d-none d-md-block">
                                            <div class="nk-slider nk-slider-s1">
                                                <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                                    <div class="slider-item ">
                                                        <div class="nk-iv-wg1 ">
                                                            <div class="nk-iv-wg1-sub sub-text">Traitement</div>
                                                            <h6 class="nk-iv-wg1-info title">Traitement</h6>
                                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                            <div class="nk-iv-wg1-progress">
                                                                <div class="progress-bar " data-progress="80"></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .slider-item -->
                                                    <div class="slider-item">
                                                        <div class="nk-iv-wg1">
                                                            <div class="nk-iv-wg1-sub sub-text">Statuts</div>
                                                            <h6 class="nk-iv-wg1-info title">Statuts</h6>
                                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                            <div class="nk-iv-wg1-progress">
                                                                <div class="progress-bar bg-primary" data-progress="80"></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .slider-item -->
                                                    <div class="slider-item">
                                                        <div class="nk-iv-wg1">
                                                            <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                                            <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6>
                                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                                            <div class="nk-iv-wg1-progress">
                                                                <div class="progress-bar bg-primary" data-progress="80"></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .slider-item -->
                                                </div>
                                                <div class="slider-dots"></div>
                                            </div><!-- .nk-slider -->
                                        </div><!-- .nk-block-head-content -->
                                         <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"></h3>
                                            <div class="nk-block-des text-soft">
                                                <p></p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
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
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                        </div>
                        <div class="nk-block">
                                    <div class="row g-gs">
                                           <div class="col-lg-8">
                                                    <div class="card card-bordered bg-lighter">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-3">
                                                                <div class="card-title">
                                                                    <h2 class="nk-block-title fw-normal">Silver - Daily 4.76% for 21 Days</h2>
                                                                    {{-- <p>Avancement de test test test test test test . <a href="#" class="link link-sm">Detailed Stats</a></p> --}}
                                                                </div>
                                                                <div class="card-tools mt-n1 me-n1">
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                                                <li><a href="#"><span>30 Days</span></a></li>
                                                                                <li><a href="#"><span>3 Months</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-title-group -->
                                                            <div class="nk-order-ovwg">
                                                                <div class="circle-line justify-content-center ">
																		<div class="circle"><i class=" fas fa-solid fa-check text-warning"></i></div>
																		<div class="line"></div>
																		<div class="circle"><i class=" fas fa-solid fa-check text-warning"></i></div>
																		<div class="line"></div>
																		<div class="circle">3</div>
																</div>
                                                            </div><!-- .nk-order-ovwg -->
                                                            <li class="order-md-last"><a href="#" class="btn btn-dark"><em class="icon ni ni-cross"></em> <span>Cancel this plan</span> </a></li>

                                                        </div>
                                                    </div>
                                           </div>
                                            <div class="col-lg-4">
                                            <div class="card card-bordered ">
                                                <div class="card-inner-group">
                                                    <div class="card-inner card-inner-md">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Les documents afferants</h6>
                                                            </div>
                                                            <div class="card-tools me-n1">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-wg-action">
                                                            <div class="nk-wg-action-content">
                                                                <em class="icon ni ni-cc-alt-fill"></em>
                                                                {{-- <div class="title">Test Test Test</div> --}}
                                                                <p>Nous avons  <strong>Pour Vaildation</strong>  <strong>Le navire </strong>, Voir plus.</p>
                                                            </div>
                                                            <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-wg-action">
                                                            <div class="nk-wg-action-content">
                                                                <em class="icon ni ni-cc-alt-fill"></em>
                                                                {{-- <div class="title">Test Test Test</div> --}}
                                                                <p>Nous avons  <strong>Pour Vaildation</strong>  <strong>Le navire </strong>, Voir plus.</p>
                                                            </div>
                                                            <a href="#" class="btn btn-icon btn-trigger me-n2"><em class="icon ni ni-forward-ios"></em></a>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                    </div>
                </div>
</div>

@endsection