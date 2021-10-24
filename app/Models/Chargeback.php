<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chargeback extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'sell_date',
        'amount',
        'authorization_number',
        'case_number',
        'contract',
        'entity_id',
        'operative_id',
        'buyer_name',
        'buyer_surname',
        'phone_number',
        'email',
        'ip',
        'street',
        'number',
        'locality_id',
        'city_id',
        'state_id',
        'country_id',
        'zip_code',
        'chargeback_types_id'

    ];
}
