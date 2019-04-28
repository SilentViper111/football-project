<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stadioni', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->string('kraj');
            $table->integer('st_sedezev');
            $table->integer('id_drzave');
            $table->integer('id_ekipe');
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
        Schema::dropIfExists('stadioni');
    }
}
