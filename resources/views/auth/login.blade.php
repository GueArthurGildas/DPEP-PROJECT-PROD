@extends('layouts.auth')
@section('container')



{{-- 
<div class="row justify-content-center">
   <div class="col-md-8">
      <div class="card">
         <div class="card-header">{{ __('Login') }}</div>
         <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
               @csrf
               <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                  <div class="col-md-6">
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                  <div class="col-md-6">
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-md-6 offset-md-4">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                        </label>
                     </div>
                  </div>
               </div>
               <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                     <button type="submit" class="btn btn-primary">
                     {{ __('Login') }}
                     </button>
                     @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">
                     {{ __('Forgot Your Password?') }}
                     </a>
                     @endif
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
--}}
<div class="nk-content m-4 ">
   <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
      
      <div class="card card-bordered ">
         <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
            <div class="brand-logo pb-4 text-center">
         <a href="html/index.html" class="logo-link">
         {{-- <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
         <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> --}}

         <img class="" src="{{asset("images/logo_mirah-navbar.png")}}" srcset="{{asset("images/logo_mirah-navbar.png")}}"  alt="logo">
         </a>
      </div>
               <div class="nk-block-head-content">
                  <h4 class="nk-block-title text-center">Connexion</h4>
                  <div class="nk-block-des">
                   {{-- <p>Accedez à votre espace de demande </p> --}}
                  </div>
               </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
               @csrf
               
               <div class="form-group">
                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                 <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email or Username <em class="icon ni ni-user"></em></label>
                                        </div>
                     <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email address or username" required autocomplete="email" autofocus>
                     
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  
               </div>
                <div class="form-group">
                <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                           
                                        </div>
                <input id="password" type="password" placeholder="Enter your passcode" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                </div>

               <div class="form-group">
                   {{-- style="background-color:#df6d14" --}}
               <button type="submit" class="btn btn-lg btn-block text-white" style="background-color:#df6d14">
                     {{ __('Login') }}
                     </button>
                     @if (Route::has('password.request'))
                     <a class="btn btn-link" href="{{ route('password.request') }}">
                     {{ __('Mot de passe oublié ?') }}
                     </a>
                     @endif
               </div>

               

            </form>
            <div class="form-note-s2 text-center pt-4"> Nouveau ici? <a href="{{route('register')}}">Créer un compte</a>
            </div>
            <div class="text-center pt-4 pb-3">
               <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
            </div>
            <ul class="nav justify-center gx-4">
               {{-- <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li> --}}
               <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="nk-footer nk-auth-footer-full">
      <div class="container wide-lg">
         <div class="row g-3">
            <div class="col-lg-6 order-lg-last">
               <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                     <a class="nav-link" href="#">Terms & Condition</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Privacy Policy</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Help</a>
                  </li>
                  <li class="nav-item dropup">
                     <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                     <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                        <ul class="language-list">
                           <li>
                              <a href="#" class="language-item">
                              <img src="./images/flags/english.png" alt="" class="language-flag">
                              <span class="language-name">English</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="language-item">
                              <img src="./images/flags/spanish.png" alt="" class="language-flag">
                              <span class="language-name">Español</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="language-item">
                              <img src="./images/flags/french.png" alt="" class="language-flag">
                              <span class="language-name">Français</span>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="language-item">
                              <img src="./images/flags/turkey.png" alt="" class="language-flag">
                              <span class="language-name">Türkçe</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="col-lg-6">
               <div class="nk-block-content text-center text-lg-left">
                  <p class="text-soft">&copy; MIRAH APPLICATION e-Dpep. CI-0025 .</p>
               </div>
            </div>
         </div>
      </div>
 
</div>
@endsection