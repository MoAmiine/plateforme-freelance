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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mission_id')->constrained()->cascadeOnDelete();
            $table->foreignId('freelance_id')->constrained('users')->cascadeOnDelete();

            $table->text('lettre_motivation');
            $table->decimal('tarif_propose', 8, 2);

            $table->enum('statut', ['en_attente', 'acceptee', 'refusee'])->default('en_attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
