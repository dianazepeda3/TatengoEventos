<x-app-layout sel="evento">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href="
                        @can('permisos')
                            {{route('evento.index')}} 
                        @else
                            {{route('evento.categoria')}} 
                        @endcan  
                    " class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Eventos</a>  
                </div>
                <x-validation-errors/>        
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Editar Evento</h4>                                           
                        </div>
                        <a class="mr-2"></a><a class="mr-2"></a>
                        <a href={{route('evento.show', $evento)}} class="btn btn-primary mr-2">Agregar Paquete</a>
                        @can('eliminar')                                                    
                            <a class="btn btn-danger mr-2" href="javascript:{}" 
                                onclick="document.getElementById('my_form_{{ $evento->id }}').submit();">Eliminar Paquete</a>                                            
                            <form id="my_form_{{ $evento->id }}" action="{{ route('evento.destroy', $evento) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form> 
                        @endcan
                    </div>
                    <div class="card-body">                                                
                        <form action={{ route('evento.update', $evento) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $evento->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre Cliente *</label>
                                        <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" value="{{ old('nombre_cliente') ?? $evento->nombre_cliente }}" placeholder="Ingresa nombre del cliente" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>       
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoria *</label>
                                        <select id="categoria_id" name="categoria_id" name="type" class="selectpicker form-control" data-style="py-0">
                                            @foreach ($categorias as $categoria)   
                                                @if ($categoria->categoria_de == "Eventos")                                         
                                                    <option value="{{ $categoria->id }}"
                                                        @if ($evento->categoria_id == $categoria->id)    
                                                            selected
                                                        @endif
                                                    >{{$categoria->nombre}}</option>
                                                @endif
                                            @endforeach  
                                            
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cotización *</label>
                                        <input id="cotizacion" name="cotizacion" type="text" class="form-control" value="{{ old('cotizacion') ?? $evento->cotizacion }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>       
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad Pagada *</label>
                                        <input id="cantidad_pagada" name="cantidad_pagada" type="float" class="form-control" value="{{ old('cantidad_pagada') ?? $evento->cantidad_pagada }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>     
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento *</label>
                                        <input id="fecha_evento" name="fecha_evento" type="date" class="form-control" value="{{ old('fecha_evento') ?? $evento->fecha_evento }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ubicación *</label>
                                        <input id="ubicacion" name="ubicacion" type="float" class="form-control" value="{{ old('ubicacion') ?? $evento->ubicacion }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                @can('permisos')
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Estado *</label>
                                            <select id="estado" name="estado" name="type" class="selectpicker form-control" data-style="py-0">                                                                                  
                                                <option value="0"   
                                                    @if (!$evento->estado)    
                                                            selected
                                                    @endif
                                                >No Aprobado</option>                                              
                                                <option value="1"   
                                                    @if ($evento->estado)    
                                                            selected
                                                    @endif
                                                >Aprobado</option> 
                                            </select>
                                        </div>
                                    </div> 
                                @endcan                                                                                                                                                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción </label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') ?? $evento->descripcion }}" rows="2"></textarea>
                                    </div>
                                </div> 
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar Evento</button>
                            <a href="
                            @can('permisos')
                                {{route('evento.index')}} 
                            @else
                                {{route('evento.categoria')}} 
                            @endcan 
                            " class="btn btn-danger mr-2">Cancelar</a>                            
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>