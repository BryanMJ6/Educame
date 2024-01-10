@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Grado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                        <form method="POST" action="{{ route('grados.update', $grado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('grado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
