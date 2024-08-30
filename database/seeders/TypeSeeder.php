<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Pizzeria = new Type();
        $Pizzeria->name = "Pizzeria";
        $Pizzeria->save();

        $Sushi = new Type();
        $Sushi->name = "Sushi";
        $Sushi->save();

        $Messicano = new Type();
        $Messicano->name = "Messicano";
        $Messicano->save();

        $Cinese = new Type();
        $Cinese->name = "Cinese";
        $Cinese->save();

        $Italiano = new Type();
        $Italiano->name = "Italiano";
        $Italiano->save();

        $Indiano = new Type();
        $Indiano->name = "Indiano";
        $Indiano->save();

        $Vegano = new Type();
        $Vegano->name = "Vegano";
        $Vegano->save();
    }
}
