<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    
    /**
     * Get the national associated with the card.
     */
    public function national()
    {
        return $this->belongsTo(National::class);
    }
    /**
     * Get the card type associated with the card.
     */
    public function cardType()
    {
        return $this->belongsTo(CardType::class);
    }
}
