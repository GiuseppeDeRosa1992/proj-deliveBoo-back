<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Restaurant;
use Illuminate\Support\Str;

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
        // Recupera tutti i post senza slug
        $restaurants = Restaurant::whereNull('slug')->get();

        foreach ($restaurants as $restaurant) {
            // Genera lo slug basato sul titolo
            $restaurant->slug = Str::slug($restaurant->name);
            $restaurant->save();

            $this->info("Slug generato per il post: {$restaurant->name}");
        }

        $this->info('Slugs generati con successo per tutti i post.');
    }
}
