<x-guest-layout>
    <!-- ======= Header ======= -->
    <x-user.header info="true"/>
    
    <!-- ====== CONTENT ======= -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Bienvenido</h1>
            <h2>Decoración de eventos, globos y más...</h2>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#services" class="btn-get-started scrollto">Servicios</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Ver video</span></a>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets-user/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
            <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="assets-user/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        @include('parciales.nosotros')
                
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Servicios</h2>
                <p>Ofrecemos una gran variedad de servicios para todo tipo de Eventos</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Renta de Mobiliario</a></h4>
                    <p>Renta de todo tipo de mobiliario, desde toldos, mesas, sillas hasta brincolines.</p>
                </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Decoraciones</a></h4>
                    <p>Decoración de todo tipo, desde arcos de globos, cortinas, manteleria, centros de mesa hasta letras 
                        y números esoecificos para nombres o años</p>
                </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Servicio de comida</a></h4>
                    <p>Distintos servicios de comida para tus eventos, comidas como birria, taquisa, rollos y más...</p>
                </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-layer"></i></div>
                    <h4><a href="">Servicio de Meseros</a></h4>
                    <p>Nuestros meseros están disponibles para atender todas las necesidades de servicio de alimentos y bebidas.</p>
                </div>
                </div>

            </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                <h3>Nuestro Facebook</h3>
                <p> Ve todas las fotos de nuestros eventos a lo largo de estos años en nuestro facebook</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="https://www.facebook.com/tatengo.eventos.35">Visitar</a>
                </div>
            </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Eventos</h2>
                <p>En seguida mostramos algúnos de nuestros eventos y decoraciones a lo largo de estos años</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Todos</li>
                <li data-filter=".filter-app">Globos</li>
                <li data-filter=".filter-card">Mobiliario</li>
                <li data-filter=".filter-web">Fiesta tematica</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion1.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Decoracion con globos</h4>
                    <p>Globos</p>
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion2.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Decoracion para fiesta infantil</h4>
                    <p>Fiesta tematica</p>
                    <a href="#" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion4.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Decoración para fiesta de XV</h4>
                    <p>Globos</p>
                    <a href="assets-user/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion3.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Evento</h4>
                    <p>Mobiliario</p>
                    <a href="assets-user/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion8.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Fiesta infantil</h4>
                    <p>Fiesta tematica</p>
                    <a href="assets-user/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion5.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Decoración con globos</h4>
                    <p>Globos</p>
                    <a href="assets-user/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion6.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Evento</h4>
                    <p>Mobiliario</p>
                    <a href="assets-user/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion9.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Evento</h4>
                    <p>Mobiliario</p>
                    <a href="assets-user/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="assets-user/img/decoraciones/decoracion7.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                    <h4>Posada Navideña</h4>
                    <p>Fiesta tematica</p>
                    <a href="assets-user/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->   
    
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contacto</h2>
                <p>Para contactarnos tenemos distintas opciones, ya sea que nos encontre en la dirección que esta debajo, por telefono o por nuestras redes sociales</p>
            </div>

            <div class="row">

                <div class="col-lg-13 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Ubicacion:</h4>
                    <p>Constitución Ote #15
                        Tlajomulco, Centro 45640
                        Jalisco, México</p>
                    </div>

                    <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Correo:</h4>
                    <p>tatengoeventos@hotmail.com</p>
                    </div>

                    <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Teléfono:</h4>
                    <p>+1 5589 55488 55s</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d467.2288319365955!2d-103.44627908950163!3d20.472147442280622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f53fe117c91eb%3A0x976c80147556964c!2sTATENGO%20EVENTOS!5e0!3m2!1ses!2smx!4v1680300950144!5m2!1ses!2smx" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

                </div>                

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
</x-guest-layout>
    