<x-guest-layout>
    

    <div><br><br><br><br></div>

            @foreach ($hotels as $hotel)    

<div align="center" class="w-full  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
<div style="width: 700px;" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $hotel->image_path }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $hotel->name }}</h5>
        <h6 class="mb-3 font-bold text-gray-700 dark:text-gray-400">State: {{ $hotel->state->state_name }}</h6>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $hotel->location }}</p>
        <p><a href="{{ route('hotels.detail', $hotel->id ) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            View Hotel Details
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a></p>
    </div>
   
</div>


</div>



@endforeach

<footer align="center" style="width:100%; height:100%;">
Copyright 2023 Hotel Reservation Inc
</footer>

</x-guest-layout>