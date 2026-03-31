<?php

namespace App\Http\Controllers\API;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function index()
    {
        return response()->json(usuario::all(), 200);
    }

    public function store(Request $request)
    {
        $usuario = usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        return response()->json(usuario::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario->update($request->all());
        return response()->json($usuario);
    }

    public function destroy($id)
    {
        usuario::destroy($id);
        return response()->json(['message' => 'Eliminado']);
    }
}