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
        Schema::create('comentario_eventos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_comentario');
            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_comentario')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarioevento');
    }
};
