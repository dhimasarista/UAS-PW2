<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->foreignId('nasabah_id')->constrained('nasabah');
            $table->foreignId('jenis_sampah_id')->constrained('jenis_sampah');
            $table->double('status')->default(0.0);
            $table->timestamps();
        });

        // Data awal untuk di-insert ke dalam tabel transaksi
        $data = [];
        for ($i = 0; $i < 4; $i++) {
            $data[] = [
                'tanggal_transaksi' => now(),
                'nasabah_id' => rand(1, 4), 
                'jenis_sampah_id' => rand(1, 17),
                'status' => rand(1, 10.0),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data awal ke dalam tabel transaksi
        DB::table('transaksi')->insert($data);
    }

    public function down(): void{
        Schema::dropIfExists('transaksi');
    }
};
