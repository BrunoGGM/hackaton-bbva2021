<?php

namespace Database\Seeders;

use App\Models\State;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $states = [];
        $csv = Reader::createFromPath('database/seeders/csv/states.csv', 'r');
        // indicamos que el delimitador es la coma
        $csv->setDelimiter(',');
        // Indicamos el Ã­ndice de la fila de nombres de columnas
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();


        foreach ($records as $key => $record) {
            $state = [
                'id' => $record['id'],
                'country_id' => $record['country_id'],
                'state_key' => $record['state_key'],
                'name' => $record['name'],
                'code' => $record['code'],
                'created_at' => now()
            ];
            $states[$key] = $state;
        }
        State::insert($states);
    }
}
