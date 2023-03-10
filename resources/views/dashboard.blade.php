<x-app-layout>
   <section  class="py-12 flex flex-col">
      <h1 class="text-4xl font-bold pl-24">Welcome Back, {{ Auth::user()->firstname }}!</h1>
      <div class="grid-cols-3 gap-5 flex flex-wrap text-black py-16 mx-20">
         <div class="md:flex-1 md:order-2 container flex-col lg:flex-row px-5">
            <div class="flex flex-col py-28 bg-center bg-cover items-center justify-center h-[404px] w-[504px] bg-gray-100 rounded-lg" style="background-image: url({{asset('assets/images/Resized/montain-desert.png')}})">
               <h2 class="text-lg font-medium mt-4">It's been</h2>
               <div class="text-white text-6xl font-light mt-2">00 : 05 : 02 </div>
               <h2 class="text-lg font-medium mt-4">since you travelled. </h2>
            </div>
         </div>
         <div class="px-5 md:flex-1 md:order-2 container flex-col lg:flex-row">
            <h1 class="text-3xl font-bold pb-6">Where you’ve been</h1>
            <ul class="list-none">
               @foreach ($trips as $trip)
               <li>
                  <a href="{{ url('trip/'. $trip->id) }}" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                     <img class="h-[80px] w-[45px] mb-3 mr-8 sm:mb-0" src="assets/images/Icons/Year2022.png" alt="London Icon"/>
                     <div>
                        <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                           <h3 class="text-lg font-normal text-gray-900 dark:text-white">{{ $trip->name }}</h3>
                        </div>
                        <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                           <h3 class="text-lg font-normal text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($trip->departure_date)->format('j F') }} - {{ \Carbon\Carbon::parse($trip->arrival_date)->format('j F') }}</h3>
                        </span>
                     </div>
                  </a>
               </li>
               @endforeach
            </ul>
            <a href="{{ route('trip.trips') }}" class="mb-2 w-[250px] px-6 py-5 bg-[#AFCDD8] text-white text-center font-medium text-xs leading-normal uppercase rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">View Trips</a>
         </div>
      </div>
   </section>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <img src="assets/images/maps.jpg" width='100%' height='532' alt="Maps" />
         </div>
      </div>
   </div>
</x-app-layout>