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
        Schema::create('cartas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_establecimiento');
            $table->unsignedBigInteger('id_plato');
            $table->decimal('precio', 10, 2);
            $table->foreign('id_establecimiento')->references('id')->on('establecimientos')->onDelete('cascade');
            $table->foreign('id_plato')->references('id')->on('platos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas');
    }
};
