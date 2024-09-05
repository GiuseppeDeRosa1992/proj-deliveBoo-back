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

        $Internazionale = new Type();
        $Internazionale->name = "Internazionale";
        $Internazionale->save();

        $Steakhouse = new Type();
        $Steakhouse->name = "Steakhouse";
        $Steakhouse->save();

        $Fast_Food = new Type();
        $Fast_Food->name = "Fast Food";
        $Fast_Food->save();

        $Bar_e_Caffetteria = new Type();
        $Bar_e_Caffetteria->name = "Bar e Caffetteria";
        $Bar_e_Caffetteria->save();

        $Fusion = new Type();
        $Fusion->name = "Fusion";
        $Fusion->save();

        $Gourmet = new Type();
        $Gourmet->name = "Gourmet";
        $Gourmet->save();

        $Pasticceria = new Type();
        $Pasticceria->name = "Pasticceria";
        $Pasticceria->save();
    }
}
