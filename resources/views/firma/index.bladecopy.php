<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EDUCAME') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/barralateral.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     
</head>
<body>
    <div id="app" class="wrapper">
        @include('layouts.barralateral')
        <div id="content">
        @include('layouts.barrahead')

        <main class="py-4">
            @yield('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Firma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('firmas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create Nueva asistencia') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Asistencia del docente</th>
										<th>DUI</th>
										<th>NUP</th>
										<th>Horas Totales</th>
										<th>Sueldo Total</th>
										<th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($firmas as $firma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $firma->asistencia_id }}</td> -->
											<td>
                                                {{ $firma->asistencia->docente->PrimerNombre }}
                                                {{ $firma->asistencia->docente->PrimerApellido }}
                                            </td>
											<td>
                                                {{ $firma->asistencia->docente->DUI }}
                                            </td>
											<td>
                                                {{ $firma->asistencia->docente->NUP }}
                                            </td>
											<td>
                                                Total de horas
                                            </td>
											<td>
                                                Sueldo total
                                            </td>

                                            <td>
                                                <form action="{{ route('firmas.destroy',$firma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('firmas.show',$firma->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('firmas.edit',$firma->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $firmas->links() !!}
            </div>
        </div>
    </div>

    <div>
        mostrar
        
    </div>
</body>

