<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MediosDesarrollos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medios_desarrollos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('desarrollo_id')->unsigned();
            $table->bigInteger('medio_id')->unsigned();
            $table->timestamps();

            $table->foreign('desarrollo_id')->references('id')->on('desarrollos')->onDelete('cascade');
            $table->foreign('medio_id')->references('id')->on('medios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medios_desarrollos');
    }
}
