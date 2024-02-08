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
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id_produ', true);
            $table->string('prod_nombre', 100)->nullable();
            $table->string('prod_descripcion', 3000)->nullable();
            $table->integer('prod_stock')->nullable();
            $table->string('prod_talla', 10)->nullable();
            $table->string('prod_color', 50)->nullable();
            $table->string('prod_imagen', 260)->nullable();
            $table->decimal('prod_precio', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
