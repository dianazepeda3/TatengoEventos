<x-app-layout sel="categoria">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Lista de Categorias</h4>
                    </div>
                    <a href={{route('categoria.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Categoria</a>
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
                            <th>Categoria</th>
                            <th>Categoria de</th>
                            <th>Descipcion</th>                            
                            <th>Acción</th>                                                     
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach ($categorias as $cat)                                                 
                            <tr>
                                <td>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                                        <label for="checkbox2" class="mb-0"></label>
                                    </div>
                                </td>
                                <td>{{ $cat->nombre }}</td>                                   
                                <td>{{ $cat->categoria_de }}</td> 
                                <td>
                                    @if (isset($cat->descripcion))
                                      {{$cat->descripcion}}
                                    @else
                                        Sin descripción
                                    @endif                                                                    
                                </td>                                                                                         
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <!--<a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"
                                            href="#"><i class="ri-eye-line mr-0"></i></a>-->
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                             href="{{route('categoria.edit', $cat)}}"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"
                                             href="javascript:{}" onclick="document.getElementById('my_form_{{ $cat->id }}').submit();"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                        <form id="my_form_{{ $cat->id }}" action={{ route('categoria.destroy', $cat) }} method="POST">
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
        
</x-app-layout>