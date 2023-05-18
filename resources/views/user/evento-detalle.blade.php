<x-guest-layout>
    <!-- ======= Header ======= -->
    <x-user.header info="true"/>
    
    <!-- ====== CONTENT ======= -->
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <ol>
              <li><a href="/">Inicio</a></li>
              <li>Detalles de Evento</li>
            </ol>
            <h2>Detalles de Evento</h2>
    
          </div>
        </section><!-- End Breadcrumbs -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container">
                  <div class="swiper-wrapper align-items-center">
                    
                    @foreach ($eventofoto->archivos as $archivo)
                      <div class="swiper-slide">
                        <img src="{{ $archivo->url_path }}" alt="">
                      </div>
                @endforeach                    
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Información de Evento</h3>
                  <ul>
                    <li><strong>Evento</strong>: {{ $eventofoto->nombre }}</li>
                    <li><strong>Categoria</strong>: {{ $eventofoto->categoria->nombre }}</li>
                    <li><strong>Descripción</strong>:  
                    @if (isset($eventofoto->descripcion))
                        {{$eventofoto->descripcion }}
                    @else
                        Sin descripción
                    @endif
                    </li>
                  </ul>
                </div>                
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
      </main><!-- End #main -->
    
   
</x-guest-layout>
    