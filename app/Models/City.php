<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    
    /**
     * Get the state associated with the city.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    /**
     * Get the localities associated with the city.
     */
    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
