<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral del Norte</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="login-container shadow">
    <img class="logo" src="{{ asset('img/logo_web.webp') }}" width="120px" alt="">
    <h3 class="text-center">Inicia sesion</h3>
    <form class="d-grid gap-2" id="login-app" @submit.prevent="login" method="post" action="{{ route('session.login') }}">
        <label for="username">Ingresa tu RUT (sin puntos, con guion)</label>
        <input name="username" type="text" class="form-control" v-model="username" placeholder="Ej: 12345678-9">
        <label for="password">Ingresa tu clave</label>
        <input name="password" type="password" class="form-control" v-model="password" placeholder="******" current-password>
        <input class="btn btn-lg btn-main" type="submit" value="Ingresar">
    </form>
</div>

</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
</html>
