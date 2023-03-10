<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
            <div>
                
                 <div class="w-50 h-20 fill-current" >
                    <a href="/">
                        <img class="w-50 h-10 mb-3 mr-3 sm:mb-0" src="assets/images/Logo/Original/trvl_logo_black.png" alt="logo"/>
                    </a>
                </div>
        
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <footer class="w-full h-[200px] bg-slate-900 text-gray-300 py-y"  style="background-image: url({{asset('assets/images/Resized/login.png')}})">
    
          </footer>
    </body>
</html>
