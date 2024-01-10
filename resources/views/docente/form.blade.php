<link rel="stylesheet" href="/css/docente.css">
<div class="container">
        <h3>Crear Docente</h3>

    <div class="row">
        <!-- Primera Columna -->
        <div class="col-md-3">
            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Primer Nombre') }}
                    {{ Form::text('PrimerNombre', $docente->PrimerNombre, ['class' => 'form-control' . ($errors->has('PrimerNombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
                    {!! $errors->first('PrimerNombre', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorPrimerNombre" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Segundo Nombre') }}
                    {{ Form::text('SegundoNombre', $docente->SegundoNombre, ['class' => 'form-control' . ($errors->has('SegundoNombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
                    {!! $errors->first('SegundoNombre', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorSegundoNombre" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Primer Apellido') }}
                    {{ Form::text('PrimerApellido', $docente->PrimerApellido, ['class' => 'form-control' . ($errors->has('PrimerApellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
                    {!! $errors->first('PrimerApellido', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorPrimerApellido" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Segundo Apellido') }}
                    {{ Form::text('SegundoApellido', $docente->SegundoApellido, ['class' => 'form-control' . ($errors->has('SegundoApellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
                    {!! $errors->first('SegundoApellido', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorSegundoApellido" class="error invalid-feedback"></div>
                </div>
            </div>
        </div>

        <!-- Segunda Columna -->
        <div class="col-md-3">
            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Edad') }}
                    <input type="date" name="Edad" class="form-control" value="{{ $docente->Edad }}" placeholder="Fecha de Nacimiento">
                    {!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorEdad" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="Genero">Género</label>
                <select id="Genero" name="Genero" class="form-control" required>
                    <option>Selecciona</option>
                    <option value="MASCULINO" {{ $docente->Genero === 'MASCULINO' ? 'selected' : '' }}>MASCULINO</option>
                    <option value="FEMENINO" {{ $docente->Genero === 'FEMENINO' ? 'selected' : '' }}>FEMENINO</option>
                    <option value="OTRO" {{ $docente->Genero === 'OTRO' ? 'selected' : '' }}>OTRO</option>
                    <option value="Prefiero no decirlo" {{ $docente->Genero === 'Prefiero no decirlo' ? 'selected' : '' }}>Prefiero no decirlo</option>
                </select>
                <div class="invalid-feedback" id="errorGenero">Selecciona un género</div>
                <div id="errorGenero" class="error invalid-feedback">Selecciona un género</div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Especialidad Titulacion') }}
                    {{ Form::text('EspecialidadTitulacion', $docente->EspecialidadTitulacion, ['class' => 'form-control' . ($errors->has('EspecialidadTitulacion') ? ' is-invalid' : ''), 'placeholder' => 'EspecialidadTitulacion']) }}
                    {!! $errors->first('EspecialidadTitulacion', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorEspecialidadTitulacion" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Especialidad Imparte') }}
                    {{ Form::text('EspecialidadImparte', $docente->EspecialidadImparte, ['class' => 'form-control' . ($errors->has('EspecialidadImparte') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad Imparte']) }}
                    {!! $errors->first('EspecialidadImparte', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorEspecialidadImparte" class="error invalid-feedback"></div>
                </div>
            </div>
        </div>

        <!-- Tercera Columna -->
        <div class="col-md-3">
            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('DUI') }}
                    {{ Form::text('DUI', $docente->DUI, ['class' => 'form-control' . ($errors->has('DUI') ? ' is-invalid' : ''), 'placeholder' => 'DUI']) }}
                    {!! $errors->first('DUI', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorDUI" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('NUP') }}
                    {{ Form::text('NUP', $docente->NUP, ['class' => 'form-control' . ($errors->has('NUP') ? ' is-invalid' : ''), 'placeholder' => 'NUP']) }}
                    {!! $errors->first('NUP', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorNUP" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="select">
                Acreditado
                <label id="Acreditado" for="Acreditado"></label>
                <div class="input-group mb-3">
                    <select id="Acreditado" name="Acreditado" class="form-control form-select" aria-label="Acreditado">
                        <option>Selecciona</option>
                        <option value="SI" {{ $docente->Acreditado === 'SI' ? 'selected' : '' }}>SI</option>
                        <option value="NO" {{ $docente->Acreditado === 'NO' ? 'selected' : '' }}>NO</option>
                    </select>
                    <div id="errorAcreditado" class="error invalid-feedback">Selecciona una opción</div>
                </div>
            </div>

            @if ($docente->FechaAcreditado)
                <?php
                $fechaAcreditado = date_create_from_format('Y-m-d', $docente->FechaAcreditado);
                $fechaAcreditadoFormatted = $fechaAcreditado ? $fechaAcreditado->format('Y-m-d') : '';
                ?>
                <div class="form-group">
                    <label for="FechaAcreditado">Fecha Acreditado</label>
                    <input type="date" class="form-control needs-validation" name="FechaAcreditado" id="FechaAcreditado" value="{{ $fechaAcreditadoFormatted }}">
                    <div class="invalid-feedback">Este campo debe completarse</div>
                     <div id="errorFechaAcreditado" class="error invalid-feedback">Este campo debe completarse</div>
                </div>
            @else
                <div class="form-group">
                    <label for="FechaAcreditado">Fecha Acreditado</label>
                    <input type="date" class="form-control needs-validation" name="FechaAcreditado" id="FechaAcreditado" value="">
                    <div class="invalid-feedback">Este campo debe completarse</div>
                     <div id="errorFechaAcreditado" class="error invalid-feedback">Este campo debe completarse</div>
                </div>
            @endif
        </div>

        <!-- Cuarta Columna -->
        <div class="col-md-3">
            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Dirreccion', 'Dirección') }}
                    {{ Form::select('Dirreccion', [
                        'USULUTAN' => 'Usulután',
                        'SAN MIGUEL' => 'San Miguel',
                        'SAN SALVADOR' => 'San Salvador',
                        'LA UNION' => 'La Unión',
                        'MORAZAN' => 'Morazán',
                        'CABAÑAS' => 'Cabañas',
                        'SAN VICENTE' => 'San Vicente',
                        'LA PAZ' => 'La Paz',
                        'CUSCATLAN' => 'Cuscatlán',
                        'CHALATENANGO' => 'Chalatenango',
                        'LA LIBERTAD' => 'La Libertad',
                        'SANTA ANA' => 'Santa Ana',
                        'SONSONATE' => 'Sonsonate',
                        'AHUACHAPAN' => 'Ahuachapán',
                    ], $docente->Dirreccion, ['class' => 'form-control' . ($errors->has('Dirreccion') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una dirección']) }}
                    {!! $errors->first('Dirreccion', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorDirreccion" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Telefono') }}
                    {{ Form::text('Telefono', $docente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorTelefono" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Correo Personal') }}
                    {{ Form::text('CorreoPersonal', $docente->CorreoPersonal, ['class' => 'form-control' . ($errors->has('CorreoPersonal') ? ' is-invalid' : ''), 'placeholder' => 'CorreoPersonal']) }}
                    {!! $errors->first('CorreoPersonal', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorCorreoPersonal" class="error invalid-feedback"></div>
                </div>
            </div>

            <div class="col-11">
                <div class="form-group">
                    {{ Form::label('Correo MINED') }}
                    {{ Form::text('CorreoMINED', $docente->CorreoMINED, ['class' => 'form-control' . ($errors->has('CorreoMINED') ? ' is-invalid' : ''), 'placeholder' => 'CorreoMINED']) }}
                    {!! $errors->first('CorreoMINED', '<div class="invalid-feedback">:message</div>') !!}
                    <div id="errorCorreoMINED" class="error invalid-feedback"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
        <div class="form-group">
        {{ Form::label('Departamento') }}
            {{ Form::select('departamento', [
            'Ahuachapán' => 'Ahuachapán',
            'Cabañas' => 'Cabañas',
            'Chalatenango' => 'Chalatenango',
            'Cuscatlán' => 'Cuscatlán',
            'La Libertad' => 'La Libertad',
            'La Paz' => 'La Paz',
            'La Unión' => 'La Unión',
            'Morazán' => 'Morazán',
            'San Miguel' => 'San Miguel',
            'San Salvador' => 'San Salvador',
            'San Vicente' => 'San Vicente',
            'Santa Ana' => 'Santa Ana',
            'Sonsonate' => 'Sonsonate',
            'Usulután' => 'Usulután',
        ], $docente->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un departamento']) }}
            {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}

        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3" align="center">
            <a class="btn botonnegro" href="{{route('docentes.index')}}">Regresar</a>
            <button type="submit" class="btn botonazul">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>
</div>


    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


<script src="js/plantadocente.js"></script>




