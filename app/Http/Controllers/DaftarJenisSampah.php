<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JenisSampah;

class DaftarJenisSampah extends Controller{
    public function index(){
        $jenisSampah = JenisSampah::all(); // Fetch all jenis sampah data from the database
        return view('jenis_sampah', compact('jenisSampah'));
    }
}
