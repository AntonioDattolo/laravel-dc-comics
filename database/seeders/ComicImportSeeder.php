<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $importNewCatalog = config('data_store');
        for($i = 0; $i < count($importNewCatalog["comics"]); $i++){
            $index = $i;
            $newRecord = new Comic;
            $newRecord->title = $importNewCatalog["comics"][$index]["title"];
            $newRecord->description = $importNewCatalog["comics"][$index]["description"];
            $newRecord->thumb = $importNewCatalog["comics"][$index]["thumb"];
            $newRecord->price = $importNewCatalog["comics"][$index]["price"];
            $newRecord->series = $importNewCatalog["comics"][$index]["series"];
            $newRecord->sale_date = $importNewCatalog["comics"][$index]["sale_date"];
            $newRecord->type = $importNewCatalog["comics"][$index]["type"];
            $newRecord->artist =  "Dan Jurgens";
            $newRecord->writers =  "Dan Jurgens";
            $newRecord->save();
        }
    }
}



