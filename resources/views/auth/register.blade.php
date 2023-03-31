<x-guest-layout>
    <!-- ======= Header ======= -->
    <x-user.header info="false"/>

    <!-- ====== Content ======= -->
    <main>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets-admin/images/favicon.ico" />
        <link rel="stylesheet" href="../assets-admin/css/backend-plugin.min.css">
        <link rel="stylesheet" href="../assets-admin/css/backend.css?v=1.0.0">
        <link rel="stylesheet" href="../assets-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../assets-admin/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="../assets-admin/vendor/remixicon/fonts/remixicon.css">  
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        
        <div class="wrapper">
            <section class="login-content">
               <div class="container">
                  <div class="row align-items-center justify-content-center height-self-center">
                     <div class="col-lg-8">
                        <div class="card auth-card">
                           <div class="card-body p-0">
                              <div class="d-flex align-items-center auth-content">
                                 <div class="col-lg-7 align-self-center">
                                    <div class="p-3">
                                       <h2 class="mb-2">Registrate</h2>
                                       <p>Crea tu cuenta.</p>
                                       <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row">   
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">                                                        
                                                        <input id="name" class="floating-input form-control" placeholder=" " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                        <label for="name" value="{{ __('Name') }}">Nombre</label>
                                                    </div>
                                                </div>                                             
                                                <div class="col-lg-12">
                                                    <div class="floating-label form-group">
                                                       <input id="email" class="floating-input form-control" placeholder=" " type="email" name="email" :value="old('email')" required autocomplete="username">
                                                       <label for="email" value="{{ __('Email') }}">Correo</label>
                                                    </div>
                                               </div>            
                                               <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="password" class="floating-input form-control" placeholder=" " type="password" name="password" required autocomplete="new-password" >
                                                        <label for="password" value="{{ __('Password') }}" >Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="floating-label form-group">
                                                        <input id="password_confirmation" class="floating-input form-control" placeholder=" " type="password" name="password_confirmation" required autocomplete="new-password" >
                                                        <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmar Contraseña</label>
                                                    </div>
                                                </div>     
                                            </div>
                                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="mt-4">
                                                    <x-label for="terms">
                                                        <div class="flex items-center">
                                                            <x-checkbox name="terms" id="terms" required />
                                
                                                            <div class="ml-2">
                                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                                                ]) !!}
                                                            </div>
                                                        </div>
                                                    </x-label>
                                                </div>
                                            @endif
                                
                                            <div class="flex items-center justify-end mt-4">                                                                                                                           
                                                <!--<button  class="btn btn-primary"> {{ __('Register') }}</button>-->
                                                <x-button class="btn btn-primary">
                                                    {{ __('Registar') }}
                                                </x-button>
                                                <p class="mt-3">
                                                    Ya tienes cuenta? <a href="{{ route('login') }}" class="text-primary">Iniciar Sesión</a>
                                                </p>
                                            </div>
                                        </form>                                      
                                    </div>
                                 </div>
                                 <div class="col-lg-5 content-right">
                                    <img src="../assets-admin/images/login/01.png" class="img-fluid image-right" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
        
        <!-- Backend Bundle JavaScript -->
        <script src="../assets-admin/js/backend-bundle.min.js"></script>
        
        <!-- Table Treeview JavaScript -->
        <script src="../assets-admin/js/table-treeview.js"></script>
        
        <!-- Chart Custom JavaScript -->
        <script src="../assets-admin/js/customizer.js"></script>
        
        <!-- Chart Custom JavaScript -->
        <script async src="../assets-admin/js/chart-custom.js"></script>
        
        <!-- app JavaScript -->
        <script src="../assets-admin/js/app.js"></script>
    </main>
 </x-guest-layout>