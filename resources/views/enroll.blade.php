@extends('page')

@section('content')
<div class="container bg-white py-4">
    <div class="container py-2">
        <form class="d-grid gap-3" action="{{ route('page.enroll.post') }}" method="post">
            <h1>Matriculate</h1>
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Nombres">
            <input class="form-control" type="text" placeholder="Apellidos">
            <input class="form-control" type="text" placeholder="RUT">
            <input class="form-control" type="text" placeholder="correo">
            <input class="form-control" type="text" placeholder="Telefono">
            <input class="form-control" type="text" placeholder="Direccion">
            <input class="btn btn-lg btn-main btn-block" type="submit">
        </form>
    </div>
</div>
@endsection
