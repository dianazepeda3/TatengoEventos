<x-app-layout sel="producto">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href="/admin/producto" class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Productos</a>
                </div>
                <x-validation-errors/>        
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Editar Producto</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">                                                
                        <form action={{ route('producto.update', $producto) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $producto->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                                        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoria *</label>
                                        <select id="categoria" name="categoria" name="type" class="selectpicker form-control" data-style="py-0">
                                            @foreach ($categorias as $categoria)   
                                                @if ($categoria->categoria_de == "Productos")                                         
                                                    <option value="{{ $categoria->id }}"
                                                        @if ($producto->categoria_id == $categoria->id)    
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
                                        <label>Precio *</label>
                                        <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio') ?? $producto->precio }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Color </label>
                                        <input id="color" name="color" type="text" class="form-control" value="{{ old('color') ?? $producto->color }}" placeholder="Ingresa color" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Total *</label>
                                        <input id="total" name="total" type="text" class="form-control" value="{{ old('total') ?? $producto->total }}" placeholder="Ingresa total" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Disponible *</label>
                                        <input id="disponible" name="disponible" type="text" class="form-control" value="{{ old('disponible') ?? $producto->disponible }}" placeholder="Ingresa disponibilidad" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                              
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción / Detalles del Producto</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4">{{ old('descripcion') ?? $producto->descripcion }}</textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar Producto</button>
                            <a href={{route('producto.index')}}  class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>