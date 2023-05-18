@can('admin')
    <x-app-layout sel="user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Lista de Usuarios</h4>
                        </div>
                        <a href={{route('user.create')}} class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Agregar Usuario</a>
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
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Tipo</th>                 
                                <th>Acción</th>                            
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            @foreach ($users as $user)                                                 
                                <tr>
                                    <td>
                                        <div class="checkbox d-inline-block">
                                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                                            <label for="checkbox2" class="mb-0"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--<img src="../assets-admin/images/table/useruct/01.jpg" class="img-fluid rounded avatar-50 mr-3" alt="image">-->
                                            <div>{{ $user->name }}</div>
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>                                
                                    <td>
                                        @if ($user->isAdmin)
                                            Admin 
                                        @elseif ($user->isEmpleado)
                                            Empleado
                                        @else
                                            Cliente
                                        @endif
                                    </td>                                
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <!--<a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver"
                                                href="#"><i class="ri-eye-line mr-0"></i></a>-->
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"
                                                href="{{route('user.edit', $user)}}"><i class="ri-pencil-line mr-0"></i></a>
                                            @can('admin')                                                  
                                                <a class="badge bg-warning mr-2 eliminar" data-id="{{ $user->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" href="#"><i class="ri-delete-bin-line mr-0"></i></a>                                          
                                                <form id="my_form_{{ $user->id }}" action="{{ route('user.destroy', $user) }}" method="POST">
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
        var userId = $(this).data('id');
        
        // Mostrar la ventana emergente de confirmación
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Se eliminaran todos los eventos asociados a este usuario.',
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
                    url: '{{ route("user.destroy", ":id") }}'.replace(':id', userId),
                    type: 'POST',
                    data: {
                        '_method': 'DELETE',
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Eliminación exitosa
                        Swal.fire(
                            'Eliminado',
                            'El usuario ha sido eliminado.',
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
                            'Ha ocurrido un error al eliminar el usuario.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>