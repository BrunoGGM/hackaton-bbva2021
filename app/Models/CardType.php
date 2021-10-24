<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'description',
    ];

    /**
     * Get the cards associated with the card type.
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
