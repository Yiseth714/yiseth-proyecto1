<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function edit(string $id)
    {
        return view('OpcionesE.edit');
    }

    public function create()
    {
        return view('OpcionesE.create');
    }

    public function index()
    {
        return view('OpcionesE.index');
    }
}
