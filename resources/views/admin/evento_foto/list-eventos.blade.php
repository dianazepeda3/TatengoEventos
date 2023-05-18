@can('permisos')
    <x-app-layout sel="evento_foto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Lista de Eventos</h4>
                        </div>
                        <a href={{route('eventofoto.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Archivo</a>
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
                                <th>Categoria</th>                          
                                <th>Descripcion</th>
                                <th>Acción</th>                            
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            @foreach ($eventoFotos as $eventofoto)                                                 
                                <tr>
                                    <td>
                                        <div class="checkbox d-inline-block">
                                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                                            <label for="checkbox2" class="mb-0"></label>
                                        </div>
                                    </td>  
                                    <td>{{ $eventofoto->nombre }}</td>                               
                                    <td>{{ $eventofoto->categoria->nombre }}</td>                       
                                    <td>{{ $eventofoto->descripcion }}</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                                href="{{route('eventofoto.edit', $eventofoto)}}"><i class="ri-pencil-line mr-0"></i></a>
                                            <a class="badge bg-primary mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Ver"
                                                href="{{ route('eventofoto.show', $eventofoto) }}"><i class="ri-eye-line mr-0"></i></a>  
                                            @can('admin')                                                
                                                <a class="badge bg-warning mr-2 eliminar" data-id="{{ $eventofoto->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" href="#"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                                <form id="my_form_{{ $eventofoto->id }}" action="{{ route('eventofoto.destroy', $eventofoto) }}" method="POST">
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
@else
    {{ abort(404); }}
@endcan

<script>
    // Capturar el evento de clic en el enlace de eliminar
    $('.eliminar').on('click', function(event) {
        event.preventDefault();
        
        // Obtener el ID del producto a eliminar desde el atributo data-id
        var meseroId = $(this).data('id');
        
        // Mostrar la ventana emergente de confirmación
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción no se puede deshacer.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realizar la eliminación mediante Ajax
                $.ajax({
                    url: '{{ route("eventofoto.destroy", ":id") }}'.replace(':id', meseroId),
                    type: 'POST',
                    data: {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Eliminación exitosa
                        Swal.fire(
                            'Eliminado',
                            'El evento muestra ha sido eliminado.',
                            'success'
                        ).then((result) => {
                            // Actualizar la página o realizar alguna otra acción
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        // Error en la eliminación
                        Swal.fire(
                            'Error',
                            'Ha ocurrido un error al eliminar al evento muestra.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>