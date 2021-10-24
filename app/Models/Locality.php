<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    
    /**
     * Get the city associated with the locality.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    /**
     * Get the state associated with the locality.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
