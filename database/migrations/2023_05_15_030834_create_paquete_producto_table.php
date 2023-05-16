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
        Schema::create('paquete_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paquete_id')->onDelete('cascade');
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->unsignedBigInteger('producto_id')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos');  
            $table->integer('cantidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquete_producto');
    }
};
