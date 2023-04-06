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
        Schema::create('piece_musicals', function (Blueprint $table) {
            $table->id();
            $table->string('audio');
            $table->string('image');
            $table->string('titre');
            $table->string('artists');
            $table->string('ecrivan');
            $table->string('langeu');
            $table->date('date_de_sortie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_musicals');
    }
};
