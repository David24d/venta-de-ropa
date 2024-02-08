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
        Schema::table('venta', function (Blueprint $table) {
            $table->foreign(['ven_id_usuario'], 'venta_ibfk_2')->references(['id_usuario'])->on('tipo_usuario');
            $table->foreign(['ven_id_producto'], 'venta_ibfk_1')->references(['id_produ'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venta', function (Blueprint $table) {
            $table->dropForeign('venta_ibfk_2');
            $table->dropForeign('venta_ibfk_1');
        });
    }
};
