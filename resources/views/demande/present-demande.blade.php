
@extends("layouts.master")
@section("content")

  <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">KYC Verification</h2>
                                        <div class="nk-block-des">
                                            <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner card-inner-lg">
                                            <div class="nk-kyc-app p-sm-2 text-center">
                                                <div class="nk-kyc-app-icon">
                                                    <em class="icon ni ni-files"></em>
                                                </div>
                                                <div class="nk-kyc-app-text mx-auto">
                                                    <p class="lead">You have not submitted your necessary documents to verify your identity. In order to purchase our tokens, please verify your identity.</p>
                                                </div>
                                                <div class="nk-kyc-app-action">
                                                <a href="{{route("home.demandes.naviredemande.index",["newdemande"=>"ok"])}}" class="btn btn-xl btn-dim btn-danger"><span>Cliquer ici pour Commencer</span></a>
                                                    {{-- <a href="html/invest/kyc-form.html" class="btn btn-lg btn-primary">Click here to complete your KYC</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                    <div class="text-center pt-4">
                                        <p>If you have any question, please contact our support team <a href="mailto:info@softnio.com">info@softnio.com</a></p>
                                    </div>
                                </div> <!-- .nk-block -->
                            </div><!-- .kyc-app -->
                        </div>
                    </div>
                </div>
            </div>







{{-- <div class="nk-block pl-5 pr-5" ></div>
<div class=""><a class="back-to text-danger" href="{{route('home')}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>

<div class="nk-block-head-sub"><span></span></div>
<hr>
<div class="nk-block-between-md g-4">
   <div class="nk-block-head-content">
      <h2 class="nk-block-title fw-normal">Etape de soumission</h2>
      <div class="nk-block-des">
         <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
      </div>
   </div>
   <div class="nk-block-head-content">

      <li class="order-md-last">

      <a href="{{route("home.demandes.naviredemande.index",["newdemande"=>"ok"])}}" class="btn btn-xl btn-white btn-dim btn-outline-danger"><span>Commencer</span></a>


      </li>
      <li>
         <div id="loading-svg" style=" display: none;" class="pl-5">
            <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
         </div>
      </li>
      </ul>
   </div>
</div>
</div><!-- .nk-block-head -->
<hr>

<div class="nk-kycfm-head bg-white">
               <div class="nk-kycfm-count ">1</div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Information sur le Port d'accueil </h4>
                  <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
                  <ul class="list list-sm list-checked">
                        <li><a href="#">Port d'escale</a>: Explication </li>
                        <li><a href="#">Pays </a> : Explication </li>
                        <li><a href="#">Date de la dernière escale</a>: Explication </li>
                        <li><a href="#">Objet de l'accès au port</a> : Explication </li>
                        <li><a href="#">Date d'arrivée estimée</a> : Explication  </li>
                        <li><a href="#">Heure d'arrivée estimée</a> : Explication  </li>
                     </ul>
               </div>
            </div> <br>
            <!-- nk-kycfm-head --><hr>

            <div class="nk-kycfm-head bg-white ">
               <div class="nk-kycfm-count ">2</div>
               <div class="nk-kycfm-title">
                  <h4 class="title">  Information sur le Navire</h4>
                  <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
                  <ul class="list list-sm list-checked">
                        <li><a href="#">Nom du Navire</a>: Explication </li>
                        <li><a href="#">Etat Pavillon </a> : Explication </li>
                        <li><a href="#">IRCS</a>: Explication </li>
                        <li><a href="#">Type Navire</a> : Explication </li>
                        <li><a href="#">ID Certificat</a> : Explication  </li>
                        <li><a href="#">OMI</a> : Explication  </li>
                        <li><a href="#">ID Externe</a> : Explication </li>
                        <li><a href="">Longueur</a> : Explication </li>
                        <li><a href="">ORGP</a> : Explication  </li>
                        <li><a href="">Dimension</a> : Explication  </li>
                     </ul>
               </div>
            </div><br>

            <!-- nk-kycfm-head --><hr>

            <div class="nk-kycfm-head bg-white">
               <div class="nk-kycfm-count " >3</div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Les Captures à bord</h4>
                  <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
                   <ul class="list list-sm list-checked">
                        <li><a href="#">Espèce</a>: Explication </li>
                        <li><a href="#">Produit </a> : Explication </li>
                        <li><a href="#">Zone de capture</a>: Explication </li>
                        <li><a href="#">Quantité à bord</a> : Explication </li>
                        <li><a href="#">Quantité à débarquer</a> : Explication  </li>
                     </ul>
               </div>
            </div><br>


            <!-- nk-kycfm-head --><hr>

            <div class="nk-kycfm-head bg-white ">
               <div class="nk-kycfm-count ">4</div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Les autorisations de pêche</h4>
                  <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
                  <ul class="list list-sm list-checked">
                        <li><a href="#">Identificateur</a>: Explication </li>
                        <li><a href="#">Délivré par </a> : Explication </li>
                        <li><a href="#">Date Emission	</a>: Explication </li>
                        <li><a href="#">Date Expiration</a> : Explication </li>
                        <li><a href="#">Espèce</a> : Explication  </li>
                        <li><a href="#">Zone de pêche</a> : Explication </li>
                        <li><a href="#">Engin</a> : Explication  </li>
                     </ul>
               </div>
            </div><br>

            <!-- nk-kycfm-head --><hr>

            <div class="nk-kycfm-head bg-white">
               <div class="nk-kycfm-count ">5</div>
               <div class="nk-kycfm-title">
                  <h4 class="title"> Information sur les transbordements</h4>
                  <p class="sub-title">Veuillez télécharger les documents, pour chaque autorisation que vous disposez</p>
                   <ul class="list list-sm list-checked">
                        <li><a href="#"> Identificateur	</a>: Explication </li>
                        <li><a href="#">Délivré par	</a> : Explication </li>
                        <li><a href="#">Date d'émission</a>: Explication </li>
                        <li><a href="#">Date d'expiration</a> : Explication  </li>
                        <hr>
                        <li><a href="#">Date Transbordement</a>: Explication </li>
                        <li><a href="#">Lieu</a> : Explication </li>
                        <li><a href="#">Nom</a>: Explication </li>
                        <li><a href="#">Etat du pavillon </a> : Explication </li>
                        <li><a href="#">Numero ID</a> : Explication  </li>
                        <li><a href="#">Produit</a> : Explication  </li>
                        <li><a href="#">Espèce</a> : Explication </li>
                        <li><a href="">QTE</a> : Explication </li>
                        <li><a href="">Zone de Transbordement</a> : Explication  </li>
                     </ul>
               </div>
            </div><br>


            <!-- nk-kycfm-head -->--}}

@endsection