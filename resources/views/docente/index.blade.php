@extends('layouts.app')
@section('content')


@yield('content')
<div class="container">


    <div class="col-sm-12 d-flex justify-content-between">
        <h1>Docentes</h1>
        <div>
            <a href="{{ route('docentes.create') }}" class="btn btn-primary mb-3  botonazul" data-placement="left" style="width: fit-content;">
                {{ __('Crear Nuevo Docente') }}
            </a>
        </div>
    </div>

    <div class="card">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>

                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Departamento</th>
                            <th>DUI</th>
                            <th>NUP</th>
                            <th>Acciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docentes as $docente)
                        <tr>

                            <td>{{ $docente->id }}</td>
                            <td>{{ $docente->PrimerNombre }} {{ $docente->SegundoNombre }} {{ $docente->SegundoNombre }} {{ $docente->PrimerApellido }} {{ $docente->SegundoApellido }}</td>
                            <!-- <td>{{ $docente->Edad }}</td> -->
                            <!-- <td id="edad_{{ $docente->id }}"></td> -->
                            <!-- <td class="edad-celda" id="edad_{{ $docente->id }}"></td> -->
                            <td class="edad-celda" id="edad_{{ $docente->id }}" data-fecha-nacimiento="{{ $docente->Edad }}"></td>
                            <td>{{ $docente->Genero }}</td>
                            <td>{{ $docente->departamento }}</td>
                            <td>{{ $docente->DUI }}</td>
                            <td>{{ $docente->NUP }}</td>
                            <td>

                                <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('docentes.show',$docente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('docentes.edit',$docente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" onclick="return confirm('¿Estas seguro de eliminar al Docente? {{ $docente->PrimerNombre }} {{ $docente->SegundoNombre }} {{ $docente->PrimerApellido }} {{ $docente->SegundoApellido }}')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="my-4 d-flex justify-content-end">
        {!! $docentes->links() !!}
    </div>


</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var celdasEdad = document.querySelectorAll('.edad-celda');

        celdasEdad.forEach(function(celda) {
            var fechaNacimiento = new Date(celda.dataset.fechaNacimiento);

            var hoy = new Date();
            var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            var mesActual = hoy.getMonth() + 1;
            var diaActual = hoy.getDate();
            var mesNacimiento = fechaNacimiento.getMonth() + 1;
            var diaNacimiento = fechaNacimiento.getDate();

            if (mesActual < mesNacimiento || (mesActual === mesNacimiento && diaActual < diaNacimiento)) {
                edad--;
            }

            celda.textContent = edad;
        });
    });
</script>



@endsection