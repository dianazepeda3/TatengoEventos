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
            $table->string('nombre-cliente');  
            $table->float('cotizacion');
            $table->float('cantidad-pagada');
            $table->date('fecha-evento');
            $table->string('ubicacion');   
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
        Schema::dropIfExists('eventos');
    }
};
