<link rel="stylesheet" href="/css/asistencia.css">
<div class="container">
    <div class="row">
        <!-- Columna 1 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="docente">Docente</label>
                @foreach($asistencia as $item)
                    <input type="text" class="form-control" value="{{ $item->docente->PrimerNombre }} {{ $item->docente->PrimerApellido }}" readonly>
                @endforeach
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="gradoSeccion">Grado y Sección</label>
                @foreach($asistencia as $item)
                    <input type="text" class="form-control" value="{{ $item->grado->grado }} {{ $item->grado->seccion }}" readonly>
                @endforeach
            </div>
        </div>

        <!-- Columna 3 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="horaEntrada">Hora de Entrada</label>
                @foreach($asistencia as $item)
                    <input type="time" class="form-control" name="horaEntrada" value="{{ $item->horaEntrada }}">
                @endforeach
            </div>
        </div>

        <!-- Columna 4 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="horaSalida">Hora de Salida</label>
                @foreach($asistencia as $item)
                    <input type="time" class="form-control" name="horaSalida" value="{{ $item->horaSalida }}">
                @endforeach
            </div>
        </div>

        <!-- Columna 5 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="masculinos">Masculinos</label>
                @foreach($asistencia as $item)
                    <input type="number" class="form-control" name="masculinos" value="{{ $item->masculinos }}">
                @endforeach
            </div>
        </div>

        <!-- Columna 6 -->
        <div class="col-md-4">
            <div class="form-group">
                <label for="femeninos">Femeninos</label>
                @foreach($asistencia as $item)
                    <input type="number" class="form-control" name="femeninos" value="{{ $item->femeninos }}">
                @endforeach
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        </div>
    </div>
</div>
