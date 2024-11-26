@extends('layouts.body')


@section('meta')
    <meta name="robots" content="{{ $metaData['robots'] }}">
    <meta name="description" content="{{ $metaData['description'] }}">
    <meta name="keywords" content="{{ $metaData['keywords'] }}">

    <!-- Open Graph Meta Tags -->
    @foreach ($metaData['og'] as $og)
        <meta property="og:{{ $og['type'] }}" content="{{ $og['content'] }}">
    @endforeach

    <!-- Twitter Meta Tags -->
    @foreach ($metaData['twitter'] as $twitter)
        <meta name="twitter:{{ $twitter['type'] }}" content="{{ $twitter['content'] }}">
    @endforeach

    <title>{{ $metaData['title'] }}</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="contentImage" style="background-image: url('{{ asset('assets/img/home/contact.webp') }}');">
            <div class="contentText">
                <span>CONTACTO</span>
                <p>¿Tienes alguna consulta?</p>
            </div>
        </div>
        <div class="contentInformation">
            <div class="contactinfo">
                <h4>¿Cómo te podríamos ayudar?</h4>
                <p>Llena los campos para contactarnos contigo

                </p>
            </div>

            <div class="contactForm">
                <div class="container">
                    <form id="formulario-contacto" action="{{ route('contactPost') }}" method="POST">

                        @csrf
                        <strong>*Todos los campos son obligatorios</strong>


                        <label for="checkedInteresado">Interesado o Interesada en:</label>

                        <div class="radiobuton">
                            <input type="radio" id="checkedInteresado" name="checkedInteresado" value="Solicitar un servicio" required>
                            <label for="checkedInteresado">Solicitar un servicio</label>
                        </div>
                        <div class="radiobuton">
                            <input type="radio" id="checkedInteresado" name="checkedInteresado" value="Recursos Humanos" required>
                            <label for="checkedInteresado">Recursos Humanos</label>
                        </div>
                        <div class="radiobuton">
                            <input type="radio" id="checkedInteresado" name="checkedInteresado" value="Alianzas" required>
                            <label for="checkedInteresado">Alianzas</label>
                        </div>
                        <div class="radiobuton">
                            <input type="radio" id="checkedInteresado" name="checkedInteresado" value="Otros" required>
                            <label for="checkedInteresado">Otros</label>
                        </div>

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>

                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required>
                        <label for="compania">Compañia:</label>
                        <input type="text" id="compania" name="compania" required>
                        <label for="cargo">Cargo:</label>
                        <input type="text" id="cargo" name="cargo" required>


                        <label for="correo">Correo electrónico:</label>
                        <input type="email" id="correo" name="correo" required>

                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" required>

                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>

                        <label for="checkedInformacion">Acepto recibir información de Grupo Llyrod</label>

                        <div class="radiobuton">
                            <input type="radio" id="checkedInformacion" name="checkedInformacion" value="Si" required>
                            <label for="checkedInformacion"> Si</label>
                        </div>
                        <div class="radiobuton">
                            <input type="radio" id="checkedInformacion" name="checkedInformacion" value="No" required>
                            <label for="checkedInformacion"> No</label>
                        </div>


                        <button type="submit">Enviar mensaje <i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let success = '{{ session('success') }}';
        if (success) {
            Swal.fire({
                title: '<b style="font-size: 35px"> ¡Gracias! </b>',
                html: '<b style="font-size: 20px">El correo fue enviado correctamente.</b>',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        }
        st
    </script>
@endsection
