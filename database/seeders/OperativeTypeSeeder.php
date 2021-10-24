<?php

namespace Database\Seeders;

use App\Models\OperativeType;
use Illuminate\Database\Seeder;

class OperativeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperativeType::create(['description' => 'CHIP']);
        OperativeType::create(['description' => 'CONTACTLESS']);
        OperativeType::create(['description' => 'VENTA POR INTERNET']);
        OperativeType::create(['description' => 'VENTA TELEFONICA']);
    }
}
