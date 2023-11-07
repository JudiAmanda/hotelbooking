
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard')  }} <div align="right"> Welcome, {{$user->name}}!</div>
        </h2>
    </x-slot>
   

    <div align="center" class="relative overflow-x-auto">

    <h2 align="center" class="text-3xl font-bold underline">
        Your Reservations
  </h2>
    <table class="w-4/5  text-sm text-left text-gray-400 dark:text-gray-800">
    
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Hotel Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Room Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Check In Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Check Out Date
                </th>
                
            </tr>
        </thead>
        <tbody>
        @if ($reservations->isEmpty())
        <tr>
            <td>
</td>
<td>
</td>
            <td>
              <p> You don't have any Reservations Yet</p>
</td>
              <tr>
               
        @else
           
           @foreach ($reservations as $reservation)
              
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-black">
                <td class="px-6 py-4">
                {{ $reservation->hotel->name }}
                </td>
                <td class="px-6 py-4">
                {{ $reservation->room->type }}
                </td>
                <td class="px-6 py-4">
                Check-in: {{ $reservation->check_in_date }}
                </td>
                <td class="px-6 py-4">
                Check-in: {{ $reservation->check_out_date }}
                </td>
            </tr>
            @endforeach
           @endif
        </tbody>
    </table>
</div>
<br><br>


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

</x-app-layout>

