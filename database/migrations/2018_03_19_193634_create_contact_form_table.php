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
            $table->integer('vehicle_idvehicle')->unsigned();
            $table->index('vehicle_idvehicle');
            

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
