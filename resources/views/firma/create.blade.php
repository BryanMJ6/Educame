@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Firma
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                        <form method="POST" action="{{ route('firmas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('firma.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection