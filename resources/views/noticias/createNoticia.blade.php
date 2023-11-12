@extends('layouts.plantilla')
@section('title', 'Alta de Noticia')
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
        <div class="form-group">
            <label for="inputTitle">Título</label>
            <input type="text" class="form-control" id="inputTitle" placeholder="Elecciones 2023">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Cuerpo de la noticia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="inputTitle">Fecha de publicación: </label>
            <input type="text" class="form-control" id="inputTitle" placeholder="8-11-2023">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Selecciona una imagen: </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>

@endsection
