<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kendaraan;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $q = "SELECT * FROM kendaraan WHERE user_id = ?";
        $data = DB::select($q, [$user_id]);
        return view('layouts.dashboard', ['data' => $data]);
    }
    public function getDataEdit(Request $request)
    {
        $id = $request->input('id');
        $q = "SELECT * FROM kendaraan WHERE id = $id";
        $data = DB::select($q);
        $dataEdit = $data[0];
        return response()->json($dataEdit);
    }

    public function updateData(string $id, Request $request)
    {
        // $id = $request->input('data-id');
        $user_id = auth()->user()->id;
        $data = [
            'user_id' => $user_id,
            'nomor_plat' => $request->input('nomor_plat'),
            'nama_pemilik' => $request->input('nama_pemilik'),
            'alamat_pemilik' => $request->input('alamat_pemilik'),
            'merk' => $request->input('merk'),
            'type' => $request->input('type'),
            'jenis' => $request->input('jenis'),
            'model' => $request->input('model'),
            'warna' => $request->input('warna'),
            'tahun' => $request->input('tahun'),
            'isi_silinder' => $request->input('isi_silinder'),
            'nomor_rangka' => $request->input('nomor_rangka'),
            'nomor_mesin' => $request->input('nomor_mesin'),
        ];
        // dd($id);
        // Update data
        // DB::table('kendaraan')->where('id', $id)->update($data);
        Kendaraan::where('id',$id)->update($data);
    
        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Data berhasil diupdate');
    }
    



    public function deleteData(Request $request)
    {
        $id = $request->input('id');
    
        // Hapus data
        DB::table('kendaraan')->where('id', $id)->delete();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');
    }

    public function addData(Request $request)
    {
        $user_id = auth()->id(); // Mengambil user_id dari user yang sedang login
        $data = [
            'user_id' => $user_id,
            'nomor_plat' => $request->input('nomor_plat'),
            'nama_pemilik' => $request->input('nama_pemilik'),
            'alamat_pemilik' => $request->input('alamat_pemilik'),
            'merk' => $request->input('merk'),
            'type' => $request->input('type'),
            'jenis' => $request->input('jenis'),
            'model' => $request->input('model'),
            'warna' => $request->input('warna'),
            'tahun' => $request->input('tahun'),
            'isi_silinder' => $request->input('isi_silinder'),
            'nomor_rangka' => $request->input('nomor_rangka'),
            'nomor_mesin' => $request->input('nomor_mesin'),
        ];
        DB::table('kendaraan')->insert($data);

        // Tambahkan alert
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
    }
}
