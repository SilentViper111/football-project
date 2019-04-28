<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekmeEkipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tekme_ekipe', function (Blueprint $table) {
            $table->integer('id_tekme');
            $table->integer('id_ekipe');
            $table->integer('zmaga_poraz');
            $table->integer('st_golov');
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
        Schema::dropIfExists('tekme_ekipe');
    }
}
