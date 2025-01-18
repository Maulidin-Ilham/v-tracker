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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('jenis_kendaraan_id');

            $table->foreign('jenis_kendaraan_id')->references('id')->on('jenis_kendaraans');

            $table->unsignedBigInteger('kepemilikan_id');

            $table->foreign('kepemilikan_id')->references('id')->on('kepemilikans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
