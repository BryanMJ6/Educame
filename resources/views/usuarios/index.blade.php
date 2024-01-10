@extends('layouts.app')
@section('content')

@yield('content')
<div class="container">
    <div class="row">

        <div class="col-sm-12 d-flex justify-content-between">
            <h1>Usuarios</h1>
            <div>
                @can('crear-usuario')
                <a href="{{ url('/usuarios/create') }}" class="btn btn-primary mb-3 botonazul">Nuevo Usuario</a>
                @endcan
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>E-mail</th>
                                <th>Departamento</th>
                                <th>Rol</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->departamento}}</td>
                                <td>
                                    @if(!empty($usuario->getRoleNames()))
                                    @foreach($usuario->getRoleNames() as $rolName)
                                    <h5><span class="badge badge-dark text-dark">{{$rolName}}</span></h5>
                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="d-grid gap-2 d-xl-block">
                                        @can('editar-usuario')
                                        <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-success">Editar</a>
                                        @endcan
                                        @can('borrar-usuario')
                                        <form action="{{route('usuarios.destroy', $usuario->id)}}" class="d-inline" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="submit" onclick="return confirm('¿Quieres borrar al usuario?')" class="btn btn-danger" value="Borrar">
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $usuarios->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection