<div class="box box-info padding-1">
    <div class="box-body">
        
         <div class="form-group">
            
            {{ Form::label('docente_id') }}
            {{ Form::select('docente_id', $docentes, $asistencia->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('grado_id') }}
            {{ Form::select('grado_id', $grados, $asistencia->grado_id, ['class' => 'form-control' . ($errors->has('grado_id') ? ' is-invalid' : ''), 'placeholder' => 'Grado Id']) }}
            {!! $errors->first('grado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> 

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
    </div>
</div>