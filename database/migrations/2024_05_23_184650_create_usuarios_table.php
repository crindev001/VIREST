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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_tipo_usuario');
            $table->unsignedBigInteger('id_estado');
            $table->string('user', 50);
            $table->string('password', 50);
            $table->string('pwd_enc', 255);
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuarios');
            $table->foreign('id_estado')->references('id')->on('tipo_estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
