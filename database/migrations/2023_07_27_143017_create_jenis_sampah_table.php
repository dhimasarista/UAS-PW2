<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('jenis_sampah', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->integer('harga_per_kg');
            $table->timestamps();
        });

        // Data awal untuk di-insert ke dalam tabel jenis_sampah
        $data = [
            ['KORAN', 2000],
            ['BUKU', 1500],
            ['KARDUS', 4000],
            ['BOTOL_MINERAL', 2000],
            ['GELAS_WARNA', 3000],
            ['GELAS_MINERAL', 4000],
            ['BESI', 5000],
            ['KERTAS_HVS', 3000],
            ['KABEL', 8000],
            ['BATERAI', 7500],
            ['KAIN', 4000],
            ['BOTOL KACA', 4000],
            ['KULIT', 5000],
            ['CD/DVD Bekas', 6000],
            ['PLASTIK_WARP', 2000],
            ['KAWAT_BEKAS', 6500],
            ['ALUMINIUM_BEKAS', 9000],
        ];

        // Insert data awal ke dalam tabel jenis_sampah
        foreach ($data as $barang) {
            DB::table('jenis_sampah')->insert([
                'nama' => $barang[0],
                'harga_per_kg' => $barang[1],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void{
        Schema::dropIfExists('jenis_sampah');
    }
};
