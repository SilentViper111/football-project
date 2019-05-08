<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekipe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ime');
            $table->integer('st_tekem');
            $table->integer('st_zmag');
            $table->integer('st_porazov');
            $table->integer('zmage_porazi');
            $table->integer('dani_goli');
            $table->integer('prejeti_goli');
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
        Schema::dropIfExists('ekipe');
    }
}
