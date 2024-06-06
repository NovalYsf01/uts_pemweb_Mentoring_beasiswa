<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        // $datafooter = $modelfooter->get();
        return view ('frontend.first');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'nomer_telpon' => 'required',
            'jenis_beasiswa' => 'required',
            'mentor' => 'required',
        ]);
    
        // Buat data baru
        $data = new Penerima();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->nomer_telpon = $request->nomer_telpon;
        $data->jenis_beasiswa = $request->jenis_beasiswa;
        $data->mentor = $request->mentor;
        $data->save();
    
        // Redirect kembali ke halaman form dengan pesan sukses jika data berhasil disimpan
        return response()->json([
            'success' => true,
            'message' => 'beasiswa anda berhasil di daftarkan ke djony cloud!'
        ]);
    }
    
}
