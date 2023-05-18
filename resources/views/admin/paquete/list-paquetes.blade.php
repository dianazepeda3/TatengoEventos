<x-app-layout sel="paquete">      
    <div class="container-fluid">        
        <div class="row">                      
            <div class="col-lg-12">
                <h2>Paquetes</h2>  
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    @can('permisos')
                        <a href={{route('paquete.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Paquete</a>
                    @endcan
                </div>  
                <div class="row">
                    @foreach ($paquetes as $paquete)                                                                                                   
                        <div class="col-lg-4 col-md-4">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4 card-total-sale">
                                        <!--<div class="icon iq-icon-box-2 bg-success-light">
                                            <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                                        </div>-->
                                        <div>
                                            <a href=
                                            @can('permisos')
                                                {{ route('paquete.edit', $paquete)}}
                                            @else
                                                {{route('paquete.producto.show', $paquete)}}
                                            @endcan    
                                            ><h4 class="mb-2">{{ $paquete->nombre }}</h4></a>
                                            <p>                                                
                                                <b>Precio:</b> {{ $paquete->precio }}<br>
                                                <b>Descripción:</b> {{ $paquete->descripcion }}<br>
                                            </p>
                                        </div>
                                    </div>                                    
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