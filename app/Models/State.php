<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * Get the counrtry associated with the state.
     */
    public function counrtry()
    {
        return $this->belongsTo(Counrtry::class);
    }
    /**
     * Get the cities associated with the state.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
