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
            $table->timestamps();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('orario_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->string('orario_arrivo', 50);
            $table->char('codice_treno', 6);
            $table->char('numero_carrozze', 2);
            $table->char('in_orario', 2);
            $table->boolean('cancellato');
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
