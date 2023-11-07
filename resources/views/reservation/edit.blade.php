<x-app-layout>
    

    <div><br><br><br><br></div>

             

<div style="max-width:500px; margin: auto;"  >
    
<h1 align="center" class="font-bold"> Update Reservation</h1>
@if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
<form class="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 " method="post" action="{{url('update-booking', $userReservation->id)}}">
    @csrf

<div>
<input  type="hidden" name="hotel_id" value="{{ $userReservation->id }}" />
<label class="block text-gray-700 text-sm font-bold mb-2" for="room">{{ __('Room Type') }} </label>
<select name="room_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
@foreach ($userReservation->room as $rooms) 
<option value="{{ $rooms->id }}"> {{ $rooms->type }}</option>
@endforeach
</select>
</div>
<div class="mt-4">
<label class="block text-gray-700 text-sm font-bold mb-2" for="check_in_date">{{ __('Check In Date') }} </label>
<input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
name="check_in_date" value="{{ $userReservation->check_in_date }} />
</div>

<div class="mt-4">
<label class="block text-gray-700 text-sm font-bold mb-2" for="check_out_date">{{ __('Check Out Date') }} </label>
<input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
name="check_out_date" value="{{ $userReservation->check_in_date }}"/>
</div>


<div class="mt-4">
   
    <x-button class="ml-4">
             {{ __('Make Reservation') }}
        </x-button>
</div>
</form>

</div>



</x-app-layout>