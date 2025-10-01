<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('nom');
            $table->string('telephone');
            $table->string('email');
            $table->string('ville');
            $table->string('adresse');
            $table->decimal('montant_total', 10, 2);
            $table->enum('moyen_paiement', ['mobile-money','carte','cash']);
            $table->enum('statut', ['en_attente','payee','livree'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
