<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tatengo Eventos - Admin</title>
        
        <!-- Favicon -->        
        <link rel="shortcut icon" href="/assets-admin/images/favicon.ico" />
        <link rel="stylesheet" href="/assets-admin/css/backend-plugin.min.css">
        <link rel="stylesheet" href="/assets-admin/css/backend.css?v=1.0.0">
        <link rel="stylesheet" href="/assets-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/assets-admin/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" href="/assets-admin/vendor/remixicon/fonts/remixicon.css">  
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    </head>
    <body class=" color-light ">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">   
            <x-admin.navegacion sel={{$sel}}/>                            
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="../backend/index.html" class="header-logo">
                                <img src="/assets-admin/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                                <h5 class="logo-title ml-3">Tatengo Eventos</h5>
                            </a>
                        </div>
                        <a href="/" class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Ver Inicio</a> 
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">                                   
                                    <!--<li>
                                        <a href="#" class="btn border add-btn shadow-none mx-2 d-none d-md-block"
                                            data-toggle="modal" data-target="#new-order"><i class="las la-plus mr-2"></i>New
                                            Order</a>
                                    </li>-->
                                    <li class="nav-item nav-icon search-content">
                                        <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                            <form action="#" class="searchbox p-2">
                                                <div class="form-group mb-0 position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                        placeholder="type here to search...">
                                                    <a href="#" class="search-link"><i class="las la-search"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </li>                                                        
                                    <li class="nav-item nav-icon dropdown caption-content">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/assets-admin/images/user/1.png" class="img-fluid rounded" alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 text-center">
                                                    <div class="media-body profile-detail text-center">
                                                        <img src="/assets-admin/images/page-img/profile-bg.jpg" alt="profile-bg"
                                                            class="rounded-top img-fluid mb-4">
                                                        <img src="/assets-admin/images/user/1.png" alt="profile-img"
                                                            class="rounded profile-img img-fluid avatar-70">
                                                    </div>
                                                    <div class="p-3">                                                        
                                                        <div class="d-flex align-items-center justify-content-center mt-3">
                                                            <!--<a href="../app/user-profile.html" class="btn border mr-2">Profile</a>
                                                            <!--<a href="auth-sign-in.html" class="btn border">Sign Out</a>-->
                                                            
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf                                                                
                                                                <a href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();" class="btn border"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>                                                                  
                                                            </form>
                                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                                    {{ __('API Tokens') }}
                                                                </x-dropdown-link>
                                                            @endif

                                                            <div class="border-t border-gray-200 dark:border-gray-600"></div>         
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="popup text-left">
                                <h4 class="mb-3">New Order</h4>
                                <div class="content create-workform bg-body">
                                    <div class="pb-3">
                                        <label class="mb-2">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Name or Email">
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                            <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                            <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="content-page">
                {{ $slot }}
            </div>
        </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--<ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>-->
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="/admin" class="">Tatengo Eventos</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="/assets-admin/js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="/assets-admin/js/table-treeview.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="/assets-admin/js/customizer.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="/assets-admin/js/chart-custom.js"></script>
    
    <!-- app JavaScript -->
    <script src="/assets-admin/js/app.js"></script>

    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
  </body>
</html>