{{-- <div class="js-preloader">
   <div class="loading-animation tri-ring">
   </div>
</div> --}}
<div class="nk-content-inner m-2 ">
   <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
         <div class="nk-block-between">
            {{-- 
            <div class="nk-block-head-content">
               <h3 class="nk-block-title page-title">Formulaire</h3>
               <div class="nk-block-des text-soft">
                  <p>Input new Patient information carefully.</p>
               </div>
            </div>
            <!-- .nk-block-head-content --> --}}
            <div class="nk-block-head nk-block-head-lg wide-sm m-auto text-center">
               <div class="nk-block-head-content">
                  <h2 class="nk-block-title fw-normal">How can we help?</h2>
                  <div class="nk-block-des">
                     <p>You can find all of the questions and answers abour secure your account</p>
                  </div>
               </div>
            </div>
            <!-- .nk-block-head -->
         </div>
         <!-- .nk-block-between -->
      </div>
      <!-- .nk-block-head -->
      <div class="nk-block">
         <div class="card card-bordered p-5">
            <div class="card-inner-group ">
               <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v2">
                  <div class="nk-stepper-content">
                     <div class="nk-stepper-progress stepper-progress mb-4">
                        <div class="stepper-progress-count mb-2"></div>
                        <div class="progress progress-md">
                           <div class="progress-bar stepper-progress-bar"></div>
                        </div>
                     </div>
                     <div class="nk-stepper-steps stepper-steps">
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              {{-- <h5 class="title">What are you looking for ?</h5>
                              <p>Tation argumentum et usu, dicit viderer evertitur te has</p> --}}
                              <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal"> Info Relative au Navire</h2>
                                                <div class="nk-block-des">
                                                    <p>Ici vous pouvez consulter et effectuer vos demandes. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools gx-3">
                                                <li>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-round btn-icon btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                                                <em class="icon ni ni-setting-alt-fill"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    
                                                                    <li class="preview-item" ><a href="#" data-bs-toggle="modal" data-bs-target="#modalForm" ><span>Chercher un Navire</span></a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span>Vider les champs</span></a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                           </div>
                           
                           <ul class="row g-3">
                                @include("livewire.demandes.section-demande.navire")
                           </ul>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <h5 class="title">How much time you work ?</h5>
                              <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                           </div>
                           <div class="row g-4">
                              <div class="col-12">
                                 <div class="form-group">
                                    <div class="form-control-wrap">
                                       <ul class="custom-control-group flex-column align-start">
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-full" required>
                                                <label class="custom-control-label" for="sv2-time-avilability-full">Full time</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-part" required>
                                                <label class="custom-control-label" for="sv2-time-avilability-part">Part time</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                <label class="custom-control-label" for="sv2-time-avilability-freelance">Freelance / Contract</label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <h5 class="title">what are your expected benefits ?</h5>
                              <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                           </div>
                           <div class="row g-4">
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="form-label" for="sv2-select-position">Select Position</label>
                                    <div class="form-control-wrap">
                                       <select class="form-select js-select2" id="sv2-select-position" name="sv2-select-position" data-placeholder="Select Position" required>
                                          <option value=""></option>
                                          <option value="junior-developer">Junior Developer</option>
                                          <option value="mid-level-developer">Mid Level Developer</option>
                                          <option value="senior-level-developer">Senior Developer</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="form-label" for="sv1-asking-salary">Asking Salary (monthly)</label>
                                    <div class="form-control-wrap">
                                       <input type="text" class="form-control" id="sv1-asking-salary" name="sv1-asking-salary" placeholder="eg:$1200" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="form-label">Workplace preference ? </label>
                                    <div class="form-control-wrap">
                                       <ul class="custom-control-group">
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-work-place" id="sv2-work-place-office" value="in-ofice" required>
                                                <label class="custom-control-label" for="sv2-work-place-office">In Office</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-work-place" id="sv2-work-place-remote" value="remote-home" required>
                                                <label class="custom-control-label" for="sv2-work-place-remote">Remote / Home office</label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="nk-stepper-step">
                           <div class="nk-stepper-step-head mb-4">
                              <h5 class="title">Lets learn about yourself</h5>
                              <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                           </div>
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
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="form-label">Gender </label>
                                    <div class="form-control-wrap">
                                       <ul class="custom-control-group">
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-male" value="gender-male" required>
                                                <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-female" value="gender-female" required>
                                                <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form-group">
                                    <label class="form-label">Upload Documents</label>
                                    <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                    <div class="form-control-wrap">
                                       <div class="form-file">
                                          <input type="file" multiple class="form-file-input" id="sv2-file-attachment">
                                          <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                     <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                        <li class="step-prev"><button class="btn btn-dim btn-primary">Back</button></li>
                        <li class="step-next"><button class="btn btn-primary">Suivant</button></li>
                        <li class="step-submit"><button class="btn btn-primary">Submit</button></li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
         <!-- .card -->
      </div>
      <!-- .nk-block -->
   </div>
</div>



 <!-- Modal @s -->

@include("livewire.navire.modal-search-navire")

<!-- Modal @e -->