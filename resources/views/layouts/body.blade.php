<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="es">
    <meta name="google-site-verification" content="BMB3Uvk8wA9WB25L8_-kTa7eY5XiYLDX_f8NgZFlxao" />
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
        integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e9a290ad7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
   
    <script id="my-gaa" src="https://www.googletagmanager.com/gtag/js?id=G-7KM43HLJHR" async></script>

    <script id="my-gaa2">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7KM43HLJHR');
    </script>


    @yield('styles')
</head>

<body>
    @include('layouts.nav')
    <div>
        @yield('content')
    </div>
    @include('layouts.footer')



    @yield('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const menu = document.getElementById('menu');
            const navSection = document.getElementById('navSection');

            menuToggle.addEventListener('click', function() {
                menu.classList.toggle('active');
            });

            window.addEventListener('scroll', function() {
                if (window.scrollY > 0) {
                    navSection.classList.add('fixed-navbar');
                } else {
                    navSection.classList.remove('fixed-navbar');
                }
            });
        });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>
