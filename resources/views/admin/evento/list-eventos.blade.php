<x-app-layout sel="evento">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Lista de Eventos</h4>
                    </div>
                    <a href={{route('evento.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Evento</a>
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
                            <th>Evento</th>                          
                            <th>Cliente</th>
                            <th>Categoria</th>                          
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acción</th>                            
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                        @foreach ($eventos as $evento)                                                 
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
                                            {{ $evento->nombre }}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $evento->nombre_cliente }}</td>
                                <td>{{ $evento->categoria->nombre }}</td>
                                <td>{{ $evento->fecha_evento }}</td>
                                <td>
                                    @if ($evento->estado)
                                        <span class="mt-2 badge badge-success">Aprobado</span>
                                    @else
                                        <span class="mt-2 badge badge-warning">No aprobado</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <!--<a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"
                                            href="#"><i class="ri-eye-line mr-0"></i></a>-->
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                             href="{{route('evento.edit', $evento)}}"><i class="ri-pencil-line mr-0"></i></a>
                                        <a class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Ver"
                                             href="{{ route('evento.show', $evento) }}"><i class="ri-eye-line mr-0"></i></a>  
                                        @can('delete')
                                            <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar"
                                                href="javascript:{}" onclick="document.getElementById('my_form_{{ $evento->id }}').submit();"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                            <form id="my_form_{{ $evento->id }}" action={{ route('evento.destroy', $evento) }} method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>   
                                        @endcan                                                                                
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