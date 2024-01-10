@extends('layouts.app')

@section('content')


@yield('content')
<div class="container">

    <div class="col-sm-12 d-flex justify-content-between">
        <h1>Grados y Secciones</h1>
        <a href="{{ route('grados.create') }}" class="btn btn-primary mb-3 btn-sm float-right" data-placement="left">
            {{ __('Crear Nuevo Grado') }}
        </a>
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

                            <th>Grado</th>
                            <th>Modalidad</th>
                            <th>Seccion</th>
                            <th>Departamento</th>
                            <th>Año</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grados as $grado)
                        <tr>

                            <td>{{ $grado->grado }}</td>
                            <td>{{ $grado->Modalidad }}</td>
                            <td>{{ $grado->seccion }}</td>
                            <td>{{ $grado->departamento }}</td>
                            <td>{{ $grado->ano }}</td>

                            <td>
                                <form action="{{ route('grados.destroy',$grado->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('grados.show',$grado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('grados.edit',$grado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
    {!! $grados->links() !!}
</div>

@endsection