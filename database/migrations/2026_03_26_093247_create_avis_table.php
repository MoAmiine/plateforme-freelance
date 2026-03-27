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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mission_id')->constrained()->cascadeOnDelete();

            $table->foreignId('auteur_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('destinataire_id')->constrained('users')->cascadeOnDelete();

            $table->integer('note');
            $table->text('commentaire')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
