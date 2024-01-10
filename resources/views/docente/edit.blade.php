@extends('layouts.app')
@section('content')

    <div id="app" class="wrapper">
        @guest
        @else
        @endguest
        <div id="content">
        
        
        

        <main class="py-4">
            @yield('content')
 <form method="POST" action="{{ route('docentes.update', $docente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('docente.form')

</form>

</main>
        </div>
    </div>
</body>
</html>
@endsection