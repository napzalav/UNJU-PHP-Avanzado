<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = array(
            ['id' => 1,'title'=> 'Aprender Laravel', 'slug' => 'aprender-laravel', 'cuerpo' => 'Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8.', 'imagen' => 'https://miro.medium.com/v2/resize:fit:1400/1*m0s2io11J82PR7miqan92w.png'],
            ['id' => 2,'title'=> 'Aprender Tailwind', 'slug' => 'aprender-tailwind', 'cuerpo' => 'Tailwind CSS es un framework de CSS de código abierto​ para el diseño de páginas web. ', 'imagen' => 'https://vabadus.es/images/cache/imagen_nodo/images/articulos/64b524021adc5990918944.png'],
        );
        return view('noticias.index', ['noticias'=> $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
