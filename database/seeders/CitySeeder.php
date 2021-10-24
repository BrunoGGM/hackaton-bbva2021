<?php

namespace Database\Seeders;

use League\Csv\Reader;
use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [];
        $csvCities = Reader::createFromPath('database/seeders/csv/cities.csv', 'r');
        $csvCities->setDelimiter(',');
        $csvCities->setHeaderOffset(0);
        $recordsCities = $csvCities->getRecords();

        foreach ($recordsCities as $key => $recordCity) {
            $city = [
                'id' => $recordCity['id'],
                'state_id' => $recordCity['state_id'],
                'city_key' => $recordCity['city_key'],
                'name' => strtoupper(trim($recordCity['name'])),
                'created_at' => now()

            ];

            $cities[$key] = $city;
        }

        City::insert($cities);
    }
}
