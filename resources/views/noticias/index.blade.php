{{-- <body style="
background-image: url(&quot;data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='20' height='20' patternTransform='scale(1) rotate(30)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)'/><path d='M10 15a5 5 0 110-10 5 5 0 010 10z'  stroke-width='1' stroke='hsla(259, 59%, 59%, 0.24)' fill='none'/></pattern></defs><rect width='800%' height='800%' transform='translate(0,0)' fill='url(%23a)'/></svg>&quot;);
">
    <div>
        <h1>Esta es la VISTA de todas las NOTICIAS</h1>
    </div>
</body> --}}

@extends('layouts.plantilla')

@section('title', 'Noticias')
@section('content')
    {{-- aqui empieza Card con Bootstrap--}}
    <div class="card" style="width: 18rem;">
        <img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Noticia</h5>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad distinctio, earum possimus quisquam fugiat aliquid harum, quam animi nihil tenetur ipsum veniam quae eveniet quidem voluptatibus illo officia nobis enim?</p>
        <p class="card-text"><small class="text-body-secondary">Fecha de publicación:</small></p>
        <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div>
{{-- fin Card bootstrap--}}
@endsection