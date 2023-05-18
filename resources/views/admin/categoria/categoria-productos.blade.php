@can('admin')
    <x-app-layout sel="inventario">      
        <div class="container-fluid">        
            <div class="row">                      
                <div class="col-lg-12">
                    <h2>{{ $categoria->nombre }}</h2>  
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3"></h4>
                        </div>
                        <a href={{route('inventario')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Inventario</a>
                    </div>  
                    <div class="row">
                        @foreach ($categoria->productos as $producto)                                                                                                   
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <!--<div class="icon iq-icon-box-2 bg-success-light">
                                                <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                                            </div>-->
                                            <div>
                                                <a href=""><h4 class="mb-2">{{ $producto->nombre }}</h4></a>
                                                <p>
                                                    <b>Descripción:</b> {{ $producto->descripcion }}<br>
                                                    <b>Cantidad:</b> {{ $producto->total }}<br>
                                                    <b>Disponible:</b> {{ $producto->disponible }}<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-success iq-progress progress-1" 
                                                data-percent=
                                                @if ($producto->total != 0)                                                                                            
                                                    @if ((($producto->disponible*100)/$producto->total)>100)
                                                        100
                                                    @else
                                                    {{($producto->disponible*100)/$producto->total}}
                                                    @endif
                                                @endif
                                            ></span>
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
@else
    {{ abort(404); }}
@endcan