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
        Schema::create('img_establecimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_establecimiento');
            $table->string('imagen', 255);
            $table->foreign('id_establecimiento')->references('id')->on('establecimientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imgestablecimiento');
    }
};
