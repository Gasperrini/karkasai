<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrisijungimaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisijungimai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vartotojo_vardas', 40);
            $table->string('slaptazodis', 40);
            $table->unsignedInteger('fk_Darbuotojas2')->unique();
            $table->index(["fk_Darbuotojas2"], 'fk_darbuotojai_id2');


            $table->foreign('fk_Darbuotojas2', 'fk_darbuotojai_id2')
                ->references('id')->on('darbuotojai')
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
        Schema::dropIfExists('prisijungimai');
    }
}
