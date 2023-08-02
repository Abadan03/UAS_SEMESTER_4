<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use PDF;
use Throwable;

class ControlPanel extends Controller
{
    public function index()
    {
        // $data_konfirmasi = DB::table('data_pemesanan')
        // ->selectRaw('*')
        // ->get();

        // $tanggal = DB::table('jadwal AS j')
        // ->leftJoin('appointment AS a', 'j.id_jadwal', '=', 'a.jadwal')
        // ->select(
        //     'j.tanggal AS HARI',
        //     DB::raw('MIN(j.jam_mulai) AS JAM_MULAI'),
        //     DB::raw('MAX(j.jam_akhir) AS JAM_SELESAI'),
        //     DB::raw('COUNT(*) AS QUOTA_TERSEDIA'),
        //     DB::raw('COUNT(a.id_app) AS JUMLAH_LAYANAN'),
        //     DB::raw('COUNT(*) - COUNT(a.id_app) AS SISA_LAYANAN')
        // )
        // ->whereRaw('YEARWEEK(j.tanggal) = YEARWEEK(NOW())')
        // ->groupBy('j.tanggal')
        // ->get();

        // $availableQuota = DB::table('jadwal')
        // ->select('tanggal AS HARI',DB::raw('count(*) AS QUOTA_TERSEDIA'))
        // ->whereRaw('YEARWEEK(tanggal) = YEARWEEK(NOW())')
        // ->groupBy('tanggal')
        // ->get();

        $data_konfirmasi = DB::table('data_pemesanan')
        ->join('konfirmasi_pembayaran','data_pemesanan.id_pemesanan','=','konfirmasi_pembayaran.id_pemesanan')
        ->select(DB::raw("konfirmasi_pembayaran.id_pemesanan as id_pemesanan, konfirmasi_pembayaran.nama_penumpang as nama_penumpang, data_pemesanan.status as status, konfirmasi_pembayaran.image as image"))
        // ->orderBy('jadwal.id_jadwal','ASC')
        ->get();
        return view('controlpanel', [
            'data_konfirmasi' => $data_konfirmasi,
        ]);
    }

    public function confirm_order(Request $value)
    {
        DB::table('data_pemesanan')->where('id_pemesanan', $value->id_pemesanan)
        ->update([
        'status'    => 1,
        ]);
        return redirect()->to('/controlpanel');
    }

    public function cancel_order(Request $value)
    {
        DB::table('data_pemesanan')->where('id_pemesanan', $value->id_pemesanan)
        ->update([
        'status'    => 3,
        ]);
        return redirect()->to('/controlpanel');   
    }
}