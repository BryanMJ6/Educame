@extends('layouts.app')

@section('template_title')
    {{ $grado->name ?? __('Show Grado') }}

@endsection

@section('content')
<link rel="stylesheet" href="/css/asignar.css">
     <section class="content container col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="float-left">
                            <center><h3 class="card-title">Grado y Seccion</h3></center><br>
                        </div>
                        <div class="float-right">
                           <center><a class="btn btn-primary botonazul" href="{{ route('docentes.index') }}"> {{ __('Regresar') }}<i class="fa-solid fa-arrow-left"></i></a></center> 
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $grado->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidad:</strong>
                            {{ $grado->Modalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $grado->seccion }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $grado->ano }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
