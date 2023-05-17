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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();    
            $table->string('nombre');                      
            $table->string('nombre_cliente');  
            $table->float('cotizacion');
            $table->float('cantidad_pagada');
            $table->date('fecha_evento');
            $table->string('ubicacion');               
            $table->string('descripcion')->nullable();   
            $table->unsignedBigInteger('categoria_id')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias');   
            $table->boolean('estado')->default(0);       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
