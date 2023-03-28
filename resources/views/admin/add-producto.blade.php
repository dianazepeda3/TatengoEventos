<x-app-layout sel="addP">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3"></h4>
                    </div>
                    <a href="/admin/lista-productos" class="btn btn-primary add-list"><i class="las ri-arrow-drop-left-line mr-3"></i>Productos</a>
                </div>
            </div>  
            <div class="col-sm-12">
                <div class="card">                    
                    <div class="card-header d-flex justify-content-between">                        
                        <div class="header-title">
                            <h4 class="card-title">Agregar Producto</h4>                                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/producto" method="POST" data-toggle="validator">
                            @csrf
                            <div class="row">
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tipo de Producto *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Standard</option>
                                            <option>Combo</option>
                                            <option>Digital</option>
                                            <option>Service</option>
                                        </select>
                                    </div> 
                                </div>  -->
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') }}" placeholder="Ingresa nombre" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                <!--<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Codigo *</label>
                                        <input id="codigo" name="codigo" type="text" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->
                                <!--<div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Barcode Symbology *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>CREM01</option>
                                            <option>UM01</option>
                                            <option>SEM01</option>
                                            <option>COF01</option>
                                            <option>FUN01</option>
                                            <option>DIS01</option>
                                            <option>NIS01</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoria *</label>
                                        <select id="categoria" name="categoria" name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Mesas</option>
                                            <option>Sillas</option>
                                            <option>Cristaleria</option>
                                            <option>Luz y sonido</option>
                                            <option>Toldos</option>
                                            <option>Bases</option>
                                            <option>Decoración</option>
                                        </select>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Precio *</label>
                                        <input type="text" class="form-control" placeholder="Enter Cost" data-errors="Please Enter Cost." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Precio *</label>
                                        <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio') }}" placeholder="Ingresa precio" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Color </label>
                                        <input id="color" name="color" type="text" class="form-control" value="{{ old('color') }}" placeholder="Ingresa color" >
                                        
                                    </div>
                                </div>
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tax Method *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Exclusive</option>
                                            <option>Inclusive</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Total *</label>
                                        <input id="total" name="total" type="text" class="form-control" value="{{ old('total') }}" placeholder="Ingresa total" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Disponible *</label>
                                        <input id="disponible" name="disponible" type="text" class="form-control" value="{{ old('disponible') }}" placeholder="Ingresa disponibilidad" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control image-file" name="pic" accept="image/*">
                                    </div>
                                </div>-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descripción / Detalles del Producto</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>