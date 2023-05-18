@can('permisos')
    <x-app-layout sel="evento_foto">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3"></h4>
                        </div>
                        <a href={{route('eventofoto.index')}}  class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Eventos</a>
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
                            <a href={{route('eventofoto.show', $eventofoto)}} class="btn btn-primary mr-2">Agregar Archivo</a>
                            @can('eliminar')                                                    
                                <a class="btn btn-danger mr-2" href="javascript:{}" 
                                    onclick="document.getElementById('my_form_{{ $eventofoto->id }}').submit();">Eliminar Evento</a>                                            
                                <form id="my_form_{{ $eventofoto->id }}" action="{{ route('eventofoto.destroy', $eventofoto) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form> 
                            @endcan
                        </div>
                        <div class="card-body">                                                
                            <form action={{ route('eventofoto.update', $eventofoto) }} method="POST" data-toggle="validator">
                                @csrf
                                @method('PATCH')                            
                                <div class="row">                              
                                    <div class="col-md-6">                      
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $eventofoto->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
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
                                                            @if ($eventofoto->categoria_id == $categoria->id)    
                                                                selected
                                                            @endif
                                                        >{{$categoria->nombre}}</option>
                                                    @endif
                                                @endforeach  
                                                
                                            </select>
                                        </div>
                                    </div>                                                                                                                                                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea id="descripcion" name="descripcion" class="form-control" rows="4">{{ old('descripcion') ?? $eventofoto->descripcion }}</textarea>
                                        </div>
                                    </div>
                                </div>                            
                                <button type="submit" class="btn btn-primary mr-2">Editar Paquete</button>
                                <a href={{route('eventofoto.index')}}  class="btn btn-danger mr-2">Cancelar</a>                            
                            </form>                        
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
@else
    {{ abort(404); }}
@endcan