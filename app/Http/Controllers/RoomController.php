<?php

namespace App\Http\Controllers;
use App\Models\Hotel;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   //Display Room Addition Form 
   public function roomForm(){
    $hotels = Hotel::all();
    return view("room-form", ['hotels' => $hotels]);
}


//function for handling Room submission form
public function submitRoomForm(Request $request)
{
 
  //create input validation rule
  $validateInput = $request->validate([
    "room_type"=> 'required',
    "price"=> 'required|numeric',
  ]);
 
  $room = new Room;
  $room->type = $validateInput['room_type'];
  $room->price = $validateInput['price'];
  $room->availability = $request->availability;
  $room->hotel_id = $request->hotel;
  
  if($room->save()){
  return redirect()->back()->with('success', 'Room Added Sucessfully!');  
  }else{
      
      return redirect()->back()->with('error', 'Error Adding Room!'); 
  } 

}



}