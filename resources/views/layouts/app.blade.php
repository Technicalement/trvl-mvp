<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config("app.name", "TRVL") }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
     
        <!-- Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include("layouts.navigation")

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-transparent">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <footer class="bg-gray-700 pt-8 pb-6 text-white">
  
            <div class="container mx-auto px-4">
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                 
                  <P class="text-lg mt-0 mb-2">
                    Copyright © Made in 2023, by a team based in 
                    3 different countries 
                  </P>
               
                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                      <span
                        class="block uppercase text-sm font-semibold mb-2"
                        >Useful Links</span
                      >
                      <ul class="list-unstyled">
                        <li>
                          <a
                            class="hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#"
                            >Our Story</a
                          >
                        </li>
                        <li>
                          <a
                            class="hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#"
                            >Contact Us</a
                          >
                        </li>
                        <li>
                          <a
                            class="hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#"
                            >FAQs</a
                          >
                        </li>
                       
                      </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <span
                        class="block uppercase text-sm font-semibold mb-2"
                        >Social media</span
                      >
                      <ul class="list-unstyled">
                        <li>
                          <a
                            class="hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#"
                            >Instagram</a
                          >
                        </li>
                        <li>
                          <a
                            class="hover:text-gray-900 font-semibold block pb-2 text-sm"
                            href="#"
                            >Facebook</a
                          >
                        </li>
                    
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
    </body>
</html>
