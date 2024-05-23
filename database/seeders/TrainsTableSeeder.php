<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

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
    }
}
