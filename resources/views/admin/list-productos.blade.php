<x-app-layout sel="listP">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Lista de Productos</h4>
                    </div>
                    <a href="../admin/add-producto" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Producto</a>
                </div>
            </div>            
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-tables table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>
                                <div class="checkbox d-inline-block">
                                    <input type="checkbox" class="checkbox-input" id="checkbox1">
                                    <label for="checkbox1" class="mb-0"></label>
                                </div>
                            </th>
                            <th>Producto</th>
                            <!--<th>Codigo</th>-->
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Color</th>                            
                            <th>Cantidad</th>
                            <th>Disponible</th>
                            <th>Acción</th>                            
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach ($productos as $prod)                                                 
                            <tr>
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--<img src="../assets-admin/images/table/product/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">-->
                                        <div>
                                            {{ $prod->nombre }}
                                            <p class="mb-0"><small>{{ $prod->descripcion }}</small></p>
                                        </div>
                                    </div>
                                </td>
                                <!--<td>{{ $prod->codigo }}</td>-->
                                <td>{{ $prod->categoria }}</td>
                                <td>{{ $prod->precio }}</td>
                                <td>{{ $prod->color }}</td>
                                <td>{{ $prod->total }}</td>
                                <td>{{ $prod->disponible }}</td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"
                                            href="#"><i class="ri-eye-line mr-0"></i></a>
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                            href="#"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"
                                            href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach                                                                                                                                                
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        
</x-app-layout>