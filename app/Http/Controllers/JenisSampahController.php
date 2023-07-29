<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JenisSampah;

class JenisSampahController extends Controller{
    public function edit($id)
    {
        // Ambil data jenis sampah berdasarkan $id
        $jenisSampah = JenisSampah::find($id);

        // Tampilkan halaman edit jenis sampah dengan data jenisSampah
        return view('jenis_sampah', compact('jenisSampah'));
    }

    public function update(Request $request, $id){
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'harga_per_kg' => 'required|numeric',
        ]);

        // Cari data jenis sampah berdasarkan $id
        $jenisSampah = JenisSampah::find($id);

        // Jika jenis sampah tidak ditemukan, kembalikan dengan pesan error
        if (!$jenisSampah) {
            return redirect()->route('daftar-jenis-sampah')->with('error', 'Data jenis sampah tidak ditemukan.');
        }

        // Update data jenis sampah dengan data dari form
        $jenisSampah->nama = $request->input('nama');
        $jenisSampah->harga_per_kg = $request->input('harga_per_kg');
        $jenisSampah->save();

        // Redirect ke halaman utama dengan pesan berhasil
        return redirect()->route('daftar-jenis-sampah')->with('success', 'Data jenis sampah berhasil diubah.');
    }
}

?>