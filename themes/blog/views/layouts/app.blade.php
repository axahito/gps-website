<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PT Global Promedika Services') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css', 'themes/blog') }}">
                <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js', 'themes/blog') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            
            <!-- Page Heading -->
            <header class="bg-fixed bg-no-repeat bg-contain" style="background-image: url({{ asset('/images/background.jpeg') }})">
                <div class="flex items-center px-4 py-6 mx-auto max-w-7xl h-96 sm:px-6 lg:px-8">
                    <div class="text-white z-50">
                        <div class="text-3xl font-extrabold font-mono" style="font-weight: 900;">PT GLOBAL PROMEDIKA SERVICES</div>
                        <div class="text-sm">Think Globally, Act Professionally, and Aim for Customer Satisfaction</div>
                    </div>
                    <div class="absolute left-0 h-96 w-full bg-purple-600 opacity-30"></div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="flex items-center px-6 h-20 w-full bg-black text-gray-100 text-xs">
                <div class="text-left">
                    Copyright PT Global Promedika Services &#169; 2021
                </div>
                <div class="ml-auto flex">
                    <a href="https://www.linkedin.com/company/pt-global-promedika-services">
                        <img class="h-6 w-6 mx-2 transform hover:scale-150" src="{{ asset('/images/linkedin.png') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/globalpromedikaservices/">
                        <img class="h-6 w-6 mx-2 transform hover:scale-150" src="{{ asset('/images/instagram.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img class="h-6 w-6 mx-2 transform hover:scale-150" src="{{ asset('/images/facebook.png') }}" alt="">
                    </a>
                    <a href="https://www.facebook.com/globalpromedikaservice">
                        <img class="h-6 w-6 mx-2 transform hover:scale-150" src="{{ asset('/images/email.png') }}" alt="">
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>
