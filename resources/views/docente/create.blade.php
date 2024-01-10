@extends('layouts.app')
@section('content')



@yield('content')
@includeif('partials.errors')

<form method="POST" action="{{ route('docentes.store') }}" role="form" enctype="multipart/form-data">
    @csrf

    @include('docente.form')


</form>

@endsection