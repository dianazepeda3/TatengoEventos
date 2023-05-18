@can('permisos')
    <x-app-layout sel="inventario">      
        <div class="container-fluid">
            <h2>Inventario</h2>  
            <div class="row">            
                <div class="col-lg-12">                
                    <div class="row">
                        @foreach ($categorias as $categoria)                                                             
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <!--<div class="icon iq-icon-box-2 bg-success-light">
                                                <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                                            </div>-->
                                            <div>
                                                <a href="{{ route('categoria.show', $categoria) }}"><h4 class="mb-2">{{ $categoria->nombre }}</h4></a>
                                                <p>{{ $categoria->descripcion }}</p>
                                            </div>
                                        </div>
                                        <!--<div class="iq-progress-bar mt-2">
                                            <span class="bg-success iq-progress progress-1" data-percent="75">
                                            </span>
                                        </div>-->
                                    </div>
                                </div>
                            </div>                    
                        @endforeach
                    </div>
                </div>                                   
            </div>
            <!-- Page end  -->
        </div>
    </x-app-layout>
@else
    {{ abort(404); }}
@endcan