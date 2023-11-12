@extends('layouts.plantilla')
@section('title', 'Alta de Autor')
@section('content')
    <div class="mb-3">
        <form style="
        padding: 10px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        background: lightgray;
        ;">
            <div class="form-row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="Jhon" id="nombre">
                </div>
                <div class="col">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" placeholder="Doe" id="apellido">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo electrónico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label for="telefono">Número de teléfono</label>
                <input type="email" class="form-control" id="telefono" placeholder="123123123">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>

@endsection
