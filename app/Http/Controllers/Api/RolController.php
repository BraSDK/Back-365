<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    // Listar: GET /api/roles
    public function index()
    {
        $roles = Rol::all();
        return response()->json(['status' => 'succes', 'data' => $roles], 200);
    }

    // Crear: POST /api/roles
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|unique:roles,nombre|max:255',
        ]);

        $rol = Rol::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Rol creado correctamente', 'data' => $rol], 201);
    }
}
