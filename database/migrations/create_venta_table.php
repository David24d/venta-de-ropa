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
        Schema::create('venta', function (Blueprint $table) {
            $table->integer('id_venta', true);
            $table->integer('ven_id_producto')->nullable()->index('ven_id_producto');
            $table->integer('ven_id_usuario')->nullable()->index('ven_id_usuario');
            $table->string('ven_estado', 20)->nullable();
            $table->string('ven_numero_seguimiento', 50)->nullable();
            $table->integer('ven_cantidad')->nullable();
            $table->timestamp('ven_fecha_venta')->useCurrentOnUpdate()->useCurrent();
            $table->decimal('ven_precio_unitario', 10, 0)->nullable();
            $table->decimal('ven_precio_total', 10, 0)->nullable();
            $table->string('ven_forma_pago', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
};
