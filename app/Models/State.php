<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    // mass assignable fields

    protected $fillable = ['state_name'];

    public function hotel()
    {

        return $this->hasMany(Hotel::class);
    }


}
