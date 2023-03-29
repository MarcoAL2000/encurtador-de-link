<?php

namespace App\Http\Controllers;

use App\Models\Encurtador;
use Illuminate\Http\Request;

class EncurtadorController extends Controller
{
    public function index () {
        $encurtador = Encurtador::get();
        return view('encurtador.index', [
        ]);
    }
}
