@extends('page')

@section('content')

    <style>
        input[placeholder],
        input[type='button'][value],
        textarea[placeholder],
        button[placeholder]{
            font-weight: 500;
        }
    </style>
    <div class="container my-4">
        <div class="contact-content stretch">
            <div class="column">
                <img class="contact-img" src="{{ asset('img/contacto.webp') }}" alt="">
                <!-- <hr class="my-4"> -->
                <div class="px-5">
                    <h4 class="my-3">Contacto</h4>
                    <ul class="list-unstyled text-muted">
                        <li><strong>Direccion:</strong> San Marcos #449, Arica, Chile</li>
                        <li><strong>Telefono:</strong></li>
                        <li><strong>Correo:</strong></li>
                        <li>
                            <a href="https://www.facebook.com/integraldelnorte" target="_blank">
                                <img src="{{ asset('img/facebook.svg') }}" alt="" width="32px" class="my-2 facebook-icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <form class="d-grid gap-2" id="form-app" v-on:submit.prevent="submit" method="post" action="{{ route('page.contact.post') }}">
                    @csrf
                    <input class="form-control" type="text" placeholder="NOMBRE" v-model="name">
                    <input class="form-control" type="text" placeholder="CORREO" v-model="email">
                    <textarea class="form-control" type="text"  placeholder="MENSAJE" v-model="message"></textarea>
                    <input class="btn btn-lg btn-main btn-block" type="submit" value="Enviar">
                </form>
                <!-- <hr class="my-4"> -->
                <iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946.0155325115296!2d-70.31932317076443!3d-18.480844727270874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915aa99365c284c1%3A0xebd68e74a39e4213!2sCentro%20Integral%20del%20Norte!5e0!3m2!1ses-419!2scl!4v1649020668200!5m2!1ses-419!2scl" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <script>
        // new Vue({
        //     el: '#form-app',
        //     data: {
        //         name: "",
        //         email: "",
        //         message: "",
        //     },
        //     methods: {
        //         submit: function (event) {
        //             this.name = ""
        //             this.email = ""
        //             this.message = ""
        //             console.log("Sending....")
        //             fetch().then(response => {

        //             }).catch(error => {

        //             })
        //         }
        //     }
        // })
    </script>

@endsection
