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
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_comida');
            $table->unsignedBigInteger('id_tipo_cocina')->nullable();
            $table->string('descripcion', 255)->nullable();
            $table->foreign('id_tipo_comida')->references('id')->on('tipo_comidas');
            $table->foreign('id_tipo_cocina')->references('id')->on('tipo_cocinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
