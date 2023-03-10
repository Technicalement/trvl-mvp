<x-app-layout>
   <section class="text-black py-16 bg-center bg-cover" 
      style="background-image: url({{asset('assets/images/Resized/create-trip.png')}})">
      <div class="container mx-auto px-4">
         <h1 class="text-4xl lg:text-3xl xl:text-3xl font-bold mb-6">NEW TRIP</h1>
      </div>
   </section>

   <div  class="items-center justify-center flex-col-1 lg:flex">
   <div  class="items-start justify-center lg:w-[40%] py-12 px-6 lg:px-2 flex flex-col space-y-6">
       
   @if (count($errors) > 0)
   <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
           <li>

            <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
               <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                   <span class="sr-only">Error icon</span>
               </div>
               <div class="ml-3 text-sm font-normal">{{ $error }}</div>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                   <span class="sr-only">Close</span>
                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
           </div>
         
           </li>
       @endforeach
       </ul>
   </div>
   @endif
@if(Session::has('success'))                     
<div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
   <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
       <span class="sr-only">Check icon</span>
   </div>
   <div class="ml-3 text-sm font-normal"> {{ Session::get('success') }}</div>
   <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
       <span class="sr-only">Close</span>
       <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
   </button>
</div>
@endif
</div>
</div>

   <div class="flex">
   <div class="m-auto items-center justify-center flex-col-1 lg:flex">
      <form method="POST" enctype="multipart/form-data"  action="{{ route('trip.add') }}">
         @csrf
         <div class="mt-5 items-start justify-center lg:w-[70%] py-12 px-6 lg:px-2 flex flex-col space-y-6">
            <ol class="relative border-l border-gray-200 dark:border-gray-700">
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Name this trip:</label>
                     <input name="name" placeholder="e.g. June Hawaii trip, London, Paris with ..." class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400" >
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Arrival:</label>
                     <select name="arrival_city" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400 " required="required" name="reason" id="reason">
                        <option value="None" disabled selected>City, Country ?</option>
                        <option value="1">London</option>
                        <option value="2">Bangkok</option>
                        <option value="3">Sidney</option>
                        <option value="8">Other</option>
                     </select>
                     
                     <label class="text-sm font-medium">Departure (optional):</label>
                     <input name="departure_city" placeholder="Add where you???re leaving from if it???s different from the arrival destination" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"> 
                     <div class="flex">
                        <div class="flex-grow pr-2">
                           <label class="text-sm font-medium">Arrival Date:</label>
                           <input name="arrival_date" type="date"  placeholder="Arrival Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <div class="flex-grow">
                           <label class="text-sm font-medium">Departure Date:</label>
                           <input name="depature_date" type="date" placeholder="Departure Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                     </div>
                     <label class="text-sm font-medium">What brings you here?</label>
                     <select name="reason" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400 " required="required" name="reason" id="reason">
                        <option value="None" disabled selected>What brings you to this place?</option>
                        <option value="vaccation">vaccation</option>
                        <option value="work">work</option>
                        <option value="business">Business</option>
                     </select>
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Passport Number (optional):</label>
                     <input name="passport_number" type="text" placeholder="Enter your passport number" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                     <label  class="text-sm font-medium">Passport Expiration (optional):</label>
                     <input name="passport_expiration" type="date" placeholder="Passport Expiration Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400"> 
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="text-sm font-medium">Visa Number (optional):</label>
                     <input name="visa_number" type="text" placeholder="Enter your visa number" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                     <div class="flex">
                        <div class="flex-grow pr-2">
                           <label class="text-sm font-medium">Visa Start Date (optional):</label>
                           <input name="visa_start_date" type="date"  placeholder="Visa Start Date (optional)" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                        <div class="flex-grow">
                           <label class="text-sm font-medium">Visa Expiration Date (optional):</label>
                           <input name="visa_end_date" type="date" placeholder="Expiration Date" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 mb-4 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                        </div>
                     </div>
                  </div>
               </li>
               <li class="mb-10 ml-4">
                  <div class="absolute w-5 h-5 bg-[#8EB8A1] rounded-full -left-2.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                  <div class="px-5 pb-5">
                     <label class="Notes:">Notes:</label>
                     <textarea name="note" placeholder="Add more details about your trip here. What would you like to remember?" name="note" id="" class="min-h-[100px] max-h-[500px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter your comapny info" spellcheck="false"></textarea>
                  </div>
                  <div class="px-5 pb-5">
                     <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                           Attachments: 
                        </div>
                        <label class="block">
                        <span class="sr-only">Add Files </span>
                        <input name="file" type="file"
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