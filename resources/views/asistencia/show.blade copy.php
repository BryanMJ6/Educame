@extends('layouts.app')

@section('template_title')
    {{ $asistencia->name ?? "{{ __('Show') Asistencia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asistencias.index') }}"> {{ __('Back') }}</a>
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
