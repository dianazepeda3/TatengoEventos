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
        Schema::create('archivo_evento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evento_id')->onDelete('cascade');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->unsignedBigInteger('archivo_id')->onDelete('cascade');
            $table->foreign('archivo_id')->references('id')->on('archivos');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_archivo');
    }
};
