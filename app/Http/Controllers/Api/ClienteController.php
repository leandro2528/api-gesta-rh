<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index() {
        return Cliente::with('status')->orderBy('nome')->get();
    }

    public function store(Requst $request) {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    public function show(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->All());
        return response()->json($cliente);
    }

    public function destroy($id) {
        Cliente::findOrFail($id);
        return response()->json(null, 204);
    }
}
