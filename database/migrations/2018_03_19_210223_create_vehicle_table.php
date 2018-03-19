<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('idvehicle');
            $table->string('plate_number');
            $table->float('price');
            $table->float('kilometers');
            $table->float('quote');
            $table->float('first_quote');

            $table_name = 'make_idmake';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idmake')
                ->on('make');

            $table_name = 'engine_idengine';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idengine')
                ->on('engine');

            $table_name = 'transmission_idtransmission';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idtransmission')
                ->on('transmission');

            $table_name = 'color_idcolor';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idcolor')
                ->on('color');

            $table_name = 'style_idstyle';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idstyle')
                ->on('style');

            $table_name = 'seller_idseller';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idseller')
                ->on('seller');

            $table_name = 'vehicle_category_idvehicle_category';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idvehicle_category')
                ->on('vehicle_category');


            $table_name = 'vehicle_size_idvehicle_size';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idvehicle_size')
                ->on('vehicle_size');

            $table_name = 'fuel_type_idfuel_type';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('idfuel_type')
                ->on('fuel_type');

            $table_name = 'driven_wheels';
            $table->integer($table_name)->unsigned();
            $table->index($table_name);
            $table->foreign($table_name)
                ->references('iddriven_wheels')
                ->on('driven_wheels');

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
        Schema::dropIfExists('vehicle');
    }
}
