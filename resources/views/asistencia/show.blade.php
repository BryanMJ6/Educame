@extends('layouts.app')

@section('template_title')
    {{ $asistencia->name ?? __("Show Asistencia") }}
@endsection

@section('content')
<link rel="stylesheet" href="/css/asignar.css">
    <section class="content container col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="float-left">
                           <center><h3 class="card-title">Asignar Docente</h3></center> <br>
                        </div>
                        <div class="float-right">
                           <center><a class="btn btn-primary botonazul" href="{{ route('docentes.index') }}"> {{ __('Regresar') }}</a></center> 
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $asistencia->docente->PrimerNombre }}
                            {{ $asistencia->docente->SegundoNombre }}
                            {{ $asistencia->docente->PrimerApellido }}
                            {{ $asistencia->docente->SegundoApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Grado Id:</strong>
                            {{ $asistencia->grado->grado }}
                            {{ $asistencia->grado->seccion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
