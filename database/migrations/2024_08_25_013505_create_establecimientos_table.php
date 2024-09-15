<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_establecimiento', 100)->required();
            $table->text('direccion_manzana', 100)->required();
            $table->text('direccion_calleprincipal', 100)->required();
            $table->text('direccion_numero', 100)->required();
            $table->text('direccion_transversal', 100)->required();
            $table->text('direccion_referencia', 100)->required();
            $table->string('nombre_administrador', 100)->required();
            $table->string('telefono_contacto', 10)->required();
            $table->string('email_contacto', 150)->required();
            $table->string('ubicacion', 100)->required();
            // bolean ruta
            $table->boolean('ruta', 1)->required();
            // id provincia
            $table->string('provincia_id', 100)->required();
            // $table->unsignedBigInteger('provincia_id')->required();
            // $table->foreign('provincia_id')->references('id')->on('provincias');
            // id ciudad
            $table->string('ciudad_id', 100)->required();
            // $table->unsignedBigInteger('ciudad_id')->required();
            // $table->foreign('ciudad_id')->references('id')->on('ciudades');
            // id cliente
            $table->string('cliente_id', 100)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establecimientos');
    }
};
