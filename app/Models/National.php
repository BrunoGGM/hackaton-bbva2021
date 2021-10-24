<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class National extends Model
{
    use HasFactory;

    
    /**
     * Get the cards associated with the national.
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
