<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make', function (Blueprint $table) {
            $table->increments('idmake');
            $table->string('name');
            $table->integer('make_model_idmake_model')->unsigned();
            $table->index('make_model_idmake_model');
            $table->foreign('make_model_idmake_model')
                ->references('idmake_model')->on('make_model');
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
        Schema::dropIfExists('make');
    }
}
