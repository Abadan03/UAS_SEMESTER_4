<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class konfirmasi_tiket extends Controller
{
    //
    public function index(Request $request)
    {
        // KODE DARI DIKA
        $file = $request->file('image');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        # Store the image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        # Save the image to the database

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diupload!');

    }
}
