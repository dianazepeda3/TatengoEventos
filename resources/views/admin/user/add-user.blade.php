@can('admin')
    <x-app-layout sel="user">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3"></h4>
                        </div>
                        <a href={{route('user.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Usuarios</a>
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
                                <h4 class="card-title">Agregar Usuario</h4>                                           
                            </div>
                        </div>
                        <div class="card-body">
                            <form action={{ route('user.store' )}} method="POST" data-toggle="validator">
                                @csrf
                                <div class="row">                             
                                    <div class="col-md-6">                      
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipo de Usuario *</label>
                                            <select id="tipo" name="tipo" name="type" class="selectpicker form-control" data-style="py-0">                                       
                                                <option value="0">Cliente</option>  
                                                <option value="1">Empleado</option> 
                                                <option value="2">Admin</option>                                                                       
                                            </select>
                                        </div>
                                    </div>                                                                                          
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Ingresa email" data-errors="Please Enter Email." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input id="password" class="floating-input form-control" type="password" name="password"  autocomplete="current-password" placeholder="Ingresa password" data-errors="Please Password." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>                                   
                                </div>                            
                                <button type="submit" class="btn btn-primary mr-2">Agregar Usuario</button>
                                <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
@else
    {{ abort(404); }}
@endcan