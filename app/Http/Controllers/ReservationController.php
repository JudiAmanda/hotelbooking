<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()                                              
    {
        $this->middleware('auth');
    }

    public function index($hotelId)
    {
       
        #Retrieve hotels along with states and rooms
        if (Auth::check()) {
            $user = Auth::User();
       //Grab the particular hotel along with the state 
        // room infomation
        $hotelDetails= Hotel::with('state', 'room')->findOrFail($hotelId);
        return view('reservation/reservation', ['hoteldetails'=> $hotelDetails]);
    }
    
    return redirect()->back()->with('error', 'You must be  logged in to Book an Hotel');
    }


    public function saveReservation(Request $request)
    {
      $user = Auth::User();

 //create input validation rule for dates
 $validateInput = $request->validate([
    "check_in_date"=> 'required|date',
    'check_out_date'=> 'required|date',

  ]);


      $reservation = new Reservation;
      $reservation->user_id = $user->id;
      $reservation->hotel_id = $request->hotel_id;
      $reservation->room_id = $request->room_id;
      $reservation->check_in_date = $validateInput['check_in_date'];
      $reservation->check_out_date = $validateInput['check_out_date'];
      if($reservation->save()){
          return redirect()->route('reservation.manage' , $user->id)->with('success', 'Reservation successfully done!');
      }else{
          
          return redirect()->back()->with('error', 'Error Submitting  Reservation!'); 
      } 
  
    }

    public function manageReservation($userId){

        if (Auth::check()) {
            $user = Auth::User();
       //Grab the particular logged in user's reservations
       // along with the hotel and room infomation
         $reservations = $user->reservation()->with('hotel', 'room')->get();
        return view('reservation/manage-bookings', ['reservations'=> $reservations]);
    }
    
    return redirect()->back()->with('error', 'You must be  logged in to Manage Your Reservations');
    }


    //implement Reservation update using this tutorial here
//https://www.fundaofwebit.com/laravel-8/how-to-edit-update-data-in-laravel

public function editReservation($id)
{
    $userReservation= Hotel::with('state', 'room')->findOrFail($id);
    return view('reservation.edit', ['userReservation'=> $userReservation]);
}

public function updateReservation(Request $request, $id)
{

    $user = Auth::User();
    $reservation = Reservation::find($id);
    $reservation->room_id = $request->room_id;
    $reservation->check_in_date = $request->check_in_date;
    $reservation->check_out_date = $request->check_out_date;
    if($reservation->update()){
        return redirect()->route('reservation.manage' , $user->id)->with('success', 'Reservation successfully Updated!');
    }else{
        
        return redirect()->back()->with('error', 'Error Updating  Reservation!'); 
    }

}


public function deleteReservation($id){
    $user = Auth::User();
    if(Reservation::where('id', $id)->delete()){
        return redirect()->route('reservation.manage', $user->id)->with('success','Reservation Succesfully Deleted!');
    }
    else{
        
        return redirect()->back()->with('error', 'Error Deleting  Reservation!'); 
    }
}


}
