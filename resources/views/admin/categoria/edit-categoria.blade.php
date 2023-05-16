@can('categoria')
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
                            <h4 class="card-title">Editar Categoria</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">                                                
                        <form action={{ route('categoria.update', $categoria) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $categoria->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                                                                                                                                                           
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4">{{ old('descripcion') ?? $categoria->descripcion }}</textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar Categoria</button>
                            <a href={{route('categoria.index')}}  class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
@else
   {{ abort(403); }}
@endcan