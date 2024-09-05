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


        $ElTacoLoco = new Restaurant();
        $ElTacoLoco->user_id = 2;
        $ElTacoLoco->name = "El Taco Loco";
        $ElTacoLoco->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/el-taco-loco/el-taco-loco.webp";
        $ElTacoLoco->p_iva = "12345678901";
        $ElTacoLoco->address = "Via Milano 69";
        $ElTacoLoco->save();


        $SushiZen = new Restaurant();
        $SushiZen->user_id = 3;
        $SushiZen->name = "Sushi Zen";
        $SushiZen->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/sushi-zen/sushi-zen.webp";
        $SushiZen->p_iva = "12345678901";
        $SushiZen->address = "Via Tokyo 32";
        $SushiZen->save();


        $DragoneDOro = new Restaurant();
        $DragoneDOro->user_id = 4;
        $DragoneDOro->name = "Dragone D'Oro";
        $DragoneDOro->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/c5bb83f5c09d8207a6ce7e9d2b31f9dde67492b6/IMG/dragone-doro/dragone-doro.webp";
        $DragoneDOro->p_iva = "12345678901";
        $DragoneDOro->address = "Via Firenze 11";
        $DragoneDOro->save();


        $LaVerace = new Restaurant();
        $LaVerace->user_id = 5;
        $LaVerace->name = "La Verace";
        $LaVerace->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/14bad662381859bdd1f55f4fe1de1bdd26d592e9/IMG/la-verace/la-verace.webp";
        $LaVerace->p_iva = "12345678901";
        $LaVerace->address = "Via Rossi 22";
        $LaVerace->save();

        $PeccatiDiGola = new Restaurant();
        $PeccatiDiGola->user_id = 6;
        $PeccatiDiGola->name = "Peccati di Gola";
        $PeccatiDiGola->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/af8858428c4d408841c01dd707defcbbe41fe35e/IMG/peccati-di-gola/peccati-di-gola.webp";
        $PeccatiDiGola->p_iva = "12345678901";
        $PeccatiDiGola->address = "Via Arrigo Rossi 22";
        $PeccatiDiGola->save();

        $BrothersCafè = new Restaurant();
        $BrothersCafè->user_id = 7;
        $BrothersCafè->name = "Brother's Cafè";
        $BrothersCafè->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/af8858428c4d408841c01dd707defcbbe41fe35e/IMG/brothers-cafe/brothers-cafe.webp";
        $BrothersCafè->p_iva = "12345678901";
        $BrothersCafè->address = "Via Trieste 22";
        $BrothersCafè->save();

        $IlFornoMagico = new Restaurant();
        $IlFornoMagico->user_id = 8;
        $IlFornoMagico->name = "Il Forno Magico";
        $IlFornoMagico->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/14bad662381859bdd1f55f4fe1de1bdd26d592e9/IMG/il-forno-magico/forno-magico.webp";
        $IlFornoMagico->p_iva = "12345678901";
        $IlFornoMagico->address = "Via Genova 55";
        $IlFornoMagico->save();

        $BurritoBrothers = new Restaurant();
        $BurritoBrothers->user_id = 9;
        $BurritoBrothers->name = "Burrito Brothers";
        $BurritoBrothers->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/14bad662381859bdd1f55f4fe1de1bdd26d592e9/IMG/burrito-brothers/burrito-brothers.webp";
        $BurritoBrothers->p_iva = "12345678901";
        $BurritoBrothers->address = "Via Roma 55";
        $BurritoBrothers->save();

        $SaporeDiShanghai = new Restaurant();
        $SaporeDiShanghai->user_id = 10;
        $SaporeDiShanghai->name = "Sapore Di Shanghai";
        $SaporeDiShanghai->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/14bad662381859bdd1f55f4fe1de1bdd26d592e9/IMG/sapori-di-shangai/sapore-di-shanghai.webp";
        $SaporeDiShanghai->p_iva = "12345678901";
        $SaporeDiShanghai->address = "Via Pescara 85";
        $SaporeDiShanghai->save();

        $OceanoBlu = new Restaurant();
        $OceanoBlu->user_id = 11;
        $OceanoBlu->name = "Oceano Blu";
        $OceanoBlu->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/14bad662381859bdd1f55f4fe1de1bdd26d592e9/IMG/oceano-blu/Oceano-blu.webp";
        $OceanoBlu->p_iva = "12345678901";
        $OceanoBlu->address = "Via Praga 45";
        $OceanoBlu->save();

        $LaBraceriaSottoCasa = new Restaurant();
        $LaBraceriaSottoCasa->user_id = 12;
        $LaBraceriaSottoCasa->name = "La Braceria Sotto Casa";
        $LaBraceriaSottoCasa->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/af8858428c4d408841c01dd707defcbbe41fe35e/IMG/la-braceria-sotto-casa/la-braceria-sotto-casa.webp";
        $LaBraceriaSottoCasa->p_iva = "12345678901";
        $LaBraceriaSottoCasa->address = "Via Gramsci 33";
        $LaBraceriaSottoCasa->save();
    }
}
