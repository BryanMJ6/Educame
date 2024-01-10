@extends('layouts.app')

@section('template_title')
    {{ $firma->name ?? "{{ __('Show') Firma" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Vista') }} Asistencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('firmas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Asistencia del docente: </strong>
                            {{ $firma->asistencia->docente->PrimerNombre }}
                            {{ $firma->asistencia->docente->PrimerApellido }}
                        </div>
                        <div class="form-group">
                            <strong>DUI: </strong>
                            {{ $firma->asistencia->docente->DUI }}
                        </div>
                        <div class="form-group">
                            <strong>NUP: </strong>
                            {{ $firma->asistencia->docente->NUP }}
                        </div>
                        <div class="form-group">
                            <strong>Grado: </strong>
                            {{ $firma->asistencia->grado->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion: </strong>
                            {{ $firma->asistencia->grado->seccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
