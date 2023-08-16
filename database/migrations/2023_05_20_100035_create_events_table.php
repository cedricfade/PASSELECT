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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organisateur_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
            $table->string('titre');
            $table->text('description')->nullable();
            $table->integer('prix_vip')->nullable();
            $table->integer('prix_vvip')->nullable();
            $table->integer('prix_public')->nullable();
            $table->string('date_event');
            $table->string('lieu_event');
            $table->string('heure_event');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
