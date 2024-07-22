<?php

namespace Database\Seeders;
use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animalData = $this->getCsv(__DIR__ . '/../../resources/assets/animali.csv');
        /* var_dump($animalData); */

        foreach ($animalData as $singleAnimal) {
            $newAnimal = new Animal();
            $newAnimal->nome = $singleAnimal[0];
            $newAnimal->specie = $singleAnimal[1];
            $newAnimal->razza = $singleAnimal[2];
            $newAnimal->eta = $singleAnimal[3];
            $newAnimal->sesso = $singleAnimal[4];
            $newAnimal->colore = $singleAnimal[5];
            $newAnimal->peso = $singleAnimal[6];
            $newAnimal->altezza = $singleAnimal[7];
            $newAnimal->url_img = $singleAnimal[8];
            $newAnimal->info = $singleAnimal[9];
            $newAnimal->save();
        }

    }

    public function getCsv($filePath){
        $csvDava = [];

        $fileData = fopen($filePath, 'r');

        //check file non trovato
        if($fileData === false){
            throw new InvalidArgumentException('File non trovato');
        };

        fgetcsv($fileData);

        while(($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        };
        fclose($fileData);
        return $csvData;
    }
}
