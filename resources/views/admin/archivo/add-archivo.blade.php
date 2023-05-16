<x-app-layout sel="archivo">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href={{route('categoria.index')}} class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Categorias</a>
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
                            <h4 class="card-title">Agregar Archivo</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('archivo.store' )}} method="POST" data-toggle="validator" enctype="multipart/form-data">
                            @csrf
                            <div class="row">                             
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre de archivo *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>   
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Selecciona Archivo *</label>
                                        <input id="archivo" name="archivo" type="file">
                                    </div>
                                </div>                                                                                                                                                                              
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Guardar Archivo</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>