<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\State;

class HotelController extends Controller
{
    
    public function index()
    {
        #Retrieve hotels along with states and rooms
        $hotels = Hotel::with(['state', 'room'])->get();
        
        return view('hotels/hotels', ['hotels' => $hotels]);
    }

    public function hotelDetails($hotelId)
    {
        //Grab the particular hotel along with the state 
        // room infomation
        $hotelDetails= Hotel::with('state', 'room', 'review')->findOrFail($hotelId);
        return view('hotels/hotel-details', ['hoteldetails'=> $hotelDetails]);
    }



// Method for handling hotel search 
//by state
    public function hotelSearch()
    {
        if(request('hotel-search')){
        $hotelSearch = State::with('hotel')->where('state_name', 'like', '%' . request('hotel-search') . '%')->get();

        return view('hotels/search-details', ['hotelSearch' => $hotelSearch]);
    }else{
        return redirect()->route('search.detail')->with('error', 'No hotel  found for that state');

    }
    }
    





}
