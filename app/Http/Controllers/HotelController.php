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
    
//Display Hotel Addition Form 
public function hotelForm(){
    $states = State::all();
    return view("hotel-form", ['states' => $states]);
}


 //function for handling hotel submission form
 public function submitHotelForm(Request $request)
 {
  
   //create input validation rule
   $validateInput = $request->validate([
     "hotel_name"=> 'required',
     "location"=> 'required',
     "description"=> 'required',
     "amenities"=> 'required',
     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
   ]);

   // Form processing learnt from this tutorial 
   //https://www.laravelia.com/post/laravel-10-image-upload-and-display-tutorial
  
   $fileName = $request->image->extension();
   $request->image->storeAs('public/images', $fileName);
   $imagePath = 'images/' . $fileName;
   $hotel = new Hotel;
   $hotel->name = $validateInput['hotel_name'];
   $hotel->location = $validateInput['location'];
   $hotel->description = $validateInput['description'];
   $hotel->amenities = $validateInput['amenities'];
   $hotel->image_path = $imagePath;
   $hotel->state_id = $request->state;
   
   if($hotel->save()){
   return redirect()->back()->with('success', 'Hotel Added Sucessfully!');  
   }else{
       
       return redirect()->back()->with('error', 'Error Adding Hotel!'); 
   } 
  




}

}