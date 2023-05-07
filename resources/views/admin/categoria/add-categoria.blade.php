<x-app-layout sel="categoria">
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
                            <h4 class="card-title">Agregar Categoria</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action={{ route('categoria.store' )}} method="POST" data-toggle="validator">
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
                                        <label>Descripción </label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Agregar Categoria</button>
                            <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>