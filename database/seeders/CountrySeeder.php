<?php
namespace Database\Seeders;

use App\Models\Country;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [];

        $csvCountries = Reader::createFromPath('database/seeders/csv/countries.csv', 'r');
        $csvCountries->setDelimiter(',');
        $csvCountries->setHeaderOffset(0);
        $recordsCountries = $csvCountries->getRecords();

        foreach ($recordsCountries as $key => $record) {
            $country = [
                'id' => $record['id'],
                'code' => $record['code'],
                'name' => $record['name'],
                'created_at' => now()
            ];

            $countries[$key] = $country;
        }

        Country::insert($countries);
    }
}
