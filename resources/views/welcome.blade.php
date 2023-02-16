<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>TRVL</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="#"
            > 
            <img class="w-50 h-8 mb-3 mr-3 sm:mb-0" src="{{asset('assets/images/Logo/Original/trvl_logo_black.png')}}" alt="logo"/>
          </a>
        
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
         
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
           
            <li class="flex items-center">
              <a href="{{ route('login') }}" class="text-black active:bg-gray-100 text-xs  px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3">
                Log In
              </a>
            </li>
            
            <li class="flex items-center">
              <a href="{{ route('register') }}" class="text-black active:bg-gray-100 text-xs px-6 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3">
                Sign Up
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 105vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url({{asset('assets/images/Resized/landing.png')}});'
        >
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <div class="flex items-center justify-center mb-8" >
                  <a href="/">
                      <img class="w-50 h-16 mb-3 mr-3 sm:mb-0" src="assets/images/Logo/Original/trvl_logo_black.png" alt="logo"/>
                  </a>
               </div>
                <p class="mt-4 text-black text-2xl">
                  Skip digging through your old passports and travel history. Keep a log of places you’ve visited, <span class="text-black font-semibold ">all in one safe, space. </span>  
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="p-24">
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-black">Take a peek at trvl:</h2>
           
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 inline-flex items-center justify-center">
                <img alt="..." src="{{asset('assets/images/landing-page-asset1.png')}}" class="h-[400px] ">
              </div>
           
              <p class="mt-2 mb-4 text-black">
                Add important trip details and save it in one space so you will never forget. 
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 inline-flex items-center justify-center">
                <img alt="..." src="{{asset('assets/images/landing-page-asset2.png')}}" class="h-[400px] ">
              </div>
           
              <p class="mt-2 mb-4 text-black">
                See how many countries you’ve visited and be inspired to travel more. 
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <div class="text-gray-900 p-3 inline-flex items-center justify-center">
                <img alt="..." src="{{asset('assets/images/landing-page-asset3.png')}}" class="h-[400px] ">
              </div>
           
              <p class="mt-2 mb-4 text-black">
                Easily revisit your travel history for when you need it for visa applications or just to relive those trip memories.
              </p>
            </div>
          </div>
        </div>

      </section>

    </main>
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
