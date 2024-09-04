<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $PizzaNapoli = new Restaurant();
        $PizzaNapoli->user_id = 1;
        $PizzaNapoli->name = "Pizza Napoli";
        $PizzaNapoli->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/ristorante-napoli.webp";
        $PizzaNapoli->p_iva = "12345678901";
        $PizzaNapoli->address = "Via dei Ciclamini 8";
        $PizzaNapoli->save();

        // $LaVerace = new Restaurant();
        // $LaVerace->user_id = 1;
        // $LaVerace->name = "La Verace";
        // $LaVerace->image = "https://picsum.photos/200/300";
        // $LaVerace->p_iva = "12345678901";
        // $LaVerace->address = "Via Rossi 22";
        // $LaVerace->save();

        // $IlFornoMagico = new Restaurant();
        // $IlFornoMagico->user_id = 1;
        // $IlFornoMagico->name = "Il Forno Magico";
        // $IlFornoMagico->image = "https://picsum.photos/200/300";
        // $IlFornoMagico->p_iva = "12345678901";
        // $IlFornoMagico->address = "Via Genova 55";
        // $IlFornoMagico->save();

        // $BellaMargherita = new Restaurant();
        // $BellaMargherita->user_id = 1;
        // $BellaMargherita->name = "Bella Margherita";
        // $BellaMargherita->image = "https://picsum.photos/200/300";
        // $BellaMargherita->p_iva = "12345678901";
        // $BellaMargherita->address = "Via Togliatti 73";
        // $BellaMargherita->save();

        // $PizzaECo = new Restaurant();
        // $PizzaECo->user_id = 1;
        // $PizzaECo->name = "Pizza & Co";
        // $PizzaECo->image = "https://picsum.photos/200/300";
        // $PizzaECo->p_iva = "12345678901";
        // $PizzaECo->address = "Via Deri 23";
        // $PizzaECo->save();

        $ElTacoLoco = new Restaurant();
        $ElTacoLoco->user_id = 2;
        $ElTacoLoco->name = "El Taco Loco";
        $ElTacoLoco->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/el-taco-loco/el-taco-loco.webp";
        $ElTacoLoco->p_iva = "12345678901";
        $ElTacoLoco->address = "Via Milano 69";
        $ElTacoLoco->save();

        // $FiestaMexicana = new Restaurant();
        // $FiestaMexicana->user_id = 2;
        // $FiestaMexicana->name = "Fiesta Mexicana";
        // $FiestaMexicana->image = "https://picsum.photos/200/300";
        // $FiestaMexicana->p_iva = "12345678901";
        // $FiestaMexicana->address = "Via Roma 78";
        // $FiestaMexicana->save();

        // $BurritoBrothers = new Restaurant();
        // $BurritoBrothers->user_id = 2;
        // $BurritoBrothers->name = "Burrito Brothers";
        // $BurritoBrothers->image = "https://picsum.photos/200/300";
        // $BurritoBrothers->p_iva = "12345678901";
        // $BurritoBrothers->address = "Via Dei Gerani 43";
        // $BurritoBrothers->save();

        // $SaborMexicano = new Restaurant();
        // $SaborMexicano->user_id = 2;
        // $SaborMexicano->name = "Sabor Mexicano";
        // $SaborMexicano->image = "https://picsum.photos/200/300";
        // $SaborMexicano->p_iva = "12345678901";
        // $SaborMexicano->address = "Via Livorno 33";
        // $SaborMexicano->save();

        // $CasaDelNacho = new Restaurant();
        // $CasaDelNacho->user_id = 2;
        // $CasaDelNacho->name = "Casa Del Nacho";
        // $CasaDelNacho->image = "https://picsum.photos/200/300";
        // $CasaDelNacho->p_iva = "12345678901";
        // $CasaDelNacho->address = "Via Dei Pioppi 25";
        // $CasaDelNacho->save();

        $SushiZen = new Restaurant();
        $SushiZen->user_id = 3;
        $SushiZen->name = "Sushi Zen";
        $SushiZen->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/sushi-zen/sushi-zen.webp";
        $SushiZen->p_iva = "12345678901";
        $SushiZen->address = "Via Tokyo 32";
        $SushiZen->save();

        // $WasabiHouse = new Restaurant();
        // $WasabiHouse->user_id = 3;
        // $WasabiHouse->name = "Wasabi House";
        // $WasabiHouse->image = "https://picsum.photos/200/300";
        // $WasabiHouse->p_iva = "12345678901";
        // $WasabiHouse->address = "Via Berlino 24";
        // $WasabiHouse->save();

        // $SakuraSushi = new Restaurant();
        // $SakuraSushi->user_id = 3;
        // $SakuraSushi->name = "Sakura Sushi";
        // $SakuraSushi->image = "https://picsum.photos/200/300";
        // $SakuraSushi->p_iva = "12345678901";
        // $SakuraSushi->address = "Via Monaco 71";
        // $SakuraSushi->save();

        // $OceanoBlu = new Restaurant();
        // $OceanoBlu->user_id = 3;
        // $OceanoBlu->name = "Oceano Blu";
        // $OceanoBlu->image = "https://picsum.photos/200/300";
        // $OceanoBlu->p_iva = "12345678901";
        // $OceanoBlu->address = "Via Praga 45";
        // $OceanoBlu->save();

        // $NinjaRolls = new Restaurant();
        // $NinjaRolls->user_id = 3;
        // $NinjaRolls->name = "Ninja Rolls";
        // $NinjaRolls->image = "https://picsum.photos/200/300";
        // $NinjaRolls->p_iva = "12345678901";
        // $NinjaRolls->address = "Via Amsterdam 78";
        // $NinjaRolls->save();

        $DragoneDOro = new Restaurant();
        $DragoneDOro->user_id = 4;
        $DragoneDOro->name = "Dragone D'Oro";
        $DragoneDOro->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/dragone-doro/dragone-doro.webp";
        $DragoneDOro->p_iva = "12345678901";
        $DragoneDOro->address = "Via Firenze 11";
        $DragoneDOro->save();

        // $MandarinoRosso = new Restaurant();
        // $MandarinoRosso->user_id = 4;
        // $MandarinoRosso->name = "Mandarino Rosso";
        // $MandarinoRosso->image = "https://picsum.photos/200/300";
        // $MandarinoRosso->p_iva = "12345678901";
        // $MandarinoRosso->address = "Via Dublino 56";
        // $MandarinoRosso->save();

        // $BambooGarden = new Restaurant();
        // $BambooGarden->user_id = 4;
        // $BambooGarden->name = "Bamboo Garden";
        // $BambooGarden->image = "https://picsum.photos/200/300";
        // $BambooGarden->p_iva = "12345678901";
        // $BambooGarden->address = "Via Londra 46";
        // $BambooGarden->save();

        // $PeoniaImperiale = new Restaurant();
        // $PeoniaImperiale->user_id = 4;
        // $PeoniaImperiale->name = "Peonia Imperiale";
        // $PeoniaImperiale->image = "https://picsum.photos/200/300";
        // $PeoniaImperiale->p_iva = "12345678901";
        // $PeoniaImperiale->address = "Via Rimini 25";
        // $PeoniaImperiale->save();

        // $SaporeDiShanghai = new Restaurant();
        // $SaporeDiShanghai->user_id = 4;
        // $SaporeDiShanghai->name = "Sapore Di Shanghai";
        // $SaporeDiShanghai->image = "https://picsum.photos/200/300";
        // $SaporeDiShanghai->p_iva = "12345678901";
        // $SaporeDiShanghai->address = "Via Paolo Sarpi 49";
        // $SaporeDiShanghai->save();
    }
}
