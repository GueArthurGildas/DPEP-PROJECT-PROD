@extends("layouts.master")
@section("content")

<div class="row" id="Contain-present-with-image">
   
   
      <div class="col-6">
      
         <div class="card bg-lighter">
            <div class="card-inner ">
               <div class="card-title-group">
                  <div class="card-title">
                     <h5 class="title">Avant de commencer </h5>
                  </div>
                  <div class="card-tools"><a href="#" class="link">Télécharger</a></div>
               </div>
            </div>
            <div class="card-inner">
               <div class="timeline">
                  <h6 class="timeline-head">Veuillez suivre les étapes suivantes lors de la soummission de votre demande</h6><br>
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
                           <h6 class="timeline-title">Les captures à bord du navire</h6>
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
                           <h6 class="timeline-title">Les autorisations de pêche (Optionnel)</h6>
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
                           <h6 class="timeline-title">Les autorisations de transbordement (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Re-submitted KYC Application form.</p>
                              <span class="time">09:30am</span>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

            </div> 
             
            <a href="javascript:void(0);"  onclick="affSpinerInsideBtnCommencer()" class="btn btn-xl btn-dark justify-center" >

             <div class="spinner-border" id="loadingForButton" style="width: 3rem; height: 3rem; display:none" role="status">
               
             </div>

               <span id="text-commencer">
                  Commencer
               </span>

            </a>
            
                                                        <form id="goToStep1" action="{{route("home.demandes.naviredemande.index")}}" method="get" class="d-none">
                                                          
                                                            <input type="text" name="test" value="ok">
                                                        </form> 


         </div>
     
   </div>
   
   
   
   
   <div class="col-6  ">
      <div class="nk-block-between-md g-4">
         <div class="nk-block-head-content">
            <h2 class="nk-block-title fw-normal"></h2>
            <div class="nk-block-des">
               {{-- <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p> --}}
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

</div>


<div class="justify-center "  >
   
   <div id="text-content-loading" style="display:none;">
      
         <h3 class="mt-5" id="preparation-text" >Préparation ...</h3>
         <div></div>
         <div class="spinner-border justify-center"  style="width: 5rem; height: 5rem" role="status"></div>
         <br><br><br><br><br><br><br><br><br><br><br><br><br>
   </div>
 
   
</div>


@endsection

@include("code-js.present-js")