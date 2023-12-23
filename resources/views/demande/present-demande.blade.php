@extends("layouts.master")
@section("content")
<div class="row">
   <div class="col-6  ">
      <div class="nk-block-between-md g-4">
         <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal">Avant de commencer </h2>
            <div class="nk-block-des">
               <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
            </div>
         </div>
         <div class="nk-block-head-content">
            <div>
               {{-- <a href="#" id="btnAddCaptureToCollection" class="btn btn-danger m-1"><em class="icon ni ni-plus"></em>Ajouter </a> --}}
               {{-- <a href="#" id="Ajouter-navire" class="btn btn-dark m-1"> <em class="icon ni ni-trash-alt"></em> </a> --}}
            </div>
            <li>
               <div id="loading-svg" style=" display: none;" class="pl-5">
                  <img class="" src="{{asset("images/loading.gif")}}" srcset="{{asset("images/loading.gif")}}"  alt="logo">
               </div>
            </li>
            </ul>
         </div>
      </div>
      <img src="{{asset("images/Work_7.jpg")}}" >
   </div>
   <div class="col-6 ">
      
         <div class="card ">
            <div class="card-inner ">
               <div class="card-title-group">
                  <div class="card-title">
                     <h6 class="title">Etapes de soummision</h6>
                  </div>
                  <div class="card-tools"><a href="#" class="link">Télécharger</a></div>
               </div>
            </div>
            <div class="card-inner">
               <div class="timeline">
                  <h6 class="timeline-head ">Veuillez suivre les étapes suivantes lors de la soummission de votre demande</h6><br>
                  <ul class="timeline-list">
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-1 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Information relative au navire</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-2 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Information concernant le port d'accueil</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-3 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les Autorisations de pêche (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-4 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les autorisatins de transbordement (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-5 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Submited KYC Application</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

            </div> 
             
            <a href="{{route("home.demandes.naviredemande.index",["newdemande"=>"ok"])}}" class="btn btn-xl btn-warning justify-center">

             <div class="spinner-border" id="loadingForButton" style="width: 3rem; height: 3rem" role="status">
               
             </div>

               {{-- <span >
                  Commencer
               </span> --}}

                <span class="">
                   Loading...
                </span>
            </a>

         </div>
     
   </div>
</div>
@endsection