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
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('kendaraan_id');
            $table->timestamps();
            $table->string('status');
            $table->string('tujuan');
            $table->string('berangkat_tanggal');
            $table->string('fotostnk');
            $table->string('fotobpkb');
            $table->string('fotoktp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip');
    }
};
