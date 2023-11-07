<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
      //Fields that can be mass assigned
    protected $fillable = [
        'user_id',
        'hotel_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function hotel(){
        return $this->belongsTo(Hotels::class);
    }
     
    public function room(){
        return $this->belongsTo(Room::class);
    }


}
