@extends('page')

@section('content')

    <div class="container my-4">
        <div class="content">
            <div class="header-content">
                <img class="top-title" src="{{ asset('img/birrete.webp') }}" alt="">
                <h1 class="text-yellow"><strong>Completa tu enseñanza media</strong></h1>
                <a href="{{ route('page.enroll') }}" class="btn btn-main my-3">Inscribirme</a>
            </div>
            <div class="body-content">
                <img class="illustration" src="{{ asset('img/equipo.webp') }}" alt="">
            </div>
        </div>
    </div>

@endsection
