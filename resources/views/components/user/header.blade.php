<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Tatengo Eventos</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets-user/img/logo.png" alt="" class="img-fluid"></a>-->
      
      <nav id="navbar" class="navbar">
        <ul>
            @if ($info=="true")                            
                <li><a class="nav-link scrollto " href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
                <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                <li><a class="nav-link   scrollto" href="#portfolio">Eventos</a></li>    
                <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>                                            
            @endif
            <li><a class="getstarted scrollto" href={{route('login')}}>Iniciar Sesión</a></li>
            <li><a class="getstarted scrollto" href={{route('register')}}>Registrate</a></li>        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->