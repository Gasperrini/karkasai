<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('el_pastas', 50);
            $table->text('klausimas');
            $table->unsignedInteger('fk_Darbuotojas')->nullable();
            $table->index(["fk_Darbuotojas"], 'fk_darbuotojai_id');


            $table->foreign('fk_Darbuotojas', 'fk_darbuotojai_id')
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
        Schema::dropIfExists('questions');
    }
}
