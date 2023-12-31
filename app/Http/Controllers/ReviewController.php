<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{


 public function index(){
    $reviews = Review::orderBy("created_at","desc")->paginate(10);
 }
//Form processing learnt from
//https://dev.to/sanajitjana/form-example-in-laravel-8-45oc
 public function saveReview(Request $request)
  {
   
    //create input validation rule
    $validateInput = $request->validate([
      "name"=> 'required|string',
      'comment'=> 'required',

    ]);
    $review = new Review;
    $review->hotel_id = $request->hotel_id;
    $review->name = $validateInput['name'];
    $review->comment = $validateInput['comment'];
    if($review->save()){
    return redirect()->back()->with('success', 'Thanks For Your Review!');  
    }else{
        
        return redirect()->back()->with('error', 'Error Submitting  Review!'); 
    } 

  }
}
                         