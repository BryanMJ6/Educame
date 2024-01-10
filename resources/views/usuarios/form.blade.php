<div>
    <div class="row g-3">

        @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
            {{ $error}}
            @endforeach
        </div>
        @endif
        <div class="col-mb-3">
            <label class="form-label" for="Nombre1">Nombre de Usuario</label>
            <input class="form-control" type="text" name="name" pattern="[A-Za-zñÑáéíóúü0-9 ]{3,75}" value="{{ isset($usuarios->name)?$usuarios->name:'' }}" required type="text">
        </div>
        <div class="col-mb-3">
            <label class="form-label" for="Correo">Correo</label>
            <input class="form-control" required type="email" name="email" value="{{ isset($usuarios->email)?$usuarios->email:'' }}" id="Correo">
        </div>
        <div class="col-mb-3">
            <label class="form-label" for="Contraseña">Contraseña</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="col-mb-3">
            <label class="form-label" for="Confirmar">Confirmar Contraseña</label>
            <input class="form-control" type="password" name="confirm-password">
        </div>
        <div class="col-mb-3">
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
        </div>
        <div class="col-12">
            <div class="form-group">
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
                ],  ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un departamento']) }}
                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}

            </div>
        </div>

        <!--Foto
        <div class="col-mb-3">
            <div class="col-mb-3 pt-2">
                <label class="form-label" for="Foto">Foto</label>
                <input class="form-control" accept="image/png,image/jpeg" required type="file" name="Foto" value=""
                    id="Foto">
            </div>
            <div class="mb-3 p-2">
                @if(isset($empleado->Foto))
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="rounded float-start img-fluid" width="150"
                    alt="150">
                @endif
            </div>
        </div>-->
        <div class="mb-3">
            <input type="submit" value="{{ $modo }} datos" class="btn btn-primary" id="Enviar">
            <a href="{{ url('/usuarios') }}" type="text" class="btn btn-success">Regresar</a>
        </div>
    </div>

</div>