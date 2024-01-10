@extends('layouts.app')

@section('template_title')
{{ __('Create') }} Grado
@endsection

@section('content')


@includeif('partials.errors')

<form method="POST" action="{{ route('grados.store') }}" role="form" enctype="multipart/form-data">
    @csrf

    @include('grado.form')

</form>
@endsection