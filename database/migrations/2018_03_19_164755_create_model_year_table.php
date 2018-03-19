<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_year', function (Blueprint $table) {
            $table->increments('idmodel_year');
            $table->integer('year_idyear')->unsigned();
            $table->index('year_idyear');
            $table->foreign('year_idyear')
                ->references('idyear')->on('year');
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
        Schema::dropIfExists('model_year');

    }
}
