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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/somos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/youtube.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardSection.css') }}">
@endsection

@section('content')
    <section class="imageSection">
        <div class="imageContainer">
            <video src="{{ asset('assets/video/video_home.mkv') }}" class="imagen" muted loop autoplay
                loading="lazy"></video>
            <div class="degradadoPortafolioTop"></div>
            <div class="textandGraph">
                <h1 class="texto">
                    <span class="textoSecundario">Transformamos desafíos en oportunidades</span>
                    <span class="textoPrincipal">
                        En <strong>Grupo Llyrod</strong>, creemos en el poder de la innovación y el talento joven para
                        impulsar el cambio y el crecimiento sostenible.
                        Somos una consultora especializada que combina experiencia técnica y tecnología de vanguardia para
                        ofrecer soluciones que trascienden lo convencional.
                    </span>

                    <span class="textoPrincipalmovil">
                        En <strong>Grupo Llyrod</strong>, Somos una consultora que impulsa el cambio y el crecimiento
                        sostenible,
                        combinando talento joven, experiencia técnica y tecnología avanzada para ofrecer soluciones
                        innovadoras.
                    </span>
                    <a class="buttonVer" href="/nuestroTrabajo">ver más</a>
                </h1>
            </div>
        </div>
    </section>


    <section class="cardSection">
        @include('home.cardSection')
    </section>

    <section class="infoSection" id="somos">
        @include('home.somos')

        @include('home.clients')


        @include('home.youtube')
    </section>
@endsection

@section('scripts')

    <script>
        const video = document.getElementById("myVideo");
        const section = document.getElementById("canal");
        video.addEventListener("mouseenter", () => {
            video.controls = true;
        });
        video.addEventListener("mouseleave", () => {
            video.controls = false;
        });


        const isSectionVisible = () => {
            const rect = section.getBoundingClientRect();
            return rect.bottom >= 0 && rect.top <= window.innerHeight;
        };

        const handleScroll = () => {
            if (isSectionVisible()) {
                video.play(); // Reproduce el video
            } else {
                video.pause(); // Pausa el video
            }
        };
        window.addEventListener("scroll", handleScroll);
    </script>
    <script>
           var copy = document.querySelector("#clientsCard").cloneNode(true);
           document.querySelector("#cardClients").appendChild(copy);
    </script>
@endsection
