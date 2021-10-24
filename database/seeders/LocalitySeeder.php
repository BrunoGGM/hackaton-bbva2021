<?php

namespace Database\Seeders;

use App\Models\Locality;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localities = [];
        $chunk = 10000;
        $csvLocalities = Reader::createFromPath('database/seeders/csv/localities.csv', 'r');     
        // Indicamos que el delimitador es la coma
        $csvLocalities->setDelimiter(',');     
        // Indicamos el Ã­ndice de la fila de nombres de columnas
        $csvLocalities->setHeaderOffset(0);   
        // Recuperamos el genenrador con todos los registros encontrados
        $recordsLocalities = $csvLocalities->getRecords(); 
   
        //creamos array con todos los registros
        $cityId = 1;
        $statePrevious = '1';
        $cityPrevious = '001';
        foreach ($recordsLocalities as $key => $recordLocality) {
            $cityCurrent = $recordLocality['city_key'];
            if ($cityCurrent !== $cityPrevious || ($recordLocality['city_key'] == '999' && $recordLocality['locality_key'] == '9999')) {
                $cityId++;             
            }
    
            $locality = [
                'id' => $recordLocality['id'],
                'state_id' => $recordLocality['state_id'],
                'city_id' => $cityId,
                'locality_key' => $recordLocality['locality_key'],
                'name' => $recordLocality['name'],
                'created_at' => now()
            ];

            $localities[$key] = $locality;
            $cityPrevious = $cityCurrent;
        }

        //insertamos los registros por bloques segun $chunk
        foreach (array_chunk($localities,$chunk) as $locality) {       
            Locality::insert($locality);           
        }
    }
}
