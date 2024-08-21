<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengajuanController extends Controller
{

    public function listPengajuan()
    {
        $user_id = auth()->user()->id;
        $data = DB::table('pengajuan')
            ->join('users', 'pengajuan.user_id', '=', 'users.id')
            ->join('kendaraan', 'pengajuan.kendaraan_id', '=', 'kendaraan.id')
            ->select('pengajuan.*', 'users.name', 'kendaraan.nomor_plat', 'kendaraan.merk', 'kendaraan.type', 'kendaraan.tahun')
            ->where('pengajuan.user_id', $user_id)
            // ->where('pengajuan.status', 'pending') // Tambahkan kondisi ini
            ->get();
        
        return view('layouts.listpengajuan', ['data' => $data]);
    }
    
    

    public function submitDataPengajuan(Request $request)
{
    $user_id = auth()->user()->id;
    $idkendaraan = $request->input('idaja');
    $berangkat_tanggal = $request->input('berangkat_tanggal');
    $tujuan = $request->input('tujuan');
    $fotostnk = $request->input('fotostnk');
    $fotobpkb = $request->input('fotobpkb');
    $fotoktp = $request->input('fotoktp');

    // Check if there is a pending pengajuan for the given kendaraan_id
    $existingPengajuan = Pengajuan::where('kendaraan_id', $idkendaraan)
                                  ->where('status', 'pending')
                                  ->first();

    if ($existingPengajuan) {
        return redirect()->route('dashboard')->with('error', 'Kendaraan ID sudah ada dengan status pending. Data tidak bisa disubmit.');
    }

    $dataAjukan = [
        'user_id' => $user_id,
        'kendaraan_id' => $idkendaraan,
        'status' => 'pending',
        'tujuan' => $tujuan,
        'berangkat_tanggal' => $berangkat_tanggal,
        'fotostnk' => $fotostnk,
        'fotobpkb' => $fotobpkb,
        'fotoktp' => $fotoktp,
    ];

    Pengajuan::create($dataAjukan);

    return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
}


    public function batalkanPengajuan(Request $request)
    {
        $id = $request->input('pengajuanId');
    
        // Hapus data
        DB::table('pengajuan')->where('id', $id)->delete();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->route('pengajuan')->with('success', 'Data berhasil dihapus');
    }
}
