<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_form', function (Blueprint $table) {
            $table->increments('idcontact_form');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->dateTime('date');
            $table->integer('form_type');

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
        Schema::dropIfExists('contact_form');
    }
}
