@extends('layouts.plantilla')

@section('title', 'Autores')
@section('content')
    <div class="container" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
        @foreach ($autores as $autor)
            {{-- <div class="card" style="width: 18rem;">
                <img src="{{ $autor['imagen'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $autor['nombre'] }} {{ $autor['apellido'] }}</h5>
                    <p class="card-text">{{ $autor['email'] }}</p>
                    <p class="card-text">{{ $autor['telefono'] }}</p>
                    <p class="card-text"><small class="text-body-secondary">ID_Autor: {{ $autor['id'] }}</small></p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
            </div> --}}

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $autor['imagen'] }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $autor['nombre'] }} {{ $autor['apellido'] }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Correo electrónico: {{ $autor['email'] }}</li>
                    <li class="list-group-item">Teléfono: {{ $autor['telefono'] }}</li>
                    <li class="list-group-item">ID_Autor: {{ $autor['id'] }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
            </div>
        @endforeach
        {{-- <div class="card" style="width: 18rem;">
        <img src="https://fotografias.larazon.es/clipping/cmsimages01/2020/08/12/976A0D3E-D688-43A5-9752-53B08A9D7D1E/98.jpg?crop=1920,1080,x0,y0&width=1900&height=1069&optimize=low&format=webply"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nombre Apellido</h5>
            <p class="card-text">correo electronico</p>
            <p class="card-text">numero de telefono</p>
            <p class="card-text"><small class="text-body-secondary">ID_Autor:</small></p>
            <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://abibliotecanoturna.files.wordpress.com/2021/01/edgarallanpoebysamshearon2017-lowresolution.jpg?w=1400"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nombre Apellido</h5>
            <p class="card-text">correo electronico</p>
            <p class="card-text">numero de telefono</p>
            <p class="card-text"><small class="text-body-secondary">ID_Autor:</small></p>
            <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://historia.nationalgeographic.com.es/medio/2020/05/29/kafka_7318ec3b_550x800.jpg"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nombre Apellido</h5>
            <p class="card-text">correo electronico</p>
            <p class="card-text">numero de telefono</p>
            <p class="card-text"><small class="text-body-secondary">ID_Autor:</small></p>
            <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div> --}}
    </div>
@endsection
{{-- <body style="
background-image: url(&quot;data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='20' height='20' patternTransform='scale(1) rotate(30)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)'/><path d='M10 15a5 5 0 110-10 5 5 0 010 10z'  stroke-width='1' stroke='hsla(259, 59%, 59%, 0.24)' fill='none'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(%23a)'/></svg>&quot;);
"> --}}
{{-- aqui empieza Card con Bootstrap --}}
{{-- fin Card bootstrap --}}
{{-- </body> --}}
