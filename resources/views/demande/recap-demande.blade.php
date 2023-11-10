
@extends("layouts.master")
@section("content")

    <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">

                        <div class=""><a class="back-to text-danger" href="{{route("home.demandes.uploadfiledemande.index")}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
<br>

                                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-between-md g-3">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><span>Welcome!</span></div>
                                        <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                            <div>
                                                <h2 class="nk-block-title fw-normal text-danger">Abu Bin Ishtiyak</h2>
                                            </div>
                                            <div><a href="html/invest/schemes.html" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ms-2"></em></a></div>
                                        </div>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your investment account. Have fun!</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content d-none d-md-block">
                                        <div class="nk-slider nk-slider-s1">
                                            <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
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
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="nk-news card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-news-list">
                                            <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                    <em class="icon ni ni-card-view text-danger"></em>
                                                </div>
                                                <div class="nk-news-text">
                                                    <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                                                    {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card  card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 105.94 <span class="change up"><span class="sign"></span>3.4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card is-s1 card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 509,850.90 <span class="change up"><span class="sign"></span>2.8%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-12 col-lg-4">
                                        <div class="nk-wg-card is-s3 card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Total Profits <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 50,600.48 <span class="change down"><span class="sign"></span>1.4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->

                            
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Balance in Account</h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">12,587.96</div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label">Available Funds</span>
                                                                <span class="item-value">105.94</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Invested Funds</span>
                                                                <span class="item-value">12,582.02</span>
                                                            </li>
                                                            <li class="total">
                                                                <span class="item-label">Total</span>
                                                                <span class="item-value">12,587.96</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-primary btn-lg btn-block">Withdraw Funds</a>
                                                        <a href="#" class="btn btn-trans btn-block">Deposit Funds</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">This Month Profit <em class="icon ni ni-info text-primary"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">1,457.23 <span class="change up"><span class="sign"></span>4.5%</span></div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label">Profits</span>
                                                                <span class="item-value">1,045.21</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Referrals</span>
                                                                <span class="item-value">212.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Rewards</span>
                                                                <span class="item-value">200.00</span>
                                                            </li>
                                                            <li class="total">
                                                                <span class="item-label">Total Profit</span>
                                                                <span class="item-value">1,457.23</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-primary btn-lg btn-block">Invest & Earn</a>
                                                        <div class="cta-extra">Earn up to 25$ <a href="#" class="link link-dark">Refer friend!</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-12 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">My Investment</h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">319 <span class="sub">03</span> Active</div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                                <span class="item-value">2,500.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                                <span class="item-value">2,000.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Dimond</a> <small>- 14.29% for 14 Days</small></span>
                                                                <span class="item-value">8,000.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Starter</a> <small>- 1.67% for 30 Days</small></span>
                                                                <span class="item-value">335.00</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-light btn-lg btn-block">See all Investment</a>
                                                        <div class="cta-extra">Check out <a href="#" class="link link-dark">Analytic Report</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <hr>
                             <div class="nk-block">
                                <div class="nk-news card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-news-list">
                                            <a class="nk-news-item" href="#">
                                                <div class="nk-news-icon">
                                                    <em class="icon ni ni-card-view text-danger"></em>
                                                </div>
                                                <div class="nk-news-text">
                                                    <p>Do you know the latest update of 2022? <span> A overview of our is now available on YouTube</span></p>
                                                    {{-- <em class="icon ni ni-external"></em> --}}
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .nk-block -->

                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card  card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 105.94 <span class="change up"><span class="sign"></span>3.4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card is-s1 card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 509,850.90 <span class="change up"><span class="sign"></span>2.8%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-12 col-lg-4">
                                        <div class="nk-wg-card is-s3 card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Total Profits <em class="icon ni ni-info"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount"> 50,600.48 <span class="change down"><span class="sign"></span>1.4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->

                            
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">Balance in Account</h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">12,587.96</div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label">Available Funds</span>
                                                                <span class="item-value">105.94</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Invested Funds</span>
                                                                <span class="item-value">12,582.02</span>
                                                            </li>
                                                            <li class="total">
                                                                <span class="item-label">Total</span>
                                                                <span class="item-value">12,587.96</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-primary btn-lg btn-block">Withdraw Funds</a>
                                                        <a href="#" class="btn btn-trans btn-block">Deposit Funds</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">This Month Profit <em class="icon ni ni-info text-primary"></em></h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">1,457.23 <span class="change up"><span class="sign"></span>4.5%</span></div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label">Profits</span>
                                                                <span class="item-value">1,045.21</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Referrals</span>
                                                                <span class="item-value">212.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Rewards</span>
                                                                <span class="item-value">200.00</span>
                                                            </li>
                                                            <li class="total">
                                                                <span class="item-label">Total Profit</span>
                                                                <span class="item-value">1,457.23</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-primary btn-lg btn-block">Invest & Earn</a>
                                                        <div class="cta-extra">Earn up to 25$ <a href="#" class="link link-dark">Refer friend!</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-md-12 col-lg-4">
                                        <div class="nk-wg-card card card-bordered h-100">
                                            <div class="card-inner h-100">
                                                <div class="nk-iv-wg2">
                                                    <div class="nk-iv-wg2-title">
                                                        <h6 class="title">My Investment</h6>
                                                    </div>
                                                    <div class="nk-iv-wg2-text">
                                                        <div class="nk-iv-wg2-amount ui-v2">319 <span class="sub">03</span> Active</div>
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                                <span class="item-value">2,500.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                                <span class="item-value">2,000.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Dimond</a> <small>- 14.29% for 14 Days</small></span>
                                                                <span class="item-value">8,000.00</span>
                                                            </li>
                                                            <li>
                                                                <span class="item-label"><a href="#">Starter</a> <small>- 1.67% for 30 Days</small></span>
                                                                <span class="item-value">335.00</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-iv-wg2-cta">
                                                        <a href="#" class="btn btn-light btn-lg btn-block">See all Investment</a>
                                                        <div class="cta-extra">Check out <a href="#" class="link link-dark">Analytic Report</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
    </div>

    @endsection