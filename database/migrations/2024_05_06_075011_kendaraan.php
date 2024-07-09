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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('nomor_plat');
            $table->string('nama_pemilik');
            $table->string('alamat_pemilik');
            $table->string('merk');
            $table->string('type');
            $table->string('jenis');
            $table->string('model');
            $table->string('warna');
            $table->string('tahun');
            $table->string('isi_silinder');
            $table->string('nomor_rangka');
            $table->string('nomor_mesin');
            $table->string('fotostnk');
            $table->string('fotobpkb');
            $table->string('fotoktp');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
