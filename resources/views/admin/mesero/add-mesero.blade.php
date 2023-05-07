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
                            <h4 class="card-title">Agregar Mesero</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('mesero.store') }} method="POST" data-toggle="validator">
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
                                        <label>Telefono *</label>
                                        <input id="telefono" name="telefono" type="text" class="form-control" value="{{ old('telefono') }}" placeholder="Ingresa telefono" data-errors="Please Enter Tel." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Puesto </label>
                                        <input id="puesto" name="puesto" type="text" class="form-control" value="{{ old('puesto') }}" placeholder="Ingresa puesto" >
                                        
                                    </div>
                                </div>                       
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Sueldo *</label>
                                        <input id="sueldo" name="sueldo" type="text" class="form-control" value="{{ old('sueldo') }}" placeholder="Ingresa sueldo" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estatus *</label>
                                        <select id="estatus" name="estatus" class="selectpicker form-control" data-style="py-0">
                                            <option name="estatus" value="1">Activo</option>
                                            <option name="estatus" value="2">No activo</option>
                                            <option name="estatus" value="3">En vacaciones</option>
                                        </select>
                                    </div>
                                </div>                                                       
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Agregar Mesero</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>