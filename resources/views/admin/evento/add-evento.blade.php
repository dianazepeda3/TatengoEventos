<x-app-layout sel="evento">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href={{route('evento.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Paquetes</a>
                </div>
                @if($errors->any())
                    <div class="alert alert-secondary" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <div class="iq-alert-text">
                                    <li>{{ $error }}</li>                        
                                </div>
                            @endforeach
                        </ul>
                    </div>   
                 @endif   
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Agregar Evento</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('evento.store' )}} method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">                             
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre Cliente *</label>
                                        <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" value="{{ old('nombre_cliente') }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoria *</label>
                                        <select id="categoria_id" name="categoria_id" name="type" class="selectpicker form-control" data-style="py-0">
                                            @foreach ($categorias as $categoria)
                                                @if ($categoria->categoria_de == "Eventos")
                                                    <option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
                                                @endif                                                
                                            @endforeach                                      
                                        </select>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cotización *</label>
                                        <input id="cotizacion" name="cotizacion" type="text" class="form-control" value="{{ old('cotizacion') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>       
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad Pagada *</label>
                                        <input id="cantidad_pagada" name="cantidad_pagada" type="float" class="form-control" value="{{ old('cantidad_pagada') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>     
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento *</label>
                                        <input id="fecha_evento" name="fecha_evento" type="date" class="form-control" value="{{ old('fecha_evento') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ubicación *</label>
                                        <input id="ubicacion" name="ubicacion" type="float" class="form-control" value="{{ old('ubicacion') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                                                                                                                                                                                  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción </label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" rows="2"></textarea>
                                    </div>
                                </div>                                
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Agregar Evento</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>