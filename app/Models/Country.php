<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * Get the states associated with the national.
     */
    public function states()
    {
        return $this->hasMany(States::class);
    }
    
}
