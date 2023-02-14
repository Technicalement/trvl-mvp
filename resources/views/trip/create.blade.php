<x-app-layout>
   <section class="text-black py-16 bg-center bg-cover" 
      style="background-image: url('assets/images/travel1.jpg')">
      <div class="container mx-auto px-4">
         <h1 class="text-4xl lg:text-3xl xl:text-3xl font-bold mb-6">NEW TRIP</h1>
      </div>
   </section>
   <div class="flex">
   <div class="m-auto items-center justify-center flex-col-1 lg:flex">
      <form action="#">
         <div class="mt-5 items-start justify-center lg:w-[70%] py-12 px-6 lg:px-2 flex flex-col space-y-6">
            <ol class="relative border-l border-gray-200 dark:border-gray-700">
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Name this trip:</label>
                     <input name="trip_name" placeholder="e.g. June Hawaii trip, London, Paris with ..." class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400" >
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Arrival:</label>
                     <input  name="trip_city"  placeholder="City, Country" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                     <label class="text-sm font-medium">Departure (optional):</label>
                     <input name="departure_place" placeholder="Add where you’re leaving from if it’s different from the arrival destination" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"> 
                     <div class="flex">
                        <div class="flex-grow w-1/4 pr-2">
                           <label class="text-sm font-medium">Arrival Date:</label>
                           <input name="arrival_date" type="date"  placeholder="Arrival Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <div class="flex-grow">
                           <label class="text-sm font-medium">Departure Date:</label>
                           <input name="depature_date" type="date" placeholder="Departure Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                     </div>
                     <label class="text-sm font-medium">What brings you here?</label>
                     <select name="reason" class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="reason" id="reason">
                        <option value="">What brings you to this place?</option>
                        <option value="">Reason One</option>
                        <option value="">Reason two</option>
                        <option value="">Reason six</option>
                     </select>
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Passport Number (optional):</label>
                     <input name="passport_number" type="text" placeholder="Enter your passport number" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                     <label  class="text-sm font-medium">Passport Expiration (optional):</label>
                     <input name="passport_expiration" type="date" placeholder="Passport Expiration Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"> 
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label name="visa_number" class="text-sm font-medium">Visa Number (optional):</label>
                     <input type="text" placeholder="Enter your visa number" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                     <div class="flex">
                        <div class="flex-grow pr-2">
                           <label class="text-sm font-medium">Visa Start Date (optional):</label>
                           <input name="visa_start_date" type="date"  placeholder="Visa Start Date (optional)" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <div class="flex-grow">
                           <label class="text-sm font-medium">Visa Expiration Date (optional):</label>
                           <input name="visa_end_date" type="date" placeholder="Expiration Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                     </div>
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="Notes:">Notes:</label>
                     <textarea name="notes" placeholder="Add more details about your trip here. What would you like to remember?" name="note" id="" class="min-h-[100px] max-h-[500px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter your comapny info" spellcheck="false"></textarea>
                  </div>
                  <div class="px-5 pb-5">
                     <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                           Attachments: 
                        </div>
                        <label class="block">
                        <span class="sr-only">Add Files </span>
                        <input name="attachments" type="file"
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        </label>
                        
                     </div>


                  </div>
               </li>
            </ol>
            <div class="flex">
               <div>
                  <button type="submit" class="mb-2 w-[250px] px-6 py-5 bg-[#AFCDD8] text-white text-center font-medium text-xs leading-normal uppercase rounded-lg shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                  <span class="pl-2 mx-1">Save</span>
                  </button>
               </div>
               <div class="flex-initial">
                  <button type="button" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-black capitalize rounded-md  hover:bg-red-200 hover:fill-current hover:text-red-600  focus:outline-none  transition duration-300 transform active:scale-95 ease-in-out">
                  Discard
                  </button>
               </div>
            </div>
      </form>
      </div>
   </div>
</x-app-layout>