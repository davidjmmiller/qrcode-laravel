<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_has_permissions', function (Blueprint $table) {
            $table->integer('role_idrole')->unsigned();
            $table->index('role_idrole');
            $table->foreign('role_idrole')
                ->references('idrole')
                ->on('role');

            $table->integer('permissions_idpermissions')->unsigned();
            $table->index('permissions_idpermissions');
            $table->foreign('permissions_idpermissions')
                ->references('idpermissions')
                ->on('permissions');

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
        Schema::dropIfExists('role_has_permissions');
    }
}
