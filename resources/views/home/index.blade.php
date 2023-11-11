@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')
<div>
    <div class="card mb-3">
        <img class="card-img-top" src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" alt="Card image cap"
            style="height: 160px;width: 1200px;object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div>
    {{-- aqui empieza Card con Bootstrap --}}
    <div class="card" style="width: 18rem;">
        <img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Noticia</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad distinctio, earum possimus
                quisquam fugiat aliquid harum, quam animi nihil tenetur ipsum veniam quae eveniet quidem voluptatibus illo
                officia nobis enim?</p>
            <p class="card-text"><small class="text-body-secondary">Fecha de publicación:</small></p>
            <a href="#" class="btn btn-primary">Ver detalle</a>
        </div>
    </div>
    {{-- fin Card bootstrap --}}

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.clarin.com/img/2013/10/06/H1Av6nKNx_312x240.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
