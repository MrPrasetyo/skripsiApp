<?php

namespace App\Http\Controllers;

use App\Models\arsips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class adminController extends Controller
{
    public function listAdmin()
    {
        // $data = DB::table('pengajuan')
        //     ->join('users', 'pengajuan.user_id', '=', 'users.id')
        //     ->join('kendaraan', 'pengajuan.kendaraan_id', '=', 'kendaraan.id')
        //     ->select('pengajuan.*', 'users.name', 'kendaraan.id as kendaraan_id', 'kendaraan.*')
        //     ->where('pengajuan.status', 'pending') // Kondisi untuk status pending
        //     ->get();


        // dd($data);

        $q = "SELECT a.id AS idreject,
                        a.user_id,
                        a.status,
                        a.kendaraan_id,
                        b.name, 
                        c.id AS idkendaraan,
                        a.id AS idpengajuan,
                        c.user_id,
                        c.nomor_plat,
                        c.nama_pemilik,
                        c.alamat_pemilik,
                        c.merk,
                        c.type,
                        c.jenis,
                        c.model,
                        c.warna,
                        c.tahun,
                        c.isi_silinder,
                        c.nomor_rangka,
                        c.nomor_mesin,
                        a.tujuan,
                        a.berangkat_tanggal
                FROM pengajuan a
                JOIN users b ON a.user_id = b.id
                JOIN kendaraan c ON a.kendaraan_id = c.id
                WHERE a.status = 'pending';
                ";

        $data = DB::select($q);
        return view('layouts.listadmin', ['data' => $data]);
    }

    public function detailAdmin(Request $request)
    {
        $id = $request->input('id');
        $q = "SELECT  			a.id AS idpengajuan,
                                c.id AS idKendaraan,
                                c.user_id,
                                c.nomor_plat,
                                c.nama_pemilik,
                                c.alamat_pemilik,
                                c.merk,
                                c.type,
                                c.jenis,
                                c.model,
                                c.warna,
                                c.tahun,
                                c.isi_silinder,
                                c.nomor_rangka,
                                c.nomor_mesin,
                                a.tujuan,
                                a.berangkat_tanggal
                            FROM kendaraan c 
                            JOIN pengajuan a ON a.kendaraan_id = c.id
                            WHERE c.id = $id
                ";

        $data = DB::select($q);
        $dataEdit = $data[0];
        return response()->json($dataEdit);
    }

    public function rejectAdmin(Request $request)
    {
        $rejectId = $request->input('id');
        $user_id = $request->input('userId');
        $tujuan = $request->input('tujuan');
        $berangkat_tanggal = $request->input('berangkat_tanggal');
        $kendaraan_id = $request->input('kendaraanId');

        // Update status menjadi 'reject'
        DB::table('pengajuan')->where('id', $rejectId)->update([
            'status' => 'reject'
        ]);

        // Buat data di tabel Arsip
        $dataReject = [
            'user_id' => $user_id,
            'kendaraan_id' => $kendaraan_id,
            'tujuan' => $tujuan, // Menggunakan helper now() untuk waktu saat ini
            'berangkat_tanggal' => $berangkat_tanggal, // Menggunakan helper now() untuk waktu saat ini
            'status' => 'reject'
        ];
        arsips::create($dataReject);

        // Redirect ke route 'listadmin' dengan pesan sukses
        return response()->json(['message' => "Data berhasil disimpan"]);
    }


    public function AcceptAdmin(Request $request){
        $acceptId = $request->input('id');
        $user_id = $request->input('userId');
        $tujuan = $request->input('tujuan');
        $berangkat_tanggal = $request->input('berangkat_tanggal');
        $kendaraan_id = $request->input('kendaraanId');

        // Update status menjadi 'reject'
        DB::table('pengajuan')->where('id', $acceptId)->update([
            'status' => 'accept'
        ]);

        // Buat data di tabel Arsip
        $dataAccept = [
            'user_id' => $user_id,
            'kendaraan_id' => $kendaraan_id,
            'tujuan' => $tujuan, // Menggunakan helper now() untuk waktu saat ini
            'berangkat_tanggal' => $berangkat_tanggal, // Menggunakan helper now() untuk waktu saat ini
            'status' => 'accept'
        ];
        arsips::create($dataAccept);

        // Redirect ke route 'listadmin' dengan pesan sukses
        return response()->json(['message' => "Data berhasil disimpan"]);
    }
    public function arsipList()
{
    $q = "SELECT a.id AS idArsip,
                 a.status,
                 a.created_at AS tglPengajuan,
                 b.id AS idUsers,
                 c.id AS idKendaraan,
                 c.user_id,
                 c.nomor_plat,
                 c.nama_pemilik,
                 c.alamat_pemilik,
                 c.merk,
                 c.type,
                 c.jenis,
                 c.model,
                 c.warna,
                 c.tahun,
                 c.isi_silinder,
                 c.nomor_rangka,
                 c.nomor_mesin,
                 a.tujuan,
                 a.berangkat_tanggal
          FROM arsips a
          JOIN users b ON a.user_id = b.id
          JOIN kendaraan c ON a.kendaraan_id = c.id";

    $data = DB::select($q);
    return view('layouts.arsip', ['data' => $data]);
}

}
