<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('moneda_id')->unsigned()->nullable();
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('tipo_id')->unsigned()->nullable();
            $table->integer('categoria_id')->unsigned()->nullable();
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('url_video')->nullable();
            $table->decimal('precio_valor', 11, 2)->default(0);
            $table->string('uri')->unique()->nullable();

            $table->foreign('moneda_id')->references('id')->on('monedas');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->timestamps();
            $table->softDeletes();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propiedades', function (Blueprint $table) {
            //
        });
    }
}
