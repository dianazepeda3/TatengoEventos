<x-app-layout sel="categoria">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href={{route('categoria.index')}}  class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Categorias</a>
                </div>
                <x-validation-errors/>        
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Editar Paquete</h4>                                           
                        </div>
                        <a class="mr-2"></a><a class="mr-2"></a>
                        <a href={{route('admin.paquete.producto.show', $paquete)}} class="btn btn-primary mr-2">Agregar Producto</a>
                        @can('eliminar')                                                    
                            <a class="btn btn-danger mr-2" href="javascript:{}" 
                                onclick="document.getElementById('my_form_{{ $paquete->id }}').submit();">Eliminar Paquete</a>                                            
                            <form id="my_form_{{ $paquete->id }}" action="{{ route('paquete.destroy', $paquete) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form> 
                        @endcan
                    </div>
                    <div class="card-body">                                                
                        <form action={{ route('paquete.update', $paquete) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $paquete->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>         
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Precio *</label>
                                        <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio') ?? $paquete->precio }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                                                                                                                                                  
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4">{{ old('descripcion') ?? $paquete->descripcion }}</textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar Paquete</button>
                            <a href={{route('paquete.index')}}  class="btn btn-danger mr-2">Cancelar</a>                            
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>