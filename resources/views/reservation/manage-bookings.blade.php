
<x-app-layout>
  
   

    <div  class="relative overflow-x-auto">
    <div><br><br><br><br></div>
    @if (\Session::has('success'))
    <div align="center" class="p-4 mb-4 font-bold text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('error'))
    <div align="center" class="p-4 mb-4 font-bold text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
    <h2 align="center" class="text-3xl font-bold underline">
        Your Reservations
  </h2>
    <table class="w-full  text-sm text-left text-gray-400 dark:text-gray-800">
    
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

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>
        @if ($reservations->isEmpty())
        <tr>
            <td>
</td>
<td></td>
            <td>
              <p> You don't have any Reservations Yet</p>
</td>
<td> </td>
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
                <td>
                    <a href="{{ route('reservation.edit', $reservation->id)}}"> Edit</a> | 
                    <a href="{{url('delete-booking', $reservation->id)}}"> Cancel</a>
              </td>
            </tr>
            @endforeach
           @endif
        </tbody>
    </table>
</div>



</x-app-layout>

