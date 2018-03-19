<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('idmedia');
            $table->integer('type');
            $table->string('url');

            $table_name = 'vehicle_idvehicle';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idvehicle')
                ->on('vehicle');

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
        Schema::dropIfExists('media');
    }
}
