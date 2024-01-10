@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? __('Show') . ' ' . $docente->PrimerNombre . ' ' . $docente->PrimerApellido }}

@endsection

@section('content')
    <section class="content container col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="float-left">
                          <center><h3 class="card-title">Docente</h3></center>  
                        </div>
                        <div class="float-right">
                           <center><a class="btn btn-primary botonazul" href="{{ route('docentes.index') }}"> {{ __('Regresar') }}</a></center> 
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $docente->PrimerNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $docente->SegundoNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $docente->PrimerApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $docente->SegundoApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $docente->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $docente->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad de Titulacion:</strong>
                            {{ $docente->EspecialidadTitulacion }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad que Imparte:</strong>
                            {{ $docente->EspecialidadImparte }}
                        </div>
                        <div class="form-group">
                            <strong>DUI:</strong>
                            {{ $docente->DUI }}
                        </div>
                        <div class="form-group">
                            <strong>NUP:</strong>
                            {{ $docente->NUP }}
                        </div>
                        <div class="form-group">
                            <strong>Acreditado:</strong>
                            {{ $docente->Acreditado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Acreditado:</strong>
                            {{ $docente->FechaAcreditado }}
                        </div>
                        <div class="form-group">
                            <strong>Dirreccion:</strong>
                            {{ $docente->Dirreccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $docente->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>CorreoPersonal:</strong>
                            {{ $docente->CorreoPersonal }}
                        </div>
                        <div class="form-group">
                            <strong>CorreoMINED:</strong>
                            {{ $docente->CorreoMINED }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
