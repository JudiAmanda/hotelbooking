<x-guest-layout>
    

    <div><br><br><br><br></div>

<div class="grid grid-cols-3">
@if (\Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
    <div align="center" style="width:500px;" class="w-2/5">

    <h5 class="mb-2 text-2xl font-bold tracking-tight underline text-blue-900 dark:text-white">Hotel Reviews</h5>
    @foreach ($hoteldetails->review as $reviews) 
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h6 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $reviews->name }}</h6>
    <p class="font-normal text-gray-500 dark:text-gray-400">{{ $reviews->comment }}</p>
</div>
@endforeach
</div>
    
<div style="width:500px;" class="w-3/5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="../{{ $hoteldetails->image_path }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-900 dark:text-white">{{ $hoteldetails->name }}</h5>
        </a>
        <h6 class="mb-3 font-bold text-gray-700 dark:text-gray-400">State: {{ $hoteldetails->state->state_name }}</h6>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $hoteldetails->location }}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $hoteldetails->description }}</p>
        @foreach ($hoteldetails->room as $rooms) 
        <h4 class="mb-3 font-bold text-green-600 text-gray-700 dark:text-gray-400">{{ $rooms->type}} : N{{ number_format($rooms->price) }}</h4>
        @endforeach
        <a href="{{ route('reservation', $hoteldetails->id ) }} ">
        <button type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
  
       Book Now!
        </button>
</a>
    </div>

    <h3 class="font-bold"> Leave Your Review For This Hotel Below</h3>
   
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{url('save-review')}}">
    @csrf
    

<div>
<input type="hidden" name="hotel_id" value="{{ $hoteldetails->id }}"/>
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">{{ __('Name') }} </label>
    <input id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
     type="text" name="name" value=""  />
</div>

<div class="mt-4">
    <label for="comment">{{ __('Comment') }} </label>
    <textarea  id="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
     name="comment" required /> </textarea>
<br>
    <x-button class="ml-4">
                    {{ __('Submit Review') }}
                </x-button>
</div>
</form>
<br>
</div>
<div class="w-1/5">

</div>

<div><br><br><br><br></div>
              
</div>
<footer style="width:100%; height:100%;">
Copyright 2023 Hotel Reservation Inc
</footer>




</x-guest-layout>