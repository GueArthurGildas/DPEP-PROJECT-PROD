<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Survey | Customer Satisfaction | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body bg-white npc-general pg-survey">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content bg-dark is-dark p-5 d-flex justify-between flex-column text-center w-50">
                            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                            <div class="text-block">
                                <img class="nk-survey-gfx mb-5" src="./images/gfx/survey.svg" alt="">
                                <h3 class="text-white">Satisfaction Survey</h3>
                                <p>Help us to improve our service and customer satisfaction.</p>
                            </div>
                            <p>&copy; 2023 DashLite. Template by Softnio</p>
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                            <div class="wide-xs-fix">
                                <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v1">
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-progress stepper-progress mb-4">
                                            <div class="stepper-progress-count mb-2"></div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar stepper-progress-bar"></div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step">
                                                <h5 class="title mb-3">Personal info</h5>
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-first-name">First Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-first-name" name="sv1-first-name" placeholder="First name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-last-name">Last Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-last-name" name="sv1-last-name" placeholder="Last name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-email-address">Email Address</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <h5 class="title mb-3">How did you hear about our company?</h5>
                                                <ul class="row g-3">
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-affliate-source" id="sv1-affliate-source-search" value="sv1-affliate-source-search" required>
                                                            <label class="custom-control-label" for="sv1-affliate-source-search">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/search-engine.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Search engine</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-affliate-source" id="sv1-affliate-source-print-advertise" value="sv1-affliate-source-print-advertise" required>
                                                            <label class="custom-control-label" for="sv1-affliate-source-print-advertise">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/print-advertize.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Print advertise</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-affliate-source" id="sv1-affliate-source-friends" value="sv1-affliate-source-friends" required>
                                                            <label class="custom-control-label" for="sv1-affliate-source-friends">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/friends.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">A friend of mine</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-affliate-source" id="sv1-affliate-source-newspaper" value="sv1-affliate-source-newspaper" required>
                                                            <label class="custom-control-label" for="sv1-affliate-source-newspaper">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/newspaper.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Newspaper</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <h5 class="title mb-4">Do you think to suggest our company to a friend or parent?</h5>
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <ul class="custom-control-group flex-column align-start">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="sv1-reffer-probability" id="sv1-reffer-probability-no" required>
                                                                            <label class="custom-control-label" for="sv1-reffer-probability-no">No</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="sv1-reffer-probability" id="sv1-reffer-probability-maybe" required>
                                                                            <label class="custom-control-label" for="sv1-reffer-probability-maybe">Maybe</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="sv1-reffer-probability" id="sv1-reffer-probability-probably" required>
                                                                            <label class="custom-control-label" for="sv1-reffer-probability-probably">Probably</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" class="custom-control-input" name="sv1-reffer-probability" id="sv1-reffer-probability-yes" required>
                                                                            <label class="custom-control-label" for="sv1-reffer-probability-yes">100% Sure</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-why-not">In the case no, could you please describe ?</label>
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control form-control-sm" id="sv1-why-not" name="sv1-why-not" placeholder="Write Project Description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <h5 class="title mb-3">Please rate your overall satisfaction about the service provided.</h5>
                                                <ul class="row g-3">
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-completely" value="sv1-satisfaction-rate-completely" required>
                                                            <label class="custom-control-label" for="sv1-satisfaction-rate-completely">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/completely-satisfied.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Completely Satisfied</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-normal" value="sv1-satisfaction-rate-normal" required>
                                                            <label class="custom-control-label" for="sv1-satisfaction-rate-normal">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/satisfied.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Satisfied</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-quite" value="sv1-satisfaction-rate-quite" required>
                                                            <label class="custom-control-label" for="sv1-satisfaction-rate-quite">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/quite-satisfied.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Quite Satisfied</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv1-satisfaction-rate" id="sv1-satisfaction-rate-not" value="sv1-satisfaction-rate-not" required>
                                                            <label class="custom-control-label" for="sv1-satisfaction-rate-not">
                                                                <span class="d-flex flex-column text-center p-1 p-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/not-satisfied.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mt-3">Not Satisfied</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <div class="pt-4 pb-2">
                                                    <em class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                                    <h5 class="title mb-2">Survey Completed</h5>
                                                    <p>Thank you very much for your time</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                            <li class="step-prev"><button class="btn btn-dim btn-primary">Back</button></li>
                                            <li class="step-next"><button class="btn btn-primary">Continue</button></li>
                                            <li class="step-submit"><button class="btn btn-primary">Submit</button></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->

</html>