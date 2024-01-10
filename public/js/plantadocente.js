
    // Validación en tiempo real para el campo PrimerNombre
    const primerNombreInput = document.getElementById('PrimerNombre');
    const errorPrimerNombre = document.getElementById('errorPrimerNombre');

    primerNombreInput.addEventListener('input', function () {
        if (primerNombreInput.value.trim() === '') {
            errorPrimerNombre.textContent = 'El Primer Nombre es obligatorio';
        } else {
            errorPrimerNombre.textContent = '';
        }
    });

    // Validación en tiempo real para el campo SegundoNombre
    const segundoNombreInput = document.getElementById('SegundoNombre');
    const errorSegundoNombre = document.getElementById('errorSegundoNombre');

    segundoNombreInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para SegundoNombre aquí
    });

    // Validación en tiempo real para el campo PrimerApellido
    const primerApellidoInput = document.getElementById('PrimerApellido');
    const errorPrimerApellido = document.getElementById('errorPrimerApellido');

    primerApellidoInput.addEventListener('input', function () {
        if (primerApellidoInput.value.trim() === '') {
            errorPrimerApellido.textContent = 'El Primer Apellido es obligatorio';
        } else {
            errorPrimerApellido.textContent = '';
        }
    });

    // Validación en tiempo real para el campo SegundoApellido
    const segundoApellidoInput = document.getElementById('SegundoApellido');
    const errorSegundoApellido = document.getElementById('errorSegundoApellido');

    segundoApellidoInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para SegundoApellido aquí
    });

    // Validación en tiempo real para el campo Edad
    const edadInput = document.getElementById('Edad');
    const errorEdad = document.getElementById('errorEdad');

    edadInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para la fecha de nacimiento aquí
    });

    // Validación en tiempo real para el campo Género
    const generoSelect = document.getElementById('Genero');
    const errorGenero = document.getElementById('errorGenero');

    generoSelect.addEventListener('change', function () {
        if (generoSelect.value === 'Selecciona') {
            errorGenero.textContent = 'Selecciona un género';
        } else {
            errorGenero.textContent = '';
        }
    });

    // Validación en tiempo real para el campo EspecialidadTitulacion
    const especialidadTitulacionInput = document.getElementById('EspecialidadTitulacion');
    const errorEspecialidadTitulacion = document.getElementById('errorEspecialidadTitulacion');

    especialidadTitulacionInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para EspecialidadTitulacion aquí
    });

    // Validación en tiempo real para el campo EspecialidadImparte
    const especialidadImparteInput = document.getElementById('EspecialidadImparte');
    const errorEspecialidadImparte = document.getElementById('errorEspecialidadImparte');

    especialidadImparteInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para EspecialidadImparte aquí
    });

    // Validación en tiempo real para el campo DUI
    const duiInput = document.getElementById('DUI');
    const errorDUI = document.getElementById('errorDUI');

    duiInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para DUI aquí
    });

    // Validación en tiempo real para el campo NUP
    const nupInput = document.getElementById('NUP');
    const errorNUP = document.getElementById('errorNUP');

    nupInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para NUP aquí
    });

    // Validación en tiempo real para el campo Acreditado
    const acreditadoSelect = document.getElementById('Acreditado');
    const errorAcreditado = document.getElementById('errorAcreditado');
    const fechaAcreditadoInput = document.getElementById('FechaAcreditado');
    const errorFechaAcreditado = document.getElementById('errorFechaAcreditado');

    acreditadoSelect.addEventListener('change', function () {
        if (acreditadoSelect.value === 'Selecciona') {
            errorAcreditado.textContent = 'Selecciona una opción';
        } else if (acreditadoSelect.value === 'SI') {
            errorAcreditado.textContent = '';
            fechaAcreditadoInput.style.display = 'block';
            fechaAcreditadoInput.required = true;
        } else if (acreditadoSelect.value === 'NO') {
            errorAcreditado.textContent = '';
            fechaAcreditadoInput.style.display = 'none';
            fechaAcreditadoInput.required = false;
            errorFechaAcreditado.textContent = '';
        }
    });

    // Validación en tiempo real para el campo Dirección
    const direccionSelect = document.getElementById('Dirreccion');
    const errorDirreccion = document.getElementById('errorDirreccion');

    direccionSelect.addEventListener('change', function () {
        if (direccionSelect.value === 'Selecciona una dirección') {
            errorDirreccion.textContent = 'Selecciona una dirección';
        } else {
            errorDirreccion.textContent = '';
        }
    });

    // Validación en tiempo real para el campo Telefono
    const telefonoInput = document.getElementById('Telefono');
    const errorTelefono = document.getElementById('errorTelefono');

    telefonoInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para Telefono aquí
    });

    // Validación en tiempo real para el campo CorreoPersonal
    const correoPersonalInput = document.getElementById('CorreoPersonal');
    const errorCorreoPersonal = document.getElementById('errorCorreoPersonal');

    correoPersonalInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para CorreoPersonal aquí
    });

    // Validación en tiempo real para el campo CorreoMINED
    const correoMINEDInput = document.getElementById('CorreoMINED');
    const errorCorreoMINED = document.getElementById('errorCorreoMINED');

    correoMINEDInput.addEventListener('input', function () {
        // Puedes agregar condiciones de validación para CorreoMINED aquí
    });