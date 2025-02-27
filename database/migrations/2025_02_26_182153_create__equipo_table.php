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
        Schema::create('_equipo', function (Blueprint $table) {
            $table->id();
            $table->integer('entrenador_id')->unique();
            $table->string('nombre', 20)->unique();
            $table->string('categoria', 15);
            $table->integer('cantidad_deportistas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_equipo');
    }
};
