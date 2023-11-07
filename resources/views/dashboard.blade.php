
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard')  }} <div align="right"> Welcome, {{$user->name}}!</div>
        </h2>
    </x-slot>
   

    <div align="right" class="relative overflow-x-auto">

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
<div class="relative overflow-x-auto">
    <h1 align="center" class="text-3xl font-bold underline">
        Hotels In Nigeria
  </h1>
    <table align="right" class="w-4/5 text-sm text-left text-gray-400 dark:text-gray-800">
    
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-500">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Hotel Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                   State
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>
           
            @foreach ($hotels as $hotel)
              
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-black">
                <td class="px-6 py-4">
                {{ $hotel->name }}
                </td>
                <td class="px-6 py-4">
                {{ $hotel->location }}
                </td>
                <td class="px-6 py-4">
                {{ $hotel->state->state_name }}
                </td>
                <td class="px-6 py-4">
               <a href=""> View Details</a> 
                </td>
            </tr>
            @endforeach    
            
           
        </tbody>
    </table>
</div>




</x-app-layout>

