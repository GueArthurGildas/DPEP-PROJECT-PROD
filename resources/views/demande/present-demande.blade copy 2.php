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
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac</p>
                              <span class="time">...</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-2 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Information concernant le port d'accueil</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac</p>
                              <span class="time">...</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-3 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les captures à bord du navire</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">....</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-4 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les autorisations de pêche (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">.....</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-5 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les autorisations de transbordement (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">....</span>
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




 <div class="content-page wide-md m-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                        <div class="nk-block-head-content text-center">
                                            <h2 class="nk-block-title fw-normal">Regular Page Title</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">We love to share ideas! Visit our blog if you're looking for great articles or inspiration to get you going.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="card">
                                            <div class="card-inner card-inner-xl">
                                                <article class="entry">
                                                    <h3>Fuga eius ipsama dolores asperiores</h3>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eius ipsam blanditiis voluptatem mollitia dolores asperiores ipsum rerum repellendus. Ullam et, quam eos blanditiis ipsum tempore minus quis laborum praesentium.</p>
                                                    <p>Popsam blanditiis voluptatem mollitia dolores asperiores ipsum rerum repellendus. Ullam et, quam eos blanditiis ipsum tempore.</p>
                                                    <img src="./images/slides/slide-b.jpg" alt="">
                                                    <h4>Mollitia dolores asperiores ipsum rerum repellendus</h4>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illoveritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
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
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac</p>
                              <span class="time">...</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-2 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Information concernant le port d'accueil</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac</p>
                              <span class="time">...</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-3 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les captures à bord du navire</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">....</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-4 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les autorisations de pêche (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">.....</span>
                           </div>
                        </div>
                     </li>
                     <li class="timeline-item">
                        <div class="timeline-status bg-warning"></div>
                        <div class="timeline-date">Etape-5 <h5><em class="icon ni ni-check-fill-c text-success"></em></h5></div>
                        <div class="timeline-data">
                           <h6 class="timeline-title">Les autorisations de transbordement (Optionnel)</h6>
                           <div class="timeline-des">
                              <p>Integer lectus enim vivamus natoque sagittis duis.ridiculus dapibus hac.</p>
                              <span class="time">....</span>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>

            </div> 
                                                    {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illoveritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p> --}}
                                                    <h5>Perspiciatis unde omnis iste natus error sit voluptatem</h5>
                                                    <p>Mollitia dolores asperiores ipsum rerum repellendus Sed ut accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illoveritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                                </article>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .content-page -->


@endsection

@include("code-js.present-js")