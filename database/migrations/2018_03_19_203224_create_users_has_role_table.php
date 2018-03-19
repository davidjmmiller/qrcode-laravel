<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersHasRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_role', function (Blueprint $table) {
            $table->integer('users_id')->unsigned();
            $table->index('users_id');
            $table->foreign('users_id')
                ->references('id')
                ->on('users');

            $table->integer('role_idrole')->unsigned();
            $table->index('role_idrole');
            $table->foreign('role_idrole')
                ->references('idrole')
                ->on('role');


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
        Schema::dropIfExists('users_has_role');
    }
}
