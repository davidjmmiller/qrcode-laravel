<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_model', function (Blueprint $table) {
            $table->increments('idmake_model');
            $table->integer('model_idmodel')->unsigned();
            $table->index('model_idmodel');
            $table->foreign('model_idmodel')
                ->references('idmodel')
                ->on('model');
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
        Schema::dropIfExists('make_model');
    }
}
