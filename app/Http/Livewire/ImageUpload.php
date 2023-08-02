<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use App\Models\Terminal;
use App\Models\Ticket;
use App\Models\dataPemesanan;
// use App\Models\dataPemesanan;

class ImageUpload extends Component
{
    use WithFileUploads;
    public $image;
    public $tiket_user;
    public $data_user;

    public $nama_user;
    public $id_pemesanan;

    public function mount($tiket_user, $data_user)
    {
        $this->tiket_user = $tiket_user;
        $this->data_user = $data_user;
    }

    public function upload (Request $request) {
        $this->validate([
            'image' => 'image|max:1024' // 1mb max
        ]);

        // info('THIS FUNCTION IS SUCCEED'.$request->all());

        if($request) {

            $this->image->store('images');
        }

        $image = $this->request->file('image');
        // var_dump($request->all());
        // return back();
        // var_dump()
        // var_dump($request->all());
        // $data = $request->all();
        // $nama_penumpang = $request->id_pemesanan;
        // $data = $request->all();
        $id_pemesanan = $this->request->input('id_pemesanan');
        $nama_user = $this->request->input('nama_user');

        $data = [
            'nama_penumpang' => $nama_user,
            'image' => $image,
            'id_pemesanan' => $id_pemesanan,
            // 'nama_user' => $nama_user,
        ];

        // Image::create($data);
        // $konfirmasi = collect(DB::select("
        // INSERT INTO `konfirmasi_pembayaran`(`id`, `id_user`, `nama_penumpang`, `email`, `id_pemesanan`, `status`, `no_telpon`, `created_at`, `updated_at`) VALUES ('','$','$nama_penumpang','$','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')
        // "));
        //  $test = DB::insert('konfirmasi_pembayaran', [
        //     'nama_penumpang' => $nama_user,
        //     'image' => $image,
        //     'id_pemesanan' => $id_pemesanan,
        // ]);
        // return $test;
        // DB::table('konfirmasi_pembayaran')->insert($data);

        // $data_pemesanan = dataPemesanan::all();
        // return response()->json($request->all());
        // return $data;
        // return var_dump($request->all());
        // return view('riwayat-pemesanan', ['checkStatus' => $request->all()]);
    }

    public function store(Request $request) {

    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
