@extends('page')

@section('content')
<div class="container bg-white py-4">
    <div class="container py-2">
        <form class="d-grid gap-3" action="{{ route('page.enroll.post') }}" method="post">
            <h1>Matriculate</h1>
            @csrf
            <input class="form-control" type="text" name="name" placeholder="Nombres" required>
            <input class="form-control" type="text" placeholder="Apellidos" required>
            <input class="form-control" type="text" placeholder="Rut (sin puntos, con guion) Ejemplo: 11222333-k" required>
            <input class="form-control" type="text" placeholder="Correo electronico" required>
            <input class="form-control" type="text" placeholder="Telefono" required>
            <input class="form-control" type="text" placeholder="Direccion" required>
            <select class="form-select" name="situacion" aria-label="select" required>
                <option selected>Situacion Laboral</option>
                <option value="cesante">Cesante</option>
                <option value="dependiente">Dependiente</option>
                <option value="independiente">Independiente</option>
            </select>
            <select class="form-select" name="curso" required>
                <option selected>Curso</option>
                <option value="primerciclo">Primer Ciclo (1er y 2do año de Enseñanza Media)</option>
                <option value="segundociclo">Segundo Ciclo (3er y 4to año de Enseñanza Media)</option>
            </select>
            <input class="btn btn-lg btn-main btn-block" type="submit">
        </form>
    </div>
</div>
@endsection

