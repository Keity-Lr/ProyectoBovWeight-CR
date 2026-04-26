<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FincaController extends Controller

{
    public function listarFincas() {
        return Finca::all();
    }

    public function crearFinca(Request $request) {
        $finca = Finca::create([
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
            'user_id' => $request->user_id
        ]);

        return response()->json($finca);
    }

    public function obtenerFinca($id) {
        return Finca::find($id);
    }

    public function actualizarFinca(Request $request, $id) {
        $finca = Finca::find($id);

        if (!$finca) {
            return response()->json(["error" => "Finca no encontrada"], 404);
        }

        $finca->update($request->all());
        return response()->json($finca);
    }

    public function eliminarFinca($id) {
        $finca = Finca::find($id);

        if (!$finca) {
            return response()->json(["error" => "Finca no encontrada"], 404);
        }

        $finca->delete();
        return response()->json(["mensaje" => "Finca eliminada correctamente"]);
    }

    public function obtenerFincasPorUsuario($user_id) {
        return Finca::where('user_id', $user_id)->get();
    }
}

