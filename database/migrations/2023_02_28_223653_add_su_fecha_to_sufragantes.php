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
        Schema::table('sufragantes', function (Blueprint $table) {
            $table->date('su_fecha')->nullable()->after('su_fecha_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sufragantes', function (Blueprint $table) {
            $table->dropColumn('su_fecha');
        });
    }
};
