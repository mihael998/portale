<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaleStruttureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personale_strutture', function (Blueprint $table) {
            $table->bigInteger("id_personale")->unsigned();
            $table->bigInteger("id_struttura")->unsigned();
            $table->primary(["id_personale","id_struttura"]);
            $table->foreign("id_personale")->references("id")->on("personale")->onDelete("cascade");
            $table->foreign("id_struttura")->references("id")->on("strutture")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personale_strutture');
    }
}
