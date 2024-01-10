@extends('layouts.app')

@section('content')


@yield('content')
<div class="container">

    <div class="col-sm-12 d-flex justify-content-between">
        <h1>Asignar Docentes</h1>
        <div>
            <a href="{{ route('asistencias.create') }}" class="btn btn-primary mb-3 btn-sm float-right" data-placement="left">
                {{ __('Create Nuevo Grado') }}
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
                            <th>Docente</th>
                            <th>NUP</th>
                            <th>DUI</th>
                            <th>Grados a los que imparte</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $groupedAsistencias = $asistencias->groupBy('docente_id');
                        @endphp
                        @foreach ($groupedAsistencias as $docenteId => $asistencias)
                        <tr>
                            <td>
                                {{ $asistencias[0]->docente->PrimerNombre }}
                                {{ $asistencias[0]->docente->SegundoNombre }}
                                {{ $asistencias[0]->docente->PrimerApellido }}
                                {{ $asistencias[0]->docente->SegundoApellido }}
                            </td>
                            <td>
                                {{ $asistencias[0]->docente->NUP }}
                            </td>
                            <td>
                                {{ $asistencias[0]->docente->DUI }}
                            </td>
                            <td>
                                <select class="form-select" name="grado_id">
                                    @foreach ($asistencias as $asistencia)
                                    <option value="{{ $asistencia->grado->id }}">
                                        {{ $asistencia->grado->grado }}
                                        {{ $asistencia->grado->seccion }}
                                    </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <form action="{{ route('asistencias.destroy',$asistencia->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('asistencias.show',$asistencia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('asistencias.edit',$asistencia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>
@endsection