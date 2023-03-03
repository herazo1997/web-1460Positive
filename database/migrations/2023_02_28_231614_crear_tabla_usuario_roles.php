<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('rol_user');
            $table->foreign('rol_id')->on('roles')->references('codigo_rol');
            $table->foreign('rol_user')->on('usuarios')->references('id_usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_roles');
    }
};
