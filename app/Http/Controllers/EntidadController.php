<?php

namespace App\Http\Controllers;

use App\Models\Entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index()
    {
        $entidades = Entidad::all();
        return view('entidades.index', compact('entidades'));
    }

    public function create()
    {
        return view('entidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|integer|unique:entidades,codigo',
            'subSector' => 'required|string',
            'nivelGobierno' => 'required|string',
            'estado' => 'required|string',
            'fechaCreacion' => 'required|date',
            'fechaActualizacion' => 'nullable|date',
        ]);

        Entidad::create($request->all());

        return redirect()->route('entidades.index')->with('success', 'Entidad creada con éxito');
    }

    public function edit($id)
    {
        $entidad = Entidad::findOrFail($id);
        return view('entidades.edit', compact('entidad'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|unique:entidades,codigo,'. $id . ',idEntidad',
            'subSector' => 'required|string',
            'nivelGobierno' => 'required|string',
            'estado' => 'required|string',
            'fechaCreacion' => 'required|date',
            'fechaActualizacion' => 'nullable|date',
        ]);

        $entidad = Entidad::findOrFail($id);
        $entidad->update($request->all());

        return redirect()->route('entidades.index')->with('success', 'Entidad actualizada satisfactoriamente');
    }

    public function destroy($id)
    {
        $entidad = Entidad::findOrFail($id);
        $entidad->delete();

        return redirect()->route('entidades.index')->with('success', 'Entidad eliminada con éxito');
    }
}
