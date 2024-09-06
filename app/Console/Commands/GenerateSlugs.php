<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use App\Models\Dish;

class GenerateSlugs extends Command
{
    // Nome e descrizione del comando
    protected $signature = 'generate:slugs';
    protected $description = 'Genera slug per i post esistenti nel database';

    public function construct()
    {
        parent::construct();
    }

    public function handle()
    {
        // Recupera tutti i ristoranti senza slug
        $restaurants = Restaurant::whereNull('slug')->get();

        // Recupera tutti i piatti senza slug
        $dishes = Dish::whereNull('slug')->get();

        foreach ($restaurants as $restaurant) {
            // Genera lo slug basato sul titolo
            $restaurant->slug = Str::slug($restaurant->name);
            $restaurant->save();

            $this->info("Slug generato per il post: {$restaurant->name}");
        }

        foreach ($dishes as $dish) {
            // Genera lo slug basato sul nome
            $dish->slug = Str::slug($dish->name);
            $dish->save();

            $this->info("Slug generato per il post: {$dish->name}");
        }

        $this->info('Slugs generati con successo per tutti i post.');
    }
}
