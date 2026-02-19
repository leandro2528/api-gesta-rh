<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusCliente;

class StatusClienteController extends Controller
{
    public function index() {
        return StatusCliente::select('id', 'nome')
            ->orderBy('nome')->get();
    }
}
