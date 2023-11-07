<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //mass assignable

    protected  $fillable  =  ['hotel_id','name',  'comment'];

    public function hotel()
    {
            return $this->belongsTo(Hotels::class);
    
     }
}
