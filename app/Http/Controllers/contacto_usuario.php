<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contacto_usuario extends Controller
{
    public function contacto_usuario()
    {
        return view('contacto_usuario');
    }
}
