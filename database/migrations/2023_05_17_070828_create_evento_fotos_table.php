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
        Schema::create('evento_fotos', function (Blueprint $table) {
            $table->id();              
            $table->string('nombre');
            $table->string('descripcion')->nullable();   
            $table->unsignedBigInteger('categoria_id')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_fotos');
    }
};
