<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
//Fields that can be mass assignment
    protected $fillable = ['name',
                         'location', 
                         'description', 
                         'amenities',
                          'image_path',
                          'state_id'
                        ];

            public function room()
            {
              return $this->hasMany(Room::class); 

            }

            public function state() 

            {
                return $this->belongsTo(State::class);
            }

            public function reservation(){
                return $this->hasMany(Reservation::class);
            }
           
            public function review(){
                return $this->hasMany(Review::class);
            }
}
