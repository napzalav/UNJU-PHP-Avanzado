<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = array(
            ['id' => 1,'nombre'=> 'Charles', 'apellido'=> 'Bukowski', 'email'=> 'carlitos@gmail.com', 'telefono'=> '555123123', 'imagen'=> 'https://fotografias.larazon.es/clipping/cmsimages01/2020/08/12/976A0D3E-D688-43A5-9752-53B08A9D7D1E/98.jpg?crop=1920,1080,x0,y0&width=1900&height=1069&optimize=low&format=webply'],
            ['id' => 2,'nombre'=> 'Edgard Alan', 'apellido'=> 'Poe', 'email'=> 'elcuervo@gmail.com', 'telefono'=> '888545454', 'imagen'=>'https://abibliotecanoturna.files.wordpress.com/2021/01/edgarallanpoebysamshearon2017-lowresolution.jpg?w=1400'],
            ['id'=> 3,'nombre'=> 'Franz', 'apellido'=> 'Kafka', 'email'=> 'metamorfosis@outlook.com', 'telefono'=> '777000000', 'imagen'=>'https://historia.nationalgeographic.com.es/medio/2020/05/29/kafka_7318ec3b_550x800.jpg'],

        );
        return view('autores.index', ['autores'=> $autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('autores.createAutor');
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
        return view('autores.editAutor');
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
