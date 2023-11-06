@extends("layouts.master")
@section("content")
<div class="nk-block pl-5 pr-5" ></div>
<div class=""><a class="back-to text-danger" href="{{route('home')}}" ><em class="icon ni ni-arrow-left"></em><span>Annuler la demande</span></a></div>
<div class="nk-block-head-sub"><span></span></div>
<div class="nk-block-between-md g-4">
   <div class="nk-block-head-content">
      <h2 class="nk-block-title fw-normal">Etape de soumission, 👋</h2>
      <div class="nk-block-des">
         <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
      </div>
   </div>
   <div class="nk-block-head-content">
      <li class="order-md-last"><a href="{{route("home.demandes.newdemande.index")}}" class="btn btn-white btn-dim btn-outline-dark"><span>Commencer</span></a></li>
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
<div class="nk-block">
   <div class="card card-bordered">
      {{-- <div class="card-inner border-bottom bg-lighter py-3">
         <div class="alert alert-pro alert-warning">
            <div class="alert-text">
               <h6>Etapes de soumission</h6>
               <p>Dans cette partie, vous serons presenté, les explications concerant les differente champs à renseigner dans le formulaire de votre de demande </p>
            </div>
         </div>
      </div> --}}
      <div class="card-inner">
         <div id="accordion" class="accordion">

            <div class="accordion-item">
               <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-2">
                  <h6 class="title">
                     <div class="nk-kycfm-count bg-light">1</div>
                     Information sur le Port d'accueil 
                  </h6>
                  <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse" id="accordion-item-2" data-bs-parent="#accordion" >
                  <div class="accordion-inner">
                     <ul class="list list-sm list-checked">
                        <li><a href="#">Port d'escale</a>: Explication </li>
                        <li><a href="#">Pays </a> : Explication </li>
                        <li><a href="#">Date de la dernière escale</a>: Explication </li>
                        <li><a href="#">Objet de l'accès au port</a> : Explication </li>
                        <li><a href="#">Date d'arrivée estimée</a> : Explication  </li>
                        <li><a href="#">Heure d'arrivée estimée</a> : Explication  </li>
                     </ul>
                  </div>
               </div>
            </div>

            <div class="accordion-item">
               <a href="#" class="accordion-head" data-bs-toggle="collapse" data-bs-target="#accordion-item-1">
                  <h4 class="title">
                     <div class="nk-kycfm-count bg-light"> 2 </div>
                     Information sur le Navire
                  </h4>
                  <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse show" id="accordion-item-1" data-bs-parent="#accordion">
                  <div class="accordion-inner">
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
               </div>
            </div>

            <div class="accordion-item">
               <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-3">
                  <h6 class="title">
                     <div class="nk-kycfm-count bg-light">3</div>
                     Les Captures à bord
                  </h6>
                  <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse" id="accordion-item-3" data-bs-parent="#accordion" >
                  <div class="accordion-inner">
                     <ul class="list list-sm list-checked">
                        <li><a href="#">Espèce</a>: Explication </li>
                        <li><a href="#">Produit </a> : Explication </li>
                        <li><a href="#">Zone de capture</a>: Explication </li>
                        <li><a href="#">Quantité à bord</a> : Explication </li>
                        <li><a href="#">Quantité à débarquer</a> : Explication  </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-4">
                  <h6 class="title">
                     <div class="nk-kycfm-count bg-light">4</div>
                     Les autorisations de pêche
                  </h6>
                  <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse" id="accordion-item-4" data-bs-parent="#accordion" >
                  <div class="accordion-inner">
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
               </div>
            </div>
            <div class="accordion-item">
               <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-5">
                  <h6 class="title">
                     <div class="nk-kycfm-count bg-light">5</div>
                     Information sur les transbordements
                  </h6>
                  <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse" id="accordion-item-5" data-bs-parent="#accordion" >
                  <div class="accordion-inner">
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
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .card -->
</div>
<!-- .nk-block -->
@endsection