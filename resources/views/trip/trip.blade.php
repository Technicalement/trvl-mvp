<x-app-layout>
   <section class="text-black py-16 bg-center bg-cover" 
      style="background-image: url({{asset('assets/images/Resized/trip.png')}})">
      <div class="container mx-auto px-4">
         <h1 class="text-4xl lg:text-3xl xl:text-3xl font-bold mb-6">YOUR TRIP</h1>
      </div>
   </section>
   <div  class="items-center justify-center flex-col-1 lg:flex">
      <div  class="items-start justify-center lg:w-[40%] py-12 px-6 lg:px-2 flex flex-col space-y-6">
         <div class="relative dark:border-gray-700">
            <div class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#446567] rounded-full -left-2.5 ring-8 ring-white">
               </span>
               <h3 class="flex items-center mb-1 font-bold text-2xl text-gray-900 dark:text-white">{{ $trip->name }}
                  <span class="px-2.5 py-0.5 ml-6">
                  <img class="w-[210px] mb-3  mr-3 sm:mb-0" src="{{asset('assets/images/Icons/London.png')}}" alt="london"/>
                  </span>
               </h3>
               <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($trip->departure_date)->format('j F') }} - {{ \Carbon\Carbon::parse($trip->arrival_date)->format('j F') }}</p>
               <p href="#" class="inline-flex items-center px-4 py-2 mt-6 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">{{ $trip->reason }}</p>
            </div>
         </div>
         <ol class="relative border-l border-gray-200 dark:border-gray-700">
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#446567] rounded-full -left-2.5 ring-8 ring-white">
               </span>
               <div class="mt-3">
                  <div href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div>
                        <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">Arrival: {{ $trip->arrival_city }}</p>
                        </div>
                        <div class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">Departure: {{ $trip->departure_city }} </p>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#446567] rounded-full -left-2.5 ring-8 ring-white">
               </span>
               <div class="mt-3">
                  <div href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div>
                        <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">Visa Number: A329074230</p>
                        </div>
                        <div class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">Visa Expiration Date: Dec 30, 2022</p>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#446567] rounded-full -left-2.5 ring-8 ring-white">
               </span>
               <div class="mt-3">
                  <div href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div>
                        <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{ $trip->note}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li class="mb-8 ml-4">
               <span class="absolute flex items-center justify-center w-5 h-5 bg-[#446567] rounded-full -left-2.5 ring-8 ring-white">
               </span>
               <div class="mt-3">
                  <div href="#" class="items-center block p-3 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                     <div>
                        <div class="text-base font-normal text-gray-600 dark:text-gray-400">
                           <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                              {{ $trip->file}}
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ol>
         <div>
            <a href="{{ route('trip.edit') }}" class="mb-2 w-[250px] px-6 py-5 bg-[#AFCDD8] text-white text-center font-medium text-xs leading-normal uppercase rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
            <span class="pl-2 mx-1">Edit</span>
            </a>
         </div>
      </div>
   </div>
</x-app-layout>