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
        Schema::create('partidob', function (Blueprint $table) {
            $table->id();
            $table->integer('equipo1_id');
            $table->integer('equipo2_id');
            $table->date('fecha_enfrentamiento');
            $table->string('resultado', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidob');
    }
};
