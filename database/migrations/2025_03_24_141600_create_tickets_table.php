<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->enum('statut', ['Ouvert', 'En cours', 'Résolu', 'Fermé'])->default('Ouvert');
            $table->enum('priorite', ['Faible', 'Moyenne', 'Élevée', 'Critique'])->default('Moyenne');
            $table->foreignId('user_id')->constrained(); // Lien vers la table `users`
            $table->foreignId('technicien_id')->nullable()->constrained('users'); // Technicien (optionnel)
            $table->timestamps(); // created_at + updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};