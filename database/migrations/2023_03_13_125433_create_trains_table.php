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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->date('Data');
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->bigInteger('Codice_treno');
            $table->tinyInteger('Numero_carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};