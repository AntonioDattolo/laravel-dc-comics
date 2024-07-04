<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class Comic_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   $newRecord = new Comic;
        $newRecord->title = "Un fumetto";
        $newRecord->description = "una descrizione molto lunga";
        $newRecord->thumb = "un percorso di un file cover";
        $newRecord->price = "53.85";
        $newRecord->series = "una serie conosciuta";
        $newRecord->sale_date = "2024-07-25";
        $newRecord->type = "un tipo" ;
        $newRecord->artist = "ciao paolone";
        $newRecord->writers = "ciaoino paolino";
        $newRecord->save();
    }
}
