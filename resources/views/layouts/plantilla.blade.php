<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Argentina Programa - PHP Avanzado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        main {
            min-height: 77vh;
        }

        main h1 {
            text-align: center;
        }

        footer {
            min-height: 5vh;
            background-color: rgb(0, 3, 60);
            color: aliceblue;
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        {{-- <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark" navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cesar Alavila</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Noticias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Crear Noticia</a></li>
                            <li><a class="dropdown-item" href="#">Editar Noticia</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">VER TODAS LAS NOTICIAS</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Crear Autor</a></li>
                            <li><a class="dropdown-item" href="#">Editar Autor</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">VER TODOS LOS AUTORES</a></li>
                        </ul>
                    </li>

                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscador de noticias o autores..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                </div>
            </div>
        </nav> --}}

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="https://github.com/napzalav" target="_blank">Cesar Alavila</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/noticias" role="button" data-bs-toggle="dropdown" aria-expanded="false">Noticias</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Crear Noticia</a></li>
                                {{-- <li><a class="dropdown-item" href="#">Editar Noticia</a></li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/noticias">VER TODAS LAS NOTICIAS</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Autores</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/autores/create">Crear Autor</a></li>
                                {{-- <li><a class="dropdown-item" href="/autores/edit">Editar Autor</a></li> --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/autores">VER TODOS LOS AUTORES</a></li>
                            </ul>
                        </li>
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>
    </header>

    <main>
        <h1>@yield('title')</h1>

        @yield('content')

    </main>

    <footer>
        <div>
            <a href="https://github.com/napzalav" target="_blank">Cesar Alavila</a>
            <p>Hecho en casa con ❤</p>
            <p>Todos los derechos reservados ©</p>
            <p>...Los izquierdos tambien!</p>
            <p>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/26e2502ee4.js" crossorigin="anonymous"></script>
</body>

</html>
