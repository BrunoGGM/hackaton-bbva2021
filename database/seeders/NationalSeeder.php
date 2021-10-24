<?php

namespace Database\Seeders;

use App\Models\National;
use Illuminate\Database\Seeder;

class NationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        National::create(['description' => 'Nacional']);
        National::create(['description' => 'Internacional']);
    }
}
