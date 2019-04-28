<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tekme', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_stadiona');
            $table->integer('id_lige');
            $table->DateTime('datum_tekme');
            $table->integer('st_gledalcev');
            $table->integer('dodatek1');
            $table->integer('dodatek2');
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
        Schema::dropIfExists('tekme');
    }
}
