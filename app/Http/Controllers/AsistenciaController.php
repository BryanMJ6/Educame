<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Docente;
use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class AsistenciaController
 * @package App\Http\Controllers
 */
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = DB::table('asistencias')
            ->join('docentes', 'asistencias.docente_id', '=', 'docentes.id')
            ->where('docentes.departamento', 'Usulután')
            ->select('asistencias.*')
            ->get();
            dd($asistencias);

        // $asistencias = Asistencia::paginate();

        //return view('asistencia.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {

    //     $asistencia = new Asistencia();
    //     $docentes = Docente::pluck('SegundoNombre','PrimerNombre','id');
    //     // $docentes = Docente::all();
    //     $grados = Grado::pluck('seccion','grado','id');
    //     return view('asistencia.create', compact('asistencia','docentes','grados'));
    // }
    public function create()
    {
        $asistencia = new Asistencia();


        $user = Auth::user();

        if ($user->roles->first()->name === 'Administrador') {
            // // Obtenemos todos los datos si el usuario actual es administrador
            $docentes = Docente::all();
            $grados = Grado::all();
            // dd("EL if si funciona :D");
        } else {
            // // Obtenemos el departamento del usuario actual que ha iniciado sesión
            $departamento_usuario = $user->departamento;
            $departamento_grado = $user->departamento;
            // // Consulta para obtener los docentes del departamento del usuario actual
            $docentes = Docente::where('departamento', $departamento_usuario)->paginate(5);
            $grados = Grado::where('departamento', $departamento_grado)->paginate(5);
        }





        return view('asistencia.create', compact('asistencia', 'docentes', 'grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asistencia::$rules);

        $asistencia = Asistencia::create($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);

        return view('asistencia.show', compact('asistencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $asistencia = Asistencia::find($id);
        $docentes = Docente::all();
        $grados = Grado::all();

        // Recuperar los IDs del docente y el grado seleccionados desde la URL
        $docenteId = $request->query('docente_id');
        $gradoId = $request->query('grado_id');

        return view('asistencia.edit', compact('asistencia', 'docentes', 'grados', 'docenteId', 'gradoId'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asistencia $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        request()->validate(Asistencia::$rules);

        $asistencia->update($request->all());

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id)->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia deleted successfully');
    }
}
