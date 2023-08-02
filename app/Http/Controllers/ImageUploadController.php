<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        // $request->image->move(public_path('images'), $imageName);
        // $request->image->storeAs('images', $imageName);

        $request->image->move(public_path('storage/files'), $imageName);

        // echo $imageName;
        // exit;
        /* Store $imageName name in DATABASE from HERE */

        // echo $request->nama_penumpang;
        // echo $imageName;
        // echo $request->id_pemesanan;
        //         exit;
        // $data_user = collect(DB::select("
        // //     SELECT * FROM data_pemesanan WHERE id_tiket = $id
        // // "));
        // $data_konfirmasi = collect(DB::select("
        //     SELECT * FROM konfirmasi_pembayaran WHERE id_pemesanan
        // "));

        // $data_konfirmasi = DB::table('konfirmasi_pembayaran')
        // ->selectRaw('*')
        // ->where('id_pemesanan')
        // ->get();

        // if ($request->id_pemesanan == $data_konfirmasi) {
        //     return redirect()->to('home')->with('Maaf', 'bukti pembayaran sedang dikonfirmasi oleh admin');
        // }else {
        // }
        DB::table('konfirmasi_pembayaran')->insert([
            // 'id_rp' => $id_repen,
            'nama_penumpang'  	=> $request->nama_penumpang,
            'image' 	  => $imageName,
            'id_pemesanan' 	  => $request->id_pemesanan
        ]);

        DB::table('data_pemesanan')->where('id_pemesanan', $request->id_pemesanan)
        ->update([
        'status'    => 4,
        ]);

        return redirect()->route('riwayat.index')
            ->with('success','You have successfully upload image.')
            ->with('image', $imageName);

        // return back()
        //         ->with('success','You have successfully upload image.')
        //         ->with('image',$imageName)
;
    }
}
