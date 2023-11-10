@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')

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
                    <th scope="col">Image</th>
                    <th scope="col">Tablero</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>01-01-1990</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top"
                            alt="..." width="92" height="92"></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen">Editar</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash">Eliminar</i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>01-01-1990</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><img src="https://planetabj.com/_next/image?url=https%3A%2F%2Fimages.planetabj.com%2Fwebp%2F740_416%2FPBJ_20231109_PBJ_197057_boqye.webp&w=1080&q=75"
                            class="card-img-top" alt="..." width="92" height="92"></td>
                    <td>
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen">Editar</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash">Eliminar</i></button>
                    </td>
                </tr>
                {{-- <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
@endsection
