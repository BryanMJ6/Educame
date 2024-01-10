<link rel="stylesheet" href="/css/asistencia.css">
<div class="container">
    <center>
        <h4>Crear Grado y Seccion</h4>
    </center><br>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info padding-1">
                <div class="box-body">

                    <div class="form-group">
                        {{ Form::label('grado') }}
                        {{ Form::select('grado', ['Primero' => 'Primero', 'Segundo' => 'Segundo'], $grado->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : '')]) }}
                        {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('modalidad') }}
                        {{ Form::text('modalidad', 'General', ['class' => 'form-control' . ($errors->has('modalidad') ? ' is-invalid' : ''), 'placeholder' => 'modalidad', 'readonly']) }}
                        {!! $errors->first('modalidad', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-info padding-1">
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('seccion') }}
                        {{ Form::select('seccion', ['A' => 'A', 'B' => 'B'], $grado->seccion, ['class' => 'form-control' . ($errors->has('seccion') ? ' is-invalid' : '')]) }}
                        {!! $errors->first('seccion', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('Año') }}
                        {{ Form::text('ano', date('Y'), ['class' => 'form-control' . ($errors->has('ano') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
                        {!! $errors->first('ano', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col">

            <div class="form-group">
                {{ Form::label('departamento') }}
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
            ], $grado->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un departamento']) }}
                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}

            </div>
            <center>
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                </div>

            </center>



        </div>
    </div>
</div>