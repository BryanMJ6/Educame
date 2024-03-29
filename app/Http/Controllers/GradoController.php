<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class GradoController
 * @package App\Http\Controllers
 */
class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        if ($user->roles->first()->name === 'Administrador') {
            // // Obtenemos todos los datos si el usuario actual es administrador
            $grados = Grado::paginate(10);
            // dd("EL if si funciona :D");
        } else {
            // // Obtenemos el departamento del usuario actual que ha iniciado sesión
            $departamento_grado = $user->departamento;
            // // Consulta para obtener los docentes del departamento del usuario actual
            $grados = Grado::where('departamento', $departamento_grado)->paginate(5);
        }


        return view('grado.index', compact('grados'));


        // $grados = Grado::paginate(10);

        // return view('grado.index', compact('grados'))
        //     ->with('i', (request()->input('page', 1) - 1) * $grados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grado = new Grado();
        return view('grado.create', compact('grado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Grado::$rules);

        $grado = Grado::create($request->all());

        return redirect()->route('grados.index')
            ->with('success', 'Grado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Grado::find($id);

        return view('grado.show', compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grado = Grado::find($id);

        return view('grado.edit', compact('grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Grado $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grado $grado)
    {
        request()->validate(Grado::$rules);

        $grado->update($request->all());

        return redirect()->route('grados.index')
            ->with('success', 'Grado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grado = Grado::find($id)->delete();

        return redirect()->route('grados.index')
            ->with('success', 'Grado deleted successfully');
    }
}
