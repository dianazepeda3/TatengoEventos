<x-app-layout sel="dash">
    <h2>Dashboard</h2> 
    <div class="">
        <div>
            <h4 class="mb-3"></h4>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Eventos Recientes</h4>
                            </div>                           
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled row top-product mb-0">                                                                                                    
                                @foreach ($archivos->take(10) as $archivo) 
                                    <li class="col-lg-3">
                                        <div class="card card-block card-stretch card-height mb-0">
                                            <div class="card-body">
                                                <div class="bg-warning-light rounded">
                                                    <img class="img-fluid" src="{{ $archivo->url_path }}" alt="Imagen">  
                                                </div>
                                                <div class="style-text text-left mt-3">
                                                    <h5 class="mb-1">{{ $archivo->nombre }}</h5>
                                                    <p class="mb-0">{{ $archivo->nombre_original}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach                                 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">              
                    <div class="card card-transparent card-block card-stretch mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between p-0">
                            <div class="header-title">
                                <h4 class="card-title mb-0">Nuestros paquetes</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <div><a href="{{ route('paquete.index') }}" class="btn btn-primary view-btn font-size-14">Ver Todos</a></div>
                            </div>
                        </div>
                    </div>    
                    @foreach ($paquetes->take(2) as $paquete)      
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body card-item-right">
                                <div class="d-flex align-items-top">                            
                                    <div class="style-text text-left">
                                        <h5 class="mb-2">{{ $paquete->nombre }}</h5>
                                        <p class="mb-2">{{ $paquete->precio }}</p>
                                        <p class="mb-0">{{ $paquete->descripcion }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    @endforeach            
                </div>        
            </div>
        </div>
    </div>      
</x-app-layout>