<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('dish_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete(); //CASCADEONDELETE MI SERVE PER CANCELLARE IL PROGETTO SENNO CON IL CONSTRAINED MI DA ERRORE;
            $table->foreignId('dish_id')->constrained()->cascadeOnDelete(); //CASCADEONDELETE MI SERVE PER CANCELLARE IL PROGETTO SENNO CON IL CONSTRAINED MI DA ERRORE;
            $table->string('name_dish');
            $table->decimal('price_dish', 5, 2);
            $table->tinyInteger('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_order');
    }
};
