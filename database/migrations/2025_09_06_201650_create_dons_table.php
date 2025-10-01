<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->decimal('montant', 10, 2);
            $table->text('message')->nullable();
            $table->enum('moyen', ['mtn','moov','celtiis','carte']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dons');
    }
};
