<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('id_treno',15);
            $table->tinyInteger('numero_carrozze');
            $table->tinyInteger('ritardo');
            $table->boolean('canc');
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
        Schema::dropIfExists('trains_tabel');
    }
}
