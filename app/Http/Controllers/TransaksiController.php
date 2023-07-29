<?php

namespace App\Http\Controllers;
use App\Models\Nasabah;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::all();
        $transaksi = Transaksi::with('nasabah', 'jenis_sampah')
        ->orderBy('tanggal_transaksi', 'desc') // Menampilkan Data Transaksi Terbaru
        ->get();
        return view('transaksi', compact('nasabah', 'transaksi'));
    }
}
