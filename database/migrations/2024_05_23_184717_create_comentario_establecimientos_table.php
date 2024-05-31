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
        Schema::create('comentario_establecimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_comentario');
            $table->unsignedBigInteger('id_establecimiento');
            $table->foreign('id_comentario')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('id_establecimiento')->references('id')->on('establecimientos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarioestablecimiento');
    }
};
