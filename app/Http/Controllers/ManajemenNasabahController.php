<?php
namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Transaksi;
use App\Models\JenisSampah;
use Illuminate\Http\Request;

class ManajemenNasabahController extends Controller{
    // Menampilkan halaman daftar nasabah beserta jenis sampah.
    public function index(){
        // Ambil data Nasabah yang sudah ada dari database (jika diperlukan)
        $nasabah = Nasabah::all();
        $jenisSampah = JenisSampah::all();

        return view('nasabah', compact('nasabah', 'jenisSampah'));
    }

    public function create(){
        return view('nasabah');
    }

    // Menyimpan data nasabah baru ke database.
    public function store(Request $request){
        // Validasi data dari form
        $request->validate([
            'nama' => 'required',
            'jenis_sampah_id' => 'required|exists:jenis_sampah,id',
            'status' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
        ]);

        // Buat Record Transaksi baru
        $transaksi = new Transaksi();
        $transaksi->tanggal_transaksi = $request->input('tanggal_transaksi');
        $transaksi->status = $request->input('status');

        // Simpan Nasabah untuk mendapatkan ID-nya
        $nasabah = new Nasabah();
        $nasabah->nama = $request->input('nama');
        $nasabah->save();

        // Hubungkan Nasabah dan Jenis Sampah dengan Transaksi
        $transaksi->nasabah()->associate($nasabah);
        $transaksi->jenis_sampah_id = $request->input('jenis_sampah_id');

        // Simpan Record Transaksi
        $transaksi->save();

        // Redirect ke halaman utama
        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan.');
    }
}
