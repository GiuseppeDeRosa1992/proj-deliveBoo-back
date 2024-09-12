<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Francesco";
        $Order->email_client = "francesco@gmail.com";
        $Order->number_phone = "3331234789";
        $Order->address_client = "Via Gramsci 76";
        $Order->created_at = "2023-07-11 11:20:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            1 => ['name_dish' => 'Pizza Margherita', 'price_dish' => 5.00, 'quantity' => 2],
            3 => ['name_dish' => 'Diavola', 'price_dish' => 6.50, 'quantity' => 1],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Giovanni";
        $Order->email_client = "giovanni@gmail.com";
        $Order->number_phone = "3331221445";
        $Order->address_client = "Via Rossi 33";
        $Order->created_at = "2023-08-15 13:20:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            1 => ['name_dish' => 'Pizza Margherita', 'price_dish' => 5.00, 'quantity' => 4],
            2 => ['name_dish' => 'Napoli', 'price_dish' => 6.00, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Luca";
        $Order->email_client = "luca@hotmail.com";
        $Order->number_phone = "3423580974";
        $Order->address_client = "Via Risorgimento 7";
        $Order->created_at = "2023-09-01 20:20:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            4 => ['name_dish' => 'Quattro Stagioni', 'price_dish' => 7.50, 'quantity' => 1],
            6 => ['name_dish' => 'Pizza Tonno e Cipolla', 'price_dish' => 7.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Marco";
        $Order->email_client = "marcomm@libero.it";
        $Order->number_phone = "3427733123";
        $Order->address_client = "Via Risorgimento 7";
        $Order->created_at = "2023-09-04 19:10:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            12 => ['name_dish' => 'Pizza Mortadella e Pistacchi', 'price_dish' => 7.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Giuseppe";
        $Order->email_client = "giugiu@gmail.com";
        $Order->number_phone = "3412579216";
        $Order->address_client = "Via Pescara 130";
        $Order->created_at = "2023-10-11 12:10:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            11 => ['name_dish' => 'Pancetta e Scamorza', 'price_dish' => 7.50, 'quantity' => 2],
            15 => ['name_dish' => 'Bufala e Pesto', 'price_dish' => 8.50, 'quantity' => 3],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Khalil";
        $Order->email_client = "sidane@gmail.com";
        $Order->number_phone = "3287980121";
        $Order->address_client = "Via Roma 250";
        $Order->created_at = "2023-10-15 14:10:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            5 => ['name_dish' => 'Capricciosa', 'price_dish' => 7.50, 'quantity' => 1],
            7 => ['name_dish' => 'Quattro Formaggi', 'price_dish' => 8.50, 'quantity' => 1],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Lorenzo";
        $Order->email_client = "ldad@gmail.com";
        $Order->number_phone = "3287990121";
        $Order->address_client = "Via Padova 12 ";
        $Order->created_at = "2023-11-10 12:15:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            10 => ['name_dish' => 'Capricciosa', 'price_dish' => 6.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Andrea";
        $Order->email_client = "andy@gmail.com";
        $Order->number_phone = "3287980121";
        $Order->address_client = "Via Genova 1";
        $Order->created_at = "2024-01-11 20:30:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            7 => ['name_dish' => 'Quattro Formaggi', 'price_dish' => 8.50, 'quantity' => 1],
            10 => ['name_dish' => 'Capricciosa', 'price_dish' => 6.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Francesco";
        $Order->email_client = "franco@gmail.com";
        $Order->number_phone = "3256790765";
        $Order->address_client = "Via Bari 32";
        $Order->created_at = "2024-01-18 19:20:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            1 => ['name_dish' => 'Margherita', 'price_dish' => 5.00, 'quantity' => 4],
            6 => ['name_dish' => 'Pizza Tonno e Cipolla', 'price_dish' => 7.50, 'quantity' => 1],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Francesco";
        $Order->email_client = "franco@gmail.com";
        $Order->number_phone = "3256790765";
        $Order->address_client = "Via Bari 32";
        $Order->created_at = "2024-03-12 20:12:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            1 => ['name_dish' => 'Margherita', 'price_dish' => 5.00, 'quantity' => 7],
            6 => ['name_dish' => 'Pizza Tonno e Cipolla', 'price_dish' => 7.50, 'quantity' => 1],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Andrea";
        $Order->email_client = "andy@gmail.com";
        $Order->number_phone = "3287980121";
        $Order->address_client = "Via Genova 1";
        $Order->created_at = "2024-03-22 13:14:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            7 => ['name_dish' => 'Quattro Formaggi', 'price_dish' => 8.50, 'quantity' => 1],
            10 => ['name_dish' => 'Capricciosa', 'price_dish' => 6.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Lorenzo";
        $Order->email_client = "ldad@gmail.com";
        $Order->number_phone = "3287990121";
        $Order->address_client = "Via Padova 12 ";
        $Order->created_at = "2024-04-18 19:25:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            10 => ['name_dish' => 'Capricciosa', 'price_dish' => 6.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Giuseppe";
        $Order->email_client = "giugiu@gmail.com";
        $Order->number_phone = "3412579216";
        $Order->address_client = "Via Pescara 130";
        $Order->created_at = "2023-05-01 20:18:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            11 => ['name_dish' => 'Pancetta e Scamorza', 'price_dish' => 7.50, 'quantity' => 1],
            15 => ['name_dish' => 'Bufala e Pesto', 'price_dish' => 8.50, 'quantity' => 3],
            17 => ['name_dish' => 'Pizza Cotto e Funghi', 'price_dish' => 7.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();

        $Order = new Order();
        $Order->restaurant_id = 1;
        $Order->name_client = "Marco";
        $Order->email_client = "marcomm@libero.it";
        $Order->number_phone = "3427733123";
        $Order->address_client = "Via Risorgimento 7";
        $Order->created_at = "2024-09-04 19:10:10";
        $Order->updated_at = now();
        $Order->save();
        $Order->dishes()->attach([
            7 => ['name_dish' => 'Quattro Formaggi', 'price_dish' => 8.50, 'quantity' => 1],
            10 => ['name_dish' => 'Capricciosa', 'price_dish' => 6.50, 'quantity' => 2],
        ]);
        $Order->total = $Order->calculateTotal();
        $Order->save();




    }
}
