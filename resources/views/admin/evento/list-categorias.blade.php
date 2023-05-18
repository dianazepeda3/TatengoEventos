<x-app-layout sel="categoria">      
    <div class="container-fluid">        
        <div class="row">                      
            <div class="col-lg-12">
                <h2>Eventos</h2>  
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>  
                    @if (isset($evento))
                        <a href={{route('evento.edit', $evento)}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Ver Mi Evento</a>
                    @else     
                        <a href={{route('evento.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Pedir Evento</a>                            
                    @endif
                </div>  
                <div class="row">
                    @foreach ($categorias as $categoria)  
                        @if ($categoria->categoria_de == "Eventos")                                                                                                                                                  
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <!--<div class="icon iq-icon-box-2 bg-success-light">
                                                <img src="../assets/images/product/3.png" class="img-fluid" alt="image">
                                            </div>-->
                                            <div>
                                                <a href=""   
                                                ><h4 class="mb-2">{{ $categoria->nombre }}</h4></a>
                                                <p>                                                
                                                    <b>Descripción:</b> {{ $categoria->descripcion }}<br>
                                                </p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>    
                        @endif                   
                    @endforeach  
                </div>
            </div>                                   
        </div>
        <!-- Page end  -->
    </div>
</x-app-layout>