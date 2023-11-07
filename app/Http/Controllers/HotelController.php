<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

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









}
