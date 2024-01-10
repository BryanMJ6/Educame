@extends('layouts.login')
@section('content')

<br>
<link rel="stylesheet" href="css/normalize.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="css/login.css">

<body>

  <div class="container" style="margin-top: 5%;">

    <div class="forms" style="height: 442px; margin-top: 30%; margin-bottom: 18%;">

      <div class="form login">
        <center><a href="{{route('login')}}"><img src="img/ecos.png" alt="160" width="160"></a></center><br>
        <span class="title">Inicia Sesion para Acceder a EDUCAME</span>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <BR></BR>

          <p class="p">cuenta</p>
          <div class="input-field">

            <input name="email" type="email" placeholder="Ingresa tú email" id="email" class="input-field {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" required autocomplete="email" autofocus required>
            <i class="uil uil-envelope icon"></i>
            <div class="error-message">Correo electrónico inválido</div>
            <div class="success-message">Correo electrónico válido</div>
          </div>
          <br>

          <div class="input-field">
            <p class="p">Contraseña</p>
            <input name="password" type="password" placeholder="Ingresa tú contraseña" id="password" class="input-field {{ $errors->has('password') ? 'is-invalid' : '' }}" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <i class="uil uil-lock icon"></i>
          </div>

          <div class="bstr d-grid col-12 mx-auto" style="margin-top: 5%;">
            <button type="submit" class="btn btn-primary">
              {{ __('Acceder') }}
            </button>
          </div>

          <div class="login-signup" style="margin-bottom: -3%;">
            <span class="text">¿Olvidaste tu Contraseña?
              <a href="/login" class="text signup-link">Solicita una Nueva</a>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector("form");
      const emailInput = document.getElementById("email");
      const passwordInput = document.getElementById("password");

      emailInput.addEventListener("input", function() {
        const emailValue = emailInput.value.trim();
        if (!validateEmail(emailValue)) {
          emailInput.classList.remove("is-valid");
          emailInput.classList.add("is-invalid");
        } else {
          emailInput.classList.remove("is-invalid");
          emailInput.classList.add("is-valid");
        }
      });

      passwordInput.addEventListener("input", function() {
        const passwordValue = passwordInput.value.trim();
        if (passwordValue.length < 8) {
          passwordInput.classList.remove("is-valid");
          passwordInput.classList.add("is-invalid");
        } else {
          passwordInput.classList.remove("is-invalid");
          passwordInput.classList.add("is-valid");
        }
      });

      function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
      }

      form.addEventListener("submit", function(event) {
        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        // Validación del correo electrónico
        if (!validateEmail(emailValue)) {
          emailInput.classList.remove("is-valid");
          emailInput.classList.add("is-invalid");
          event.preventDefault();
        }

        // Validación de la contraseña
        if (passwordValue.length < 8) {
          passwordInput.classList.remove("is-valid");
          passwordInput.classList.add("is-invalid");
          event.preventDefault();
        }
      });
    });
  </script>


</body>


@endsection