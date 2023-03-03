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
        Schema::create('sufragantes', function (Blueprint $table) {
            $table->id();
            $table->string('su_cedula', 15);
            $table->string('su_nombres', 100);
            $table->string('su_apellidos', 100);
            $table->string('su_celular', 20)->nullable();
            $table->string('su_email', 100)->nullable();
            $table->date('su_fecha_nacimiento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sufragantes');
    }
};
