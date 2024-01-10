<?php

namespace App\Http\Controllers;

use App\Models\Firma;
use App\Models\Asistencia;
use App\Models\Docente;
use Illuminate\Http\Request;

/**
 * Class FirmaController
 * @package App\Http\Controllers
 */
class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firmas = Firma::paginate();
        $asistencia = Asistencia::all();

         return view('firma.index', compact('firmas', 'asistencia'))
             ->with('i', (request()->input('page', 1) - 1) * $firmas->perPage());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firma = new Firma();
        $asistencia = Asistencia::all();
        $docentes = Docente::all();
        return view('firma.create', compact('firma','asistencia','docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Firma::$rules);

        $firma = Firma::create($request->all());

        return redirect()->route('firmas.index')
            ->with('success', 'Firma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $firma = Firma::find($id);

        return view('firma.show', compact('firma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $firma = Firma::find($id);

        return view('firma.edit', compact('firma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Firma $firma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firma $firma)
    {
        request()->validate(Firma::$rules);

        $firma->update($request->all());

        return redirect()->route('firmas.index')
            ->with('success', 'Firma updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $firma = Firma::find($id)->delete();

        return redirect()->route('firmas.index')
            ->with('success', 'Firma deleted successfully');
    }
}
