<?php

namespace App\Http\Controllers;

use App\Models\Pesaje;
use Illuminate\Http\Request;

class PesajeController extends Controller
{
    public function index()
    {
        return Pesaje::all();
    }

    public function porAnimal($animal_id)
    {
        return Pesaje::where('animal_id', $animal_id)->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_id' => 'required|exists:animales,id',
            'peso_estimado' => 'required|numeric',
            'peso_real' => 'nullable|numeric',
            'fecha' => 'required|date',
            'fuente' => 'nullable|string'
        ]);

        $pesaje = Pesaje::create($request->all());

        return response()->json($pesaje, 201);
    }

    public function show($id)
    {
        return Pesaje::findOrFail($id);
    }

    // ✏️ Editar
    public function update(Request $request, $id)
    {
        $pesaje = Pesaje::findOrFail($id);

        $pesaje->update($request->all());

        return response()->json($pesaje);
    }

    public function destroy($id)
    {
        $pesaje = Pesaje::findOrFail($id);
        $pesaje->delete();

        return response()->json(['mensaje' => 'Pesaje eliminado']);
    }
}
