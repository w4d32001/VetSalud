<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecieSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specie::create([
            "name"=> "Perro",
        ]);
        Specie::create([
            "name"=> "Gato",
        ]);
        Specie::create([
            "name"=> "Conejo",
        ]);
        Specie::create([
            "name"=> "Hamster",
        ]);
        Specie::create([
            "name"=> "Ave",
        ]);
        Specie::create([
            "name"=> "Pez",
        ]);
        Specie::create([
            "name"=> "Tortuga",
        ]);
        Specie::create([
            "name"=> "Caballo",
        ]);
        Specie::create([
            "name"=> "Cerdo",
        ]);
        Specie::create([
            "name"=> "Cabra",
        ]);
    }
}
