@can('permisos')
    <x-app-layout sel="evento_foto">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3"></h4>
                        </div>
                        <a href={{route('eventofoto.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Eventos</a>
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
                                <h4 class="card-title">Información del Evento</h4>                                           
                            </div>
                        </div>
                        <div class="card-body">                       
                            <div class="row">                             
                                <div class="col-md-12">                                                                                                  
                                    <a href=""><h3 class="mb-2">{{ $eventofoto->nombre }}</h3></a>                                    
                                </div>   
                                <div class="col-md-4 d-flex align-items-center">  
                                    <h6>Cliente:&nbsp;</h6>                                                                                                
                                    <label class="h6" class="">{{ $eventofoto->categoria->nombre }}</label>                                 
                                </div>                                                                                                                                                                                                                                                                                 
                                <div class="col-md-12">
                                        <h6 class="card-title"> Descripción:<h6> <h6>{{ $eventofoto->descripcion }}</h6>                                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">                    
                        <div class="card-header d-flex justify-content-between">                        
                            <div class="header-title">
                                <h4 class="card-title">Agregar Archivo al Evento</h4>                                           
                            </div>
                        </div>
                        <div class="card-body">
                            <form action={{ route('eventofoto.archivo.add', $eventofoto )}} method="POST" data-toggle="validator">
                                @csrf
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Archivo *</label>
                                            <select id="archivo_id" name="archivo_id" class="selectpicker form-control" data-style="py-0">
                                                @foreach ($archivos as $archivo)                                       
                                                    <option value="{{ $archivo->id }}">{{$archivo->nombre}} - {{ $archivo->nombre_original }}</option>
                                                @endforeach                                              
                                            </select>
                                        </div>
                                    </div>                                                                                                                   
                                </div>                            
                                <button type="submit" class="btn btn-primary mr-2">Agregar Archivo</button>
                                <!--<button type="reset" class="btn btn-danger">Reset</button>-->                            
                            </form>                        
                        </div>
                    </div>
                    <div class="card"> 
                        <div class="card-header d-flex justify-content-between">                        
                            <div class="header-title">
                                <h4 class="card-title">Archivos del Evento</h4>                                           
                            </div>
                        </div>               
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="table-responsive rounded mb-3">
                                    <table class="table mb-0 tbl-server-info">
                                        <thead class="bg-white text-uppercase">
                                            <tr class="ligth ligth-data">                                                        
                                                <th>Nombre</th>  
                                                <th>Archivo</th>                   
                                                <th>Acción</th>                                                     
                                            </tr>
                                        </thead>
                                        <tbody class="ligth-body">                                                                           
                                            @foreach ($eventofoto->archivos as $archivo)                                                 
                                                <tr>                                        
                                                    <td>{{ $archivo->nombre }}</td> 
                                                    <td><div class="d-flex align-items-center">
                                                        <img src="{{ $archivo->url_path }}" class="img-fluid rounded avatar-50 mr-3" alt="image"></div></td>                                                                                                                                                                                    
                                                    <td>
                                                        <div class="d-flex align-items-center list-action">
                                                            <a class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Ver"
                                                            href="{{ route('archivo.show', $archivo) }}"><i class="ri-eye-line mr-0"></i></a>        
                                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"
                                                                href="javascript:{}" onclick="document.getElementById('my_form_{{ $archivo->id }}').submit();"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                                            <form id="my_form_{{ $archivo->id }}" action="{{ route('eventofoto.archivo.destroy', [$archivo->id, $eventofoto->id]) }}" method="POST">
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
@else
    {{ abort(404); }}
@endcan