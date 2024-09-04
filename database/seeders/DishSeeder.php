<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*********************************************************************  PIZZERIE  *********************************************************/
        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Margherita";
        $Dish->description = "Pizza con pomodoro e mozzarella";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/margherita.webp";
        $Dish->price = 5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Napoli";
        $Dish->description = "Pizza con pomodoro e alici";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/napoli.webp";
        $Dish->price = 6;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Diavola";
        $Dish->description = "Pizza con pomodoro, mozzarella e salame piccante";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola.webp";
        $Dish->price = 6.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Quattro Stagioni";
        $Dish->description = "Pizza con pomodoro, mozzarella, funghi champignon, carciofi";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-stagioni.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Capricciosa";
        $Dish->description = "Pizza con pomodoro, funghi champignon, olive, carciofi, prosciutto";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/capricciosa.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Tonno e Cipolla";
        $Dish->description = "Pizza con pomodoro, mozzarella, tonno e cipolla";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/tonno-e-cipolla.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Quattro Formaggi";
        $Dish->description = "Pizza con pomodoro, mozzarella, brie, grana, parmigiano";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/quattro-formaggi.webp";
        $Dish->price = 8.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Marinara";
        $Dish->description = "Pizza con pomodoro, origano, aglio e acciughe";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/marinara.webp";
        $Dish->price = 5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Prosciutto Cotto";
        $Dish->description = "Pizza con pomodoro, mopzzarella e prosciutto cotto";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/prosciutto-cotto.webp";
        $Dish->price = 6.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Bufala";
        $Dish->description = "Pizza con pomodoro, mozzarella di bufala e pomodori secchi";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala.webp";
        $Dish->price = 6.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pancetta e Scamorza";
        $Dish->description = "Pizza con pomodoro, mozzarella, pancetta e scamorza affumicata";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/pancetta-e-scamorza.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Mortadella e Pistacchi";
        $Dish->description = "Pizza con pomodoro, mozzarella, mortadella e pistacchi di bronte";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/mortadella-e-pistacchi.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Bresaola e Rucola";
        $Dish->description = "Pizza con pomodoro, mozzarella, bresaola e rucola";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bresaola-e-rucola.webp";
        $Dish->price = 6.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Gamberetti e Zucchine";
        $Dish->description = "Pizza con pomodoro, mozzarella, gamberetti e zucchine";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/gamberetti-e-zucchine.webp";
        $Dish->price = 8;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Bufala e Pesto";
        $Dish->description = "Pizza con pomodoro, mozzarella di bufala e pesto alla genovese";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pesto.webp";
        $Dish->price = 8.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Diavola con Olive";
        $Dish->description = "Pizza con pomodoro, mozzarella salame piccante e olive nere";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/diavola-e-olive.webp";
        $Dish->price = 6.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Cotto e Funghi";
        $Dish->description = "Pizza con pomodoro, mozzarella, cotto e funghi";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/cotto-e-funghi.webp";
        $Dish->price = 7.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Bufala e Pomodorini";
        $Dish->description = "Pizza con pomodoro, mozzarella di bufala e pomodorini";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/bufala-e-pomodorini.webp";
        $Dish->price = 8.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 1;
        $Dish->name = "Pizza Salsiccia e Peperoni";
        $Dish->description = "Pizza con pomodoro, mozzarella, salsiccia e peperoni";
        $Dish->image = "https://raw.githubusercontent.com/GiuseppeDeRosa1992/immaginiDeliveboo-ristoranti-e-piatti/32bc242330f8b4a713b314dea1ca8803d82a5153/IMG/Pizza%20Napoli/salsiccia-e-peperoni.webp";
        $Dish->price = 9.50;
        $Dish->visible = true;
        $Dish->save();

        /**********************************************************  MESSICANO  **************************************************/

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos al Pastor";
        $Dish->description = "Tacos con carne di pecora, avocado, peperoni";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos de Carnitas";
        $Dish->description = "Tacos con carne di mucca, centriolini, peperoncino, coriandolo";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos de Pollo";
        $Dish->description = "Tacos con carne di pollo, coriandolo, formaggio";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos de Pescado";
        $Dish->description = "Tacos con polpo, jalapeno, pomodoro";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Quesadilla con Queso";
        $Dish->description = "Carne di mucca con formaggio fuso";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos de Chorizo";
        $Dish->description = "Tacos con carne di mucca, centriolini, peperoncino";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Tacos de Barbacoa";
        $Dish->description = "Tacos con carne di mucca, coriandolo, cheddar";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Enchiladas de Pollo";
        $Dish->description = "Carne di pollo con cheddar";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Burrito con Carne Asada";
        $Dish->description = "Burrito con carne asada, insalata, salsa speciale";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Burrito con Pollo";
        $Dish->description = "Burrito con carne di pollo, coriandolo, peperoni, peperoncino";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Burrito Vegetariano";
        $Dish->description = "Tacos con verdure, lattuga, pomodoro, cipolla, coriandolo, salsa formaggio";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Burrito con Gamberi";
        $Dish->description = "Burrito con gamberi, pomodoro, peperone, maionese";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Quesadilla con Chorizo";
        $Dish->description = "Piadina con formaggio, salamino, peperoni";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Quesadilla con funghi";
        $Dish->description = "Piadina con fomrmaggio, funghi";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.5;
        $Dish->visible = true;
        $Dish->save();



        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Nachos con formaggio fuso";
        $Dish->description = "Nachos con formaggio fuso sopra";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Nachos con Jalapenos";
        $Dish->description = "Nachos con Jalapenos sopra";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 2;
        $Dish->name = "Nachos con Guacamole";
        $Dish->description = "Nachos con Guacamole sopra";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.5;
        $Dish->visible = true;
        $Dish->save();


        /***********************************************  SUSHI  *************************************************/

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Salmone";
        $Dish->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.30;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Tonno";
        $Dish->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.50;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Gambero";
        $Dish->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.60;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi Misto";
        $Dish->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.40;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Hosamaki al Salmone";
        $Dish->description = "Riso e salmone avvolti in alga nori.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.30;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Salmone";
        $Dish->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.20;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Tonno";
        $Dish->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.40;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Branzino";
        $Dish->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.60;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi Misto";
        $Dish->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.20;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Hosomaki al Cetriolo";
        $Dish->description = " Rotolo di riso e cetriolo croccante, avvolto in alga nori.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.30;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Salmone";
        $Dish->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.60;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Tonno";
        $Dish->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.60;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Polpo";
        $Dish->description = " Fettina di polpo tenero su un letto di riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.60;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi di Salmone";
        $Dish->description = "Fettine di salmone crudo, fresche e succulente.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.80;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Hosomaki al Salmone";
        $Dish->description = "Riso e salmone avvolti in alga nori.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.20;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Salmone";
        $Dish->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 3.90;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Tonno";
        $Dish->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.90;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Gambero";
        $Dish->description = "Gambero cotto e dolce, servito su un letto di riso.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.20;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi di Salmone";
        $Dish->description = "Fettine di salmone crudo, fresche e succulente.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.40;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi di Tonno";
        $Dish->description = "Tonno crudo tagliato con precisione, ricco di sapore.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 6.10;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Salmone";
        $Dish->description = "Morbida fetta di salmone fresco su riso compatto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.20;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Tonno";
        $Dish->description = "Tonno crudo di alta qualità su una base di riso leggermente pressato.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.40;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Nigiri al Branzino";
        $Dish->description = "Filetto di branzino delicato, adagiato su riso sushi.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.80;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi di Tonno";
        $Dish->description = "Tonno crudo tagliato con precisione, ricco di sapore.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.30;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 3;
        $Dish->name = "Sashimi Misto";
        $Dish->description = "Selezione di pesce crudo fresco, tagliato sottilmente.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.80;
        $Dish->visible = true;
        $Dish->save();

        /*************************************************************  CINESE  ***********************************************/

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Ma Po Tofu";
        $Dish->description = "Tofu piccante del Sichuan con carne macinata e pepe di Sichuan.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 9.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Jiaozi ";
        $Dish->description = "Ravioli ripieni di carne o verdure, spesso cotti al vapore o fritti.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 9.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Peking Duck";
        $Dish->description = "Anatra arrosto servita con crepes sottili, cipollotto e salsa hoisin.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 9.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Chow Mein";
        $Dish->description = "Noodles saltati con carne, verdure e salsa di soia.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 9.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Hot Pot ";
        $Dish->description = "Brodo caldo in cui si cuociono carne, verdure e tofu direttamente a tavola.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 9.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Kung Pao Chicken ";
        $Dish->description = "Pollo saltato con arachidi, peperoncino e verdure.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 7.8;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Xiao Long Bao ";
        $Dish->description = "Ravioli al vapore ripieni di carne e brodo.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Sweet and Sour Pork ";
        $Dish->description = "Maiale fritto in salsa agrodolce.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Wonton Soup";
        $Dish->description = "Zuppa leggera con wonton ripieni di carne o gamberi.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Zongzi";
        $Dish->description = "Riso glutinoso avvolto in foglie di bambù, ripieno di carne o fagioli.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Mapo Eggplant";
        $Dish->description = " Melanzane saltate con carne macinata in salsa piccante.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Sichuan Hot and Sour Soup";
        $Dish->description = "Zuppa piccante e agrodolce con tofu, funghi e bambù.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 8.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Char Siu";
        $Dish->description = " Maiale caramellato alla griglia con salsa dolce.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 4.5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Dim Sum";
        $Dish->description = "Piccoli bocconi serviti a vapore o fritti, come involtini primavera e baozi.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Lo Mai Gai";
        $Dish->description = "Riso glutinoso al vapore con pollo e funghi, avvolto in foglie di loto.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5;
        $Dish->visible = true;
        $Dish->save();


        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Moo Shu Pork ";
        $Dish->description = "Carne di maiale saltata con uova e verdure, servita con pancake sottili.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Lion’s Head Meatballs";
        $Dish->description = "Grandi polpette di maiale cotte in un brodo leggero.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Scallion Pancakes  ";
        $Dish->description = "Pancake croccanti con cipollotto all'interno.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Beef Chow Fun ";
        $Dish->description = " Tagliatelle di riso saltate con manzo e verdure.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Red-Braised Pork ";
        $Dish->description = "Maiale brasato in salsa di soia dolce e vino di riso.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Dan Dan Noodles";
        $Dish->description = "Noodles sottili con carne macinata piccante, verdure e salsa di arachidi.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Tea Eggs";
        $Dish->description = " Uova sode cotte lentamente in tè e spezie.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Fish-Fragrant Shredded Pork";
        $Dish->description = " Maiale sminuzzato saltato in salsa dolce e piccante con aglio e zenzero.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Egg Fried Rice";
        $Dish->description = " Riso fritto con uova, verdure e salsa di soia.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 5.0;
        $Dish->visible = true;
        $Dish->save();

        $Dish = new Dish();
        $Dish->restaurant_id = 4;
        $Dish->name = "Twice-Cooked Pork";
        $Dish->description = " Maiale cotto due volte, prima bollito e poi saltato con verdure e peperoncino.";
        $Dish->image = "https://picsum.photos/200/300";
        $Dish->price = 7.0;
        $Dish->visible = true;
        $Dish->save();
    }
}
