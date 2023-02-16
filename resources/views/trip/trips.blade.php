<x-app-layout>
   <section class="text-black py-16 bg-center bg-cover" 
      style="background-image: url('assets/images/Resized/trips.png')">
      <div class="container mx-auto px-4">
         <h1 class="text-4xl lg:text-3xl xl:text-3xl font-bold mb-6">TRIPS</h1>
      </div>
   </section>
   <div  class="items-center justify-center flex-col-1 lg:flex">
      <div  class="items-start justify-center lg:w-[40%] py-12 px-6 lg:px-2 flex flex-col space-y-6">
         <ol class="relative border-l border-gray-200 dark:border-gray-700">
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                  <div class="absolute font-bold text-2xl -left-20"> 2023</div>
               </span>

               <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                  
                  @foreach ($trips as $trip)
                  <li>
                     <a href="{{ url('trip/'. $trip->id) }}" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        @if($trip->city_id == 8)
                        <img class="w-[90px] h-12 mb-3 mr-3 sm:mb-0" src="assets/images/Icons/London.png" alt="London Icon"/>
                        @elseif($trip->city_id == 1)
                        aaa
                        @else
                        @endif
                        <div>
                           <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white"> {{ $trip->name }}</h3>
                           </div>
                           <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                              <p class="text-base font-normal text-gray-500 dark:text-gray-400"> {{ \Carbon\Carbon::parse($trip->departure_date)->format('j F') }} - {{ \Carbon\Carbon::parse($trip->arrival_date)->format('j F') }}
                              </p>
                           </span>
                        </div>
                     </a>
                  </li>

                  @endforeach
               </ol>

            </li>
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                  <div class="absolute font-bold text-2xl -left-20"> 2023</div>
               </span>
               <ol class="mt-3 divide-y divider-gray-200 dark:divide-gray-700">
                  <li>
                     <a href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                        <img class="w-[90px] h-12 mb-3 mr-3 sm:mb-0" src="assets/images/Icons/Bangkok.png" alt="Bangkok Icon"/>
                        <div>
                           <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Bangkok Trip</h3>
                           </div>
                           <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Nov 18 - Dec 5</p>
                           </span>
                        </div>
                     </a>
                  </li>
               </ol>
            </li>
         </ol>
      </div>
   </div>
</x-app-layout>