<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kendaraan::factory()->create([
            'user_id' => 1, // Ubah menjadi ID user yang valid
            'nomor_plat' => 'BP 2019 AB',
            'nama_pemilik' => 'DWI PRASETYO',
            'alamat_pemilik' => 'LEGENDA HANG TUAH',
            'merk' => 'HONDA',
            'type' => 'FREED',
            'jenis' => 'MOBIL PRIBADI',
            'model' => 'MINIBUS',
            'warna' => 'PUTIH',
            'tahun' => '2014',
            'isi_silinder' => '1375 CC',
            'nomor_rangka' => 'MB000KSA0DSA',
            'nomor_mesin' => 'BM101KD01',
        ]);
    }
}
