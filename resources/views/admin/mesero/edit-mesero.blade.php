<x-app-layout sel="mesero">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href={{route('mesero.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Meseros</a>
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
                        <form action={{ route('mesero.update', $mesero) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $mesero->nombre }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>      
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telefono *</label>
                                        <input id="telefono" name="telefono" type="text" class="form-control" value="{{ old('telefono') ?? $mesero->telefono }}" placeholder="Ingresa telefono" data-errors="Please Enter Tel." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Puesto </label>
                                        <input id="puesto" name="puesto" type="text" class="form-control" value="{{ old('puesto') ?? $mesero->puesto }}" placeholder="Ingresa puesto" >
                                        
                                    </div>
                                </div>                       
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Sueldo *</label>
                                        <input id="sueldo" name="sueldo" type="text" class="form-control" value="{{ old('sueldo') ?? $mesero->sueldo }}" placeholder="Ingresa sueldo" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>       
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estatus *</label>
                                        <select id="estatus" name="estatus" class="selectpicker form-control" data-style="py-0">
                                            <option name="estatus" value="1"
                                                @if (isset($mesero->estatus))
                                                    @if ($mesero->estatus == 1)    
                                                        selected
                                                    @endif
                                                @else
                                                    @if (old('estatus') == 1)    
                                                        selected
                                                    @endif
                                                @endif
                                            >Activo</option>
                                            <option name="estatus" value="2"
                                            @if (isset($mesero->estatus))
                                                @if ($mesero->estatus == 2)    
                                                    selected
                                                @endif
                                            @else
                                                @if (old('estatus') == 2)    
                                                    selected
                                                @endif
                                            @endif
                                            >No activo</option>
                                            <option name="estatus" value="3"
                                                @if (isset($mesero->estatus))
                                                    @if ($mesero->estatus == 3)    
                                                        selected
                                                    @endif
                                                @else
                                                    @if (old('estatus') == 3)    
                                                        selected
                                                    @endif
                                                @endif
                                            >En vacaciones</option>
                                        </select>
                                    </div>
                                </div>                                                                                                        
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar Mesero</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>