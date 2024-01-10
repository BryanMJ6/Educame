@extends('layouts.app')

@section('content')


<!-- Tarjetas-->
<div class="cartas">

  <section class="seccion">
    <a href="{{ route('grados.index') }}">
      <div class="separacion">
        <figure class="carta_home">
          <img src="img/planta docente.png" alt="" class="card__image" />
          <figcaption class="card__body">
            <h2 class="card__title">Planta Docente</h2>
            <p class="card__description">
              Crea, edita y elimina los grados y secciones.
            </p>
          </figcaption>
        </figure>
      </div>
    </a>
  </section>

  <section class="seccion">
    <a href="{{ route('grados.index') }}">
      <div class="separacion">
        <figure class="carta_home">
          <img src="img/grado y seccion.png" alt="" class="card__image" />
          <figcaption class="card__body">
            <h2 class="card__title">Grados y secciones</h2>
            <p class="card__description">
              Crea, edita y elimina los grados y secciones.
            </p>
          </figcaption>
        </figure>
      </div>
    </a>
  </section>


  <section class=" seccion">
    <a href="{{ route('grados.index') }}">
      <div class="separacion">
        <figure class="carta_home">
          <img src="img/nuevos usuarios.png" alt="" class="card__image" />
          <figcaption class="card__body">
            <h2 class="card__title">Asignar Docente</h2>
            <p class="card__description">
              Crea, edita y elimina los grados y secciones.
            </p>
          </figcaption>
        </figure>
      </div>
    </a>
  </section>

  <section class="seccion">
    <a href="{{ route('grados.index') }}">
      <div class="separacion">
        <figure class="carta_home">
          <img src="img/asistencia.png" alt="" class="card__image" />
          <figcaption class="card__body">
            <h2 class="card__title">Asistencia Docente</h2>
            <p class="card__description">
              Crea, edita y elimina los grados y secciones.
            </p>
          </figcaption>
        </figure>
      </div>
    </a>
  </section>

  <section class=" seccion">
    <a href="{{ route('docentes.index') }}">
      <div class="separacion">
        <figure class="carta_home">
          <img src="img/docente seleccion.png" alt="" class="card__image" />
          <figcaption class="card__body">
            <h2 class="card__title">Crear usuarios</h2>
            <p class="card__description">
              Crea, edita y elimina los grados y secciones.
            </p>
          </figcaption>
        </figure>
      </div>
    </a>
  </section>

</div>

@endsection