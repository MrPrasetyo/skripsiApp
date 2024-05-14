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
        $q = "SELECT * FROM pengajuan WHERE user_id = ?";
        $data = DB::select($q, [$user_id]);
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

    public function batalkanPengajuan(){
        
    }
}
