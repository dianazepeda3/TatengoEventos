<x-app-layout sel="paquete">
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
                            <h4 class="card-title">Agregar Productos al Paquete</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('admin.paquete.producto.add', $paquete )}} method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">                             
                                <div class="col-md-12">                                                                                                  
                                    <a href=""><h4 class="mb-2">{{ $paquete->nombre }}</h4></a>                                    
                                </div>   
                                <div class="col-md-6">
                                        <h6 class="card-title">Precio: {{ $paquete->precio }}</h6>    
                                </div>                                                                                                                                                                                                      
                                <div class="col-md-12">
                                        <h6 class="card-title"> Descripción:<h6> <h6>{{ $paquete->descripcion }}</h6>                                                
                                </div>
                                <div class="col-md-6">
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
                                </div>    
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Agregar Producto</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->                            
                        </form>                        
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Productos del Paquete</h4>                                           
                        </div>
                    </div>               
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="table-responsive rounded mb-3">
                            <table class="table mb-0 tbl-server-info">
                                <thead class="bg-white text-uppercase">
                                    <tr class="ligth ligth-data">                                                        
                                        <th>Producto</th> 
                                        <th>Cantidad</th>                         
                                        <th>Acción</th>                                                     
                                    </tr>
                                </thead>
                                <tbody class="ligth-body">
                                    @foreach ($paquete->productos as $producto)                                                 
                                        <tr>                                        
                                            <td>{{ $producto->nombre }}</td>  
                                            <td>{{ $producto->pivot->cantidad }}</td>                                                                                                                                      
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                   <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"
                                                         href="javascript:{}" onclick="document.getElementById('my_form_{{ $producto->id }}').submit();"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                                    <form id="my_form_{{ $producto->id }}" action="{{ route('admin.paquete.producto.destroy', [$producto->id, $paquete->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>                                                                                   
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach                                                                                                                                                
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>