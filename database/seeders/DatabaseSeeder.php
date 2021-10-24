<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            LocalitySeeder::class,
            CardTypeSeeder::class,
            ChargebackTypeSeeder::class,
            NationalSeeder::class,
            OperativeTypeSeeder::class,
            EntitySeeder::class,
        ]);

        \App\Models\Card::factory(10)->create();
        \App\Models\Chargeback::factory(100)->create();
    }
}
