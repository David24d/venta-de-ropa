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
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->string('usu_rol', 45)->nullable();
            $table->string('usu_genero', 45)->nullable();
            $table->string('usu_nombre', 45)->nullable();
            $table->string('usu_email', 50)->nullable();
            $table->string('usu_password', 255)->nullable();
            $table->integer('usu_celular')->nullable();
            $table->decimal('usu_salario', 10, 0)->nullable();
            $table->string('usu_contrato', 50)->nullable();
            $table->string('usu_ciudad', 45)->nullable();
            $table->string('usu_direccion', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_usuario');
    }
};
