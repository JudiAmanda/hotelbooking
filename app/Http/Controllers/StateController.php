<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    //Display state adition form in the admin area

    public function stateForm(){
        
        return view("state-form");
    }


    //function for handling state submission form
    public function submitStateForm(Request $request)
    {
     
      //create input validation rule
      $validateInput = $request->validate([
        "state_name"=> 'required|string',
      ]);

      $state = new State;
      $state->state_name = $validateInput['state_name'];
      
      if($state->save()){
      return redirect()->back()->with('success', 'State Added Sucessfully!');  
      }else{
          
          return redirect()->back()->with('error', 'Error Adding!'); 
      } 
  
    }



}
