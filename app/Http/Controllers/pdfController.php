<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\User;
use App\Models\arsips;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class pdfController extends Controller
{
    public function generatePdf(Request $req)
    {
        $ArsipId = $req->input('id');
        
        $q = "SELECT 
                a.id AS idArsip,
                a.created_at,
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
            JOIN kendaraan c ON a.kendaraan_id = c.id
            WHERE a.id = :id";
    
        $data = DB::select($q, ['id' => $ArsipId]);
        
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }

        return view('Templates.testing', ['data' => $data[0]]);
    
        // $pdf = Pdf::loadView('Templates.testing', ['data' => $data[0]]);
        // return $pdf->download('preview.pdf'); // Use stream instead of download for inline preview
    }
    
    

}
