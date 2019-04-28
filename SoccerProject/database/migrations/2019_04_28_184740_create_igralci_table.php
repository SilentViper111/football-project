<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgralciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igralci', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime');
            $table->string('priimek');
            $table->integer('id_ekipe');
            $table->string('pozicija');
            $table->integer('starost');
            $table->integer('st_dresa');
            $table->integer('id_drzave');
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
        Schema::dropIfExists('igralci');
    }
}
