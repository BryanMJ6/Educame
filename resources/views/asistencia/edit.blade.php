@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Asistencia
    
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')


                        <form method="POST" action="{{ route('asistencias.update', $asistencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            
                            @include('asistencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

