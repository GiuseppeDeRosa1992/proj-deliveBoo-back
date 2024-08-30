<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hacker = new User();
        $hacker->name = "hacker";
        $hacker->email = "tihofregato@gmail.com";
        $hacker->password = "ciao1234";
        $hacker->save();

        $franco = new User();
        $franco->name = "franco";
        $franco->email = "ciao@gmail.com";
        $franco->password = "ciao1234";
        $franco->save();

        $giancarlo = new User();
        $giancarlo->name = "giancarlo";
        $giancarlo->email = "bella@gmail.com";
        $giancarlo->password = "ciao1234";
        $giancarlo->save();

        $paolo = new User();
        $paolo->name = "paolo";
        $paolo->email = "carissimo@gmail.com";
        $paolo->password = "ciao1234";
        $paolo->save();

        $lorenzo = new User();
        $lorenzo->name = "lorenzo";
        $lorenzo->email = "addio@gmail.com";
        $lorenzo->password = "ciao1234";
        $lorenzo->save();
    }
}
