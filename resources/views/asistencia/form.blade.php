<link rel="stylesheet" href="/css/asignar.css">

<div class="container mt-4">
    <Center>
        <h4>Asignar Docentes</h4>
    </Center><br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="docente_id">Docentes:</label>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>NUP</th>
                            <th>DUI</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($docentes as $docente)
                        <tr class="@if($asistencia->docente_id == $docente->id) active @endif">
                            <td>
                                {{$docente->PrimerNombre}} {{$docente->SegundoNombre}} {{$docente->PrimerApellido}} {{$docente->SegundoApellido}}
                            </td>
                            <td>
                                {{$docente->departamento}}
                            </td>
                            <td>
                                {{$docente->NUP}}
                            </td>
                            <td>
                                {{$docente->DUI}}
                            </td>
                            <td>
                                {{ Form::radio('docente_id', $docente->id, $asistencia->docente_id == $docente->id) }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="grado_id">Grados:</label>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Grado</th>
                            <th>Modalidad</th>
                            <th>Sección</th>
                            <th>Año</th>
                            <th>Departamento</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($grados as $grado)
                        <tr class="@if($asistencia->grado_id == $grado->id) active-grado @endif">
                            <td>
                                {{$grado->grado}}
                            </td>
                            <td>
                                {{$grado->Modalidad}}
                            </td>
                            <td>
                                {{$grado->seccion}}
                            </td>
                            <td>
                                {{$grado->ano}}
                            </td>
                            <td>
                                {{$grado->departamento}}
                            </td>
                            <td>
                                {{ Form::radio('grado_id', $grado->id, $asistencia->grado_id == $grado->id) }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Escucha cambios en los radio buttons con nombre 'docente_id'
        $('input[name="docente_id"]').change(function() {
            // Quita la clase 'active' de todas las filas de la tabla
            $('table.table.table-striped tbody tr').removeClass('active');

            // Si un radio button está seleccionado, agrega la clase 'active' a su fila padre
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('active');
            }
        });

        // Escucha cambios en los radio buttons con nombre 'grado_id'
        $('input[name="grado_id"]').change(function() {
            // Quita la clase 'active' de todas las filas de la tabla
            $('table.table.table-striped tbody tr').removeClass('active-grado');

            // Si un radio button está seleccionado, agrega la clase 'active-grado' a su fila padre
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('active-grado');
            }
        });
    });
</script>