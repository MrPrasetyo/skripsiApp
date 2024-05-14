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
            ->where('pengajuan.status', 'pending') // Tambahkan kondisi ini
            ->get();
        
        return view('layouts.listpengajuan', ['data' => $data]);
    }
    
    

    public  function submitDataPengajuan(Request $request){
        $user_id = auth()->user()->id;
        $dataAjukan = [
            'user_id' => $user_id,
            'kendaraan_id' => $request->input('kendaraan_id'),
            'status' => 'pending',
        ];

        Pengajuan::create($dataAjukan);
        return redirect()->route('dashboard')->with('success', 'Data berhasil disubmit');

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
