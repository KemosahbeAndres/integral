@extends('page')

@section('content')

    <div class="container my-4">
        <div class="content">
            <div class="column">
                <img class="mision img-center" src="{{ asset('img/mision.webp') }}" alt="">
                <h1 class="text-center">Nuestra misión</h1>
                <p class="px-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta est ducimus, deserunt quam dolorum id asperiores eos. Temporibus a at fugiat provident reprehenderit laudantium ea saepe iure, sed magni modi.</p>
            </div>
            <div class="column">
                <img class="vision img-center" src="{{ asset('img/vision.webp') }}" alt="">
                <h1 class="text-center">Nuestra vision</h1>
                <p class="px-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet facere quas culpa, mollitia distinctio sit neque, accusantium dolorem iusto molestias omnis est voluptates repudiandae explicabo. Quos minus molestias quod mollitia!</p>
            </div>
        </div>
    </div>

@endsection
