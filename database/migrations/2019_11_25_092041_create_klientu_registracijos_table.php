<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlientuRegistracijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klientu_registracijos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vardas', 40);
            $table->string('pavarde', 40);
            $table->string('el_pastas', 50);
            $table->string('tel_nr', 12);
            $table->unsignedInteger('mokytojas_id');
            $table->unsignedInteger('fk_Darbuotojas1');
            $table->index(["mokytojas_id"], 'fk_mokytojai_id');
            $table->index(["fk_Darbuotojas1"], 'fk_darbuotojai_id1');


            $table->foreign('fk_Darbuotojas1', 'fk_darbuotojai_id1')
                ->references('id')->on('darbuotojai')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreign('mokytojas_id', 'fk_mokytojai_id')
                ->references('id')->on('mokytojai')
                ->onDelete('no action')
                ->onUpdate('no action');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klientu_registracijos');
    }
}
