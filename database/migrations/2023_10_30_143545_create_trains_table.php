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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 25);
            $table->string('Stazione_di_Partenza', 100);
            $table->string('Stazione_di_Arrivo', 100);
            $table->string('Orario_di_Partenza', 25);
            $table->string('Orario_di_Arrivo', 25);
            $table->string('Giorno_di_Partenza', 25);
            $table->string('Giorno_di_Arrivo', 25);
            $table->string('Codice_Treno', 15);
            $table->string('Numero_delle_Carrozze', 25);
            $table->string('In_orario', 25);
            $table->boolean('Cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
