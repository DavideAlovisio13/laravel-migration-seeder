<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

//importo il mio file con le mie funzioni con un alias
use App\Functions\Utilities as CsvReader;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // variabile che attinge i dati dal file .json
        // $trains = json_decode(file_get_contents(__DIR__ . '/trains.json'), true);
        // dd($trains);
        // foreach ($trains as $train) {
        //     $new_train = new Train();
        //     $new_train->id = $train['id'];
        //     $new_train->company = $train['company'];
        //     $new_train->departure_station = $train['departure_station'];
        //     $new_train->arrival_station = $train['arrival_station'];
        //     $new_train->departure_time = $train['departure_time'];
        //     $new_train->arrival_time = $train['arrival_time'];
        //     $new_train->train_code = $train['train_code'];
        //     $new_train->carriages = $train['carriages'];
        //     $new_train->on_time = $train['on_time'];
        //     $new_train->cancelled = $train['cancelled'];
        //     $new_train->save();
        // }

        // metodo di impostazione tramite file .csv

        //creo una variabile che contiente il path del file 
        $path = __DIR__ . '/trains.csv';
        // richiamo la mia funzione
        $data = CsvReader::getCsvData($path);

        foreach ($data as $index => $train) {
            if($index !== 0) {  // salto la prima riga che contiene i nomi delle colonne
                $new_train = new Train();
                $new_train->id = $train[0];
                $new_train->company = $train[1];
                $new_train->departure_station = $train[2];
                $new_train->arrival_station = $train[3];
                $new_train->departure_time = $train[4];
                $new_train->arrival_time = $train[5];
                $new_train->train_code = $train[6];
                $new_train->carriages = $train[7];
                $new_train->on_time = $train[8];
                $new_train->cancelled = $train[9];
                $new_train->save();
            }
        }

    }
}
