@extends('layouts.plantilla')

@section('title', 'Detalles')
@section('content')
<div>
    <h2>Detalle desde la vista de details</h2>
    {{ $noticia }}
</div>

@endsection