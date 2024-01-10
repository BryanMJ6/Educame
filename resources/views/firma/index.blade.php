@extends('layouts.app')

@section('content')

@yield('content')

<div class="container">

    <div class="col-sm-12 d-flex justify-content-between">
        <h1>Asistencia</h1>
        <div>
            <a href="{{ route('docentes.create') }}" class="btn btn-primary mb-3  botonazul" data-placement="left" style="width: fit-content;">
                {{ __('Crear Nuevo Docente') }}
            </a>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            <th>Asistencia del docente</th>
                            <th>DUI</th>
                            <th>NUP</th>
                            <th>Grado y Seccion</th>
                            <th>Horas Totales</th>
                            <th>Sueldo Total</th>
                            <th>Accion</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach($asistencia as $asistencia_item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>
                            {{ $asistencia_item->docente->PrimerNombre }}
                            {{ $asistencia_item->docente->SegundoNombre }}
                            {{ $asistencia_item->docente->PrimerApellido }}
                            {{ $asistencia_item->docente->SegundoApellido }}
                        </td>
                        <td>{{ $asistencia_item->docente->NUP }}</td>
                        <td>{{ $asistencia_item->docente->DUI }}</td>
                        <td>
                            <select class="form-select" name="grado_id">

                                <option value="{{ $asistencia_item->grado->id }}">
                                    {{ $asistencia_item->grado->grado }}
                                    {{ $asistencia_item->grado->seccion }}
                                </option>

                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <a href="{{ route('firmas.create', ['asistencia' => $asistencia_item->id]) }}" class="btn btn-success btn-sm">
                                Crear
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>





    <!-- ... Código anterior ... -->

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Firma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('firmas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create Nueva asistencia') }}
                                </a>
                              </div>
                        </div>
                    </div>
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
                                        
										<th>Asistencia del docente</th>
										<th>DUI</th>
										<th>NUP</th>
										<th>Horas Totales</th>
										<th>Sueldo Total</th>
										<th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($firmas as $firma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $firma->asistencia_id }}</td> 
											<td>
                                                {{ $firma->asistencia->docente->PrimerNombre }}
                                                {{ $firma->asistencia->docente->PrimerApellido }}
                                            </td>
											<td>
                                                {{ $firma->asistencia->docente->DUI }}
                                            </td>
											<td>
                                                {{ $firma->asistencia->docente->NUP }}
                                            </td>
											<td>
                                                Total de horas
                                            </td>
											<td>
                                                Sueldo total
                                            </td>

                                            <td>
                                                <form action="{{ route('firmas.destroy',$firma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('firmas.show',$firma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('firmas.edit',$firma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
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
                {!! $firmas->links() !!}
            </div>
        </div>
    </div> -->


    @endsection