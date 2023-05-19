<x-guest-layout>
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
                                        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                            {{ __('Antes de continuar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}
                                        </div>
                                
                                        @if (session('status') == 'verification-link-sent')
                                            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                                            </div>
                                        @endif
                                
                                        <div class="mt-4 flex items-center justify-between">
                                            <form method="POST" action="{{ route('verification.send') }}">
                                                @csrf                                                                                                                            
                                                    <x-button class="btn btn-primary" type="submit">
                                                        {{ __('Reenviar Verificación a Email') }}
                                                    </x-button>                                                
                                            </form>
                                
                                            
                                                <!--<a
                                                    href="{{ route('profile.show') }}"
                                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                >
                                                    {{ __('Edit Profile') }}</a>-->
                                
                                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                                    @csrf
                                
                                                    <button type="submit" class="btn btn-warning">
                                                        {{ __('Log Out') }}
                                                    </button>
                                                </form>
                                            
                                        </div>
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
