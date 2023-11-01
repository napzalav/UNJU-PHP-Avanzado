<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autorController extends Controller
{
    public function allAutores(){
        return '<h1>Todos los autores</h1>';
    }

    public function create() {
        return '<h1>alta de autor</h1>';
    }

    public function edit() {
        return '<h1>editar un autor</h1>';
    }

    public function detail() {
        return '<h1>ver un autor en particular</h1>';
    }
}
