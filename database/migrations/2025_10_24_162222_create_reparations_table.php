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
        Schema::create('reparations', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId(column: 'vehicule_id')
                  ->constrained(table: 'vehicules')
                  ->onUpdate(action: 'cascade')
                  ->onDelete(action: 'cascade');


            $table->foreignId(column: 'technicien_id')->nullable()
                  ->constrained(table: 'techniciens')
                  ->onUpdate(action: 'cascade')
                  ->onDelete(action: 'set null');

            $table->date(column: 'date');
            $table->integer(column: 'duree_main_oeuvre')->nullable();
            $table->text(column: 'objet_reparation');
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
        Schema::dropIfExists('reparations');
    }
};
