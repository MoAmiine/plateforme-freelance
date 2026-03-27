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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('categorie_mission_id')->constrained()->cascadeOnDelete();

            $table->string('titre');
            $table->text('description');

            $table->decimal('budget', 10, 2)->nullable();
            $table->integer('duree')->nullable();

            $table->enum('type', ['web', 'mobile', 'desktop']);
            $table->enum('statut', ['ouverte', 'en_cours', 'terminee', 'annulee'])->default('ouverte');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
