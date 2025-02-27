<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function create()
    {
        return view('OpcionesEv.create');
    }

    public function edit(string $id)
    {
        return view('OpcionesEv.edit');
    }

    public function index()
    {
        return view('OpcionesEv.index');
    }
}
