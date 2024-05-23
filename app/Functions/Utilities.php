<?php

namespace App\Functions;

// creo la mia classe con lo stesso nome del file
class Utilities
{
    public static function getCsvData($path)
    {
        // creo la variabile contenente la funzione per leggere il file csv
        $file_stream = fopen($path, 'r');
        // controllo che venga effetivamente letto
        if ($file_stream === false) {
            exit('Cannot open the file ' . $path);
        }
        // creo l'array dove storare i dati
        $data = [];
        // leggo il file
        while ($row = fgetcsv($file_stream)) {
            $data[] = $row;
        }
        //chiudo il file
        fclose($file_stream);

        return $data;
    }
}
