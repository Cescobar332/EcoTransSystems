<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class historial_usuario extends Controller
{
    public function historial_usuario()
    {
        return view('historial_usuario');
    }
}
