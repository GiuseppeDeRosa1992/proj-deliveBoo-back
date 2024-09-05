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
        $hacker->email = "tihofregato@gmail.com";
        $hacker->password = "ciao1234";
        $hacker->save();

        $franco = new User();
        $franco->email = "ciao@gmail.com";
        $franco->password = "ciao1234";
        $franco->save();

        $giancarlo = new User();
        $giancarlo->email = "bella@gmail.com";
        $giancarlo->password = "ciao1234";
        $giancarlo->save();

        $paolo = new User();
        $paolo->email = "carissimo@gmail.com";
        $paolo->password = "ciao1234";
        $paolo->save();

        $lorenzo = new User();
        $lorenzo->email = "addio@gmail.com";
        $lorenzo->password = "ciao1234";
        $lorenzo->save();

        $giorgio = new User();
        $giorgio->email = "giorgio@gmail.com";
        $giorgio->password = "ciao1234";
        $giorgio->save();

        $sid = new User();
        $sid->email = "sid@gmail.com";
        $sid->password = "ciao1234";
        $sid->save();

        $andrea = new User();
        $andrea->email = "andrea@gmail.com";
        $andrea->password = "ciao1234";
        $andrea->save();

        $admin = new User();
        $admin->email = "admin@gmail.com";
        $admin->password = "ciao1234";
        $admin->save();

        $giuseppe = new User();
        $giuseppe->email = "giuseppe@gmail.com";
        $giuseppe->password = "ciao1234";
        $giuseppe->save();

        $francesco = new User();
        $francesco->email = "francesco@gmail.com";
        $francesco->password = "ciao1234";
        $francesco->save();

        $enzo = new User();
        $enzo->email = "enzo@gmail.com";
        $enzo->password = "ciao1234";
        $enzo->save();
    }
}
