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
                                        <h2 class="mb-2">Iniciar Sesión</h2>                                        

                                        <x-validation-errors class="mb-4" />

                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div>
                                                <label for="email">Correo electrónico</label>
                                                <input id="email" class="floating-input form-control" type="email" name="email" :value="old('email')"  autofocus autocomplete="username" >
                                            </div>

                                            <div>
                                                <label for="password">Contraseña</label>
                                                <input id="password" class="floating-input form-control" type="password" name="password"  autocomplete="current-password" >
                                            </div> 
                                            <div class="flex items-center justify-end mt-4">                                         
                                            <x-button class="btn btn-primary">
                                                {{ __('Iniciar Sesión') }}
                                            </x-button>
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
