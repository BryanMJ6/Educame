@extends('layouts.app')

@section('content')
<div class="container">
    <div class="help-icon">
        <i class="fas fa-question-circle"></i>
    </div>
    <div class="help-text">
        <h4>Preguntas Frecuentes</h4>
        <div class="accordion" id="helpAccordion">
            <!-- Fila 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        ¿Cómo puedo acceder a mi cuenta?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para acceder a tu cuenta, ve a la página de inicio de sesión y proporciona tus credenciales de inicio de sesión.</p>
                    </div>
                </div>
            </div>
            <!-- Fila 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        ¿Cómo puedo cambiar mi contraseña?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para cambiar tu contraseña, inicia sesión en tu cuenta y ve a la configuración de perfil. Allí encontrarás la opción para cambiar tu contraseña.</p>
                    </div>
                </div>
            </div>
            <!-- Repite estas filas para las 10 preguntas restantes -->
            <!-- Fila 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        ¿Cómo puedo actualizar mi información de contacto?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para actualizar tu información de contacto, ve a la sección de perfil y modifica los campos correspondientes.</p>
                    </div>
                </div>
            </div>
            <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
             <!-- Fila 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        ¿Cómo puedo actualizar mi información de contacto?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para actualizar tu información de contacto, ve a la sección de perfil y modifica los campos correspondientes.</p>
                    </div>
                </div>
            </div>
            <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
            <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
             <!-- Fila 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        ¿Cómo puedo actualizar mi información de contacto?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para actualizar tu información de contacto, ve a la sección de perfil y modifica los campos correspondientes.</p>
                    </div>
                </div>
            </div>
            <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
             <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
             <!-- Fila 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        ¿Cómo puedo actualizar mi información de contacto?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#helpAccordion">
                    <div class="accordion-body">
                        <p>Para actualizar tu información de contacto, ve a la sección de perfil y modifica los campos correspondientes.</p>
                    </div>
                </div>
            </div>
            <!-- ... Repite estas filas para las 9 preguntas restantes ... -->
        </div>
    </div>
</div>


@endsection