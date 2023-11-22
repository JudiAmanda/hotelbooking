<x-guest-layout>

<div class="w-full" style="height:650px; width: 1700px;" id="home-slider">
<br><br><br><br><br><br>
<h1 style="font-size: 70px; text-align: center" class="font-bold text-white"> Welcome To The Number One Nigeria Hotel Reservation Platform</h1>
<div align="center">
<form action="{{ route('search.detail') }}">
<input style="width: 250px;" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
 type="text" name="hotel-search" placeholder="search by a Nigeria State" />

<x-button class="ml-4">
{{ __('Search') }}
</x-button>
</form>
</div>

</div>
         <div><br><br></div>
         <div> <h1 style="font-size: 50px; text-align: center" class="font-bold text-green-600"> Top Hotels In Nigeria </h1></div>
<div style="margin-left:10px;" class="grid grid-cols-3 ">

@foreach ($hotels as $hotel)
<div align="center"  class="w-4/5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="../{{ $hotel->image_path }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-900 dark:text-white">{{ $hotel->name }}</h5>
        </a>
        <h6 class="mb-3 font-bold text-gray-700 dark:text-gray-400">State: {{ $hotel->state->state_name }}</h6>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $hotel->location }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $hotel->description }}</p>
        @foreach ($hotel->room as $rooms) 
        <h4 class="mb-3 font-bold text-green-600 text-gray-700 dark:text-gray-400">{{ $rooms->type}} : N{{ number_format($rooms->price) }}</h4>
        @endforeach
        <a href="{{ route('reservation', $hotel->id ) }} ">
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
  
       Book Now!
        </button>
</a>
    </div>
</div>
    @endforeach   
</div
<br><br>
<p align="center"><a href="{{ route('hotels' ) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            View All Hotel Details
             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a></p>

<br><br><br>




<footer align="center" style="width:100%; height:100%;">
Copyright 2023 Hotel Reservation Inc
</footer>

</x-guest-layout>