<?php

namespace Database\Seeders;

use App\Models\ChargebackType;
use Illuminate\Database\Seeder;

class ChargebackTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChargebackType::create([
            'id' => '4837',
            'description' => 'Fraude Internacional'
        ]);
        ChargebackType::create([
            'id' => '68',
            'description' => 'Fraude Nacional'
        ]);
        ChargebackType::create([
            'id' => '10',
            'description' => 'Fraude Visa'
        ]);
    }
}
