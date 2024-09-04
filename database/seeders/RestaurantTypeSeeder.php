<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurant_type')->insert([
            ['type_id' => 1, 'restaurant_id' => 1,],
            ['type_id' => 5, 'restaurant_id' => 1,],
            ['type_id' => 7, 'restaurant_id' => 1,],
            ['type_id' => 3, 'restaurant_id' => 2,],
            ['type_id' => 7, 'restaurant_id' => 2,],
            ['type_id' => 2, 'restaurant_id' => 3,],
            ['type_id' => 4, 'restaurant_id' => 3,],
            ['type_id' => 7, 'restaurant_id' => 3,],
            ['type_id' => 2, 'restaurant_id' => 4,],
            ['type_id' => 4, 'restaurant_id' => 4,],
            ['type_id' => 7, 'restaurant_id' => 4,]
        ]);
    }
}
