<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('cognome', 20);
            $table->string('citta', 50);
            $table->string('indirizzo', 100);
            $table->integer('n_regalo');
            $table->string('code_spedizione', 20);
            $table->boolean('camino');
            $table->boolean('status');
            $table->text('desc_regalo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presents');
    }
};