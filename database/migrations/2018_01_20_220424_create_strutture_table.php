<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStruttureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strutture', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nome');
            $table->string('numero_telefono')->nullable();
            $table->boolean("abilitato");
            $table->string('comune');
            $table->string('cap');
            $table->string('provincia');
            $table->string('paese');
            $table->dateTime("data_registrazione");
            $table->dateTime("data_attivazione");
            $table->string('email');
            $table->integer("numero_camere");
            $table->integer("id_tipo")->unsigned();

        });
        DB::update("ALTER TABLE personale AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strutture');
    }
}