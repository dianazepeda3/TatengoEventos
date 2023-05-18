<x-app-layout sel="user">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href="{{ route('user.index') }}" class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Usuarios</a>
                </div>
                <x-validation-errors/>        
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Editar Usuario</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">                                                
                        <form action={{ route('user.update', $user) }} method="POST" data-toggle="validator">
                            @csrf
                            @method('PATCH')                            
                            <div class="row">                              
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') ?? $user->name }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>     
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tipo de Usuario *</label>
                                        <select id="tipo" name="tipo" name="type" class="selectpicker form-control" data-style="py-0">                                       
                                            <option value="0" 
                                            @if ($user->isAdmin == 0 && $user->isEmpleado == 0)    
                                                selected
                                            @endif>Cliente</option>  
                                            <option value="1"@if ($user->isEmpleado)    
                                                selected
                                            @endif>Empleado</option> 
                                            <option value="2"@if ($user->isAdmin)    
                                                selected
                                            @endif>Admin</option>                                                                       
                                        </select>
                                    </div>
                                </div>                                                                                                                                                     
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Editar user</button>
                            <a href={{route('user.index')}}  class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>