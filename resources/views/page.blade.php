<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral del Norte</title>
    <script src="{{ asset('js/vue.min.js') }}"></script>
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light my-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('page.home') }}">
                <img class="logo-brand" src=" {{ asset('img/logo_web.webp') }}" alt="">
                <strong>INTEGRAL DEL NORTE</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'page.home' ? 'active' : '' }}" aria-current="page" href="{{ route('page.home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'page.about' ? 'active' : '' }}" href="{{ route('page.about') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'page.contact' ? 'active' : '' }}" href="{{ route('page.contact') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-main ms-3" href="https://aula.integraldelnorte.cl/login/">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>

    <footer>Copyright © 2022. Integral del Norte.</footer>

</body>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>
