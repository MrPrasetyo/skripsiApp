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

    public function getDataOnly(Request $request)
    {
        $id = $request->input('id');
        $q = "SELECT * FROM kendaraan WHERE id = $id";
        $data = DB::select($q);
        $dataEdit = $data[0];
        return response()->json($dataEdit);
    }

    public function updateData(Request $request)
    {
        $id = $request->input('idkendaraan');
        $user_id = auth()->user()->id;
        $data = [
            'id' => $id,
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
        // dd($data);
        // Update data
        // DB::table('kendaraan')->where('id', $id)->update($data);
        // dd($id);
        Kendaraan::where('id', $id)->update($data);

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

        // Mendapatkan file fotoSTNK
        if ($request->hasFile('fotoSTNK')) {
            $fotoSTNK = $request->file('fotoSTNK');
            $fotoSTNKName = time() . '_' . $fotoSTNK->getClientOriginalName(); // Menambahkan timestamp
            $fotoSTNK->move(public_path('uploads'), $fotoSTNKName); // Menyimpan file ke public/uploads
        } else {
            return redirect()->back()->with('error', 'File fotoSTNK tidak ditemukan.');
        }


        // Mendapatkan file fotoBPKB
        if ($request->hasFile('fotoBPKB')) {
            $fotoBPKB = $request->file('fotoBPKB');
            $fotoBPKBName = time() . '_' . $fotoBPKB->getClientOriginalName();
            $fotoBPKB->move(public_path('uploads'), $fotoBPKBName); // Menyimpan file ke public/uploads
        } else {
            return redirect()->back()->with('error', 'File fotoBPKB tidak ditemukan.');
        }

        // Mendapatkan file fotoKTP
        if ($request->hasFile('fotoKTP')) {
            $fotoKTP = $request->file('fotoKTP');
            $fotoKTPName = time() . '_' . $fotoKTP->getClientOriginalName();
            $fotoKTP->move(public_path('uploads'), $fotoKTPName); // Menyimpan file ke public/uploads
        } else {
            return redirect()->back()->with('error', 'File fotoKTP tidak ditemukan.');
        }

        // Simpan nama file ke database atau proses lainnya sesuai kebutuhan Anda
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
            'fotostnk' => $fotoSTNKName,
            'fotobpkb' => $fotoBPKBName,
            'fotoktp' => $fotoKTPName,
        ];

        DB::table('kendaraan')->insert($data);

        // Tambahkan alert atau notifikasi
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
    }
}
