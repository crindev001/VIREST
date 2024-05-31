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
            $table->unsignedBigInteger('id_tipo_establecimiento');
            $table->unsignedBigInteger('id_estado');
            $table->string('nombre', 80);
            $table->text('descripcion')->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('direccion', 255);
            $table->string('url', 255)->nullable();
            $table->foreign('id_tipo_establecimiento')->references('id')->on('tipo_establecimientos');
            $table->foreign('id_estado')->references('id')->on('tipo_estados');
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
