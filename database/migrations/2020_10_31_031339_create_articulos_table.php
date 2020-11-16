<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('lote');
            $table->string('vencimiento');
            $table->string('stock')->default(0);
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('almacen_id')->nullable();
            $table->unsignedBigInteger('proveedor_id')->nullable();

            $table->foreign('categoria_id')
                ->references('id')->on('categorias')
                ->onDelete('set null');

            $table->foreign('almacen_id')
                ->references('id')->on('almacens')
                ->onDelete('set null');

            $table->foreign('proveedor_id')
                ->references('id')->on('proveedors')
                ->onDelete('set null');            

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
        Schema::dropIfExists('articulos');
    }
}
