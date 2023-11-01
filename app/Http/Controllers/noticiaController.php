<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noticiaController extends Controller
{
    public function allNoticias(){
        return '<h1>Todas las noticias</h1>';
    }

    public function create() {
        return '<h1>alta de noticia</h1>';
    }

    public function edit() {
        return '<h1>editar una noticia</h1>';
    }

    public function detail() {
        return '<h1>ver una noticia en particular</h1>';
    }
}
