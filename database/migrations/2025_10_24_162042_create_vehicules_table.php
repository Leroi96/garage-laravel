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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
             $table->string(column: 'immatriculation')->unique();
            $table->string(column: 'marque');
            $table->string(column: 'modele');
            $table->string(column: 'couleur')->nullable();
            $table->smallInteger(column: 'annee')->nullable();
            $table->integer(column: 'kilometrage')->nullable();
            $table->string(column: 'carrosserie')->nullable();
            $table->string(column: 'energie')->nullable(); 
            $table->string(column: 'boite')->nullable();
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
        Schema::dropIfExists('vehicules');
    }
};
