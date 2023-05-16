<x-app-layout sel="categoria">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href={{route('paquete.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Paquetes</a>
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
                            <h4 class="card-title">Agregar Paquete</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('paquete.store' )}} method="POST" data-toggle="validator">
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
                                        <label>Precio *</label>
                                        <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                                                                                                                                                                                      
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción </label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" rows="2"></textarea>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Producto *</label>
                                        <select id="producto_id" name="producto_id" class="selectpicker form-control" data-style="py-0" data-live-search="true">
                                            @foreach ($productos as $producto)
                                                <option value="{{ $producto->id }}">{{$producto->nombre}}</option>                                                                                              
                                            @endforeach                                      
                                        </select>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cantidad *</label>
                                        <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{ old('cantidad') }}" placeholder="Ingresa cantidad" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    -->
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Agregar Paquete</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>