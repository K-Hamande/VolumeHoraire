
<html class="h-100"  >  

    {{-- debut inclusion du head --}}
    
    @include('layouts.head')
    
    {{-- debut inclusion du head --}}
    
    <body>
    
    {{-- *******************
           debut inclusion du Preloader 
     ******************** --}}
       
                @include('layouts.preloader')
    
    {{-- *******************
            fin inclusion  Preloader 
    ******************** --}}
    
    
      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <div class="login-form-bg h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5">
                                    <h4 class="card-title" style="text-align: center"> RECUPERATION DE MOT DE PASSE </h4>
            
                                    <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control @error('email') is-invalid  @enderror " placeholder="Email" value="{{old('email')}}" >
                                        </div>
                                       
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                       
                                        <button class="btn login-form__btn submit w-100 mb-2">ENVOYER</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
        
    
        <!--**********************************
            Scripts
        ***********************************-->
        <script src="plugins/common/common.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/gleek.js"></script>
        <script src="js/styleSwitcher.js"></script>
    </body>
    </html>
    
    
    
    
    
    