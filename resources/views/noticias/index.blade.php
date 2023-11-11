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
<div>
    <div>
        <button type="button" class="btn btn-success">
            <i class="fa-solid fa-plus">Agregar</i>
        </button>
    </div>
    <div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Cuerpo</th>
                    <th scope="col">Image</th>
                    <th scope="col">Tablero</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                <tr>
                    <th scope="row">1</th>
                    <td>01-01-1990</td>
                    <td>{{ $noticia['title'] }}</td>
                    <td>{{ $noticia['slug'] }} </td>
                    <td>{{ $noticia['cuerpo'] }} </td>
                    <td><img src="{{ $noticia['imagen'] }}" class="card-img-top"
                            alt="..." style="height: 120px;width: 180px;object-fit: cover;"></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen">Editar</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash">Eliminar</i></button>
                    </td>
                </tr>
                @endforeach
                {{-- <tr>
                    <th scope="row">1</th>
                    <td>01-01-1990</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top"
                            alt="..." style="height: 120px;width: 180px;object-fit: cover;"></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen">Editar</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash">Eliminar</i></button>
                    </td>
                </tr> --}}

                {{-- <tr>
                    <th scope="row">2</th>
                    <td>01-01-1990</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><img src="https://planetabj.com/_next/image?url=https%3A%2F%2Fimages.planetabj.com%2Fwebp%2F740_416%2FPBJ_20231109_PBJ_197057_boqye.webp&w=1080&q=75"
                            class="card-img-top" alt="..." style="height: 120px;width: 180px;object-fit: cover;""></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen">Editar</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash">Eliminar</i></button>
                    </td>
                </tr> --}}
                {{-- <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
</div>

<div>

</div>
@endsection
