<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi'; // Specify the correct table name 'transaksi'
    protected $fillable = [
        'tanggal_transaksi',
        'nasabah_id',
        'status',
        // Add other fillable attributes as needed for Transaksi data
    ];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class, 'nasabah_id', 'id');
    }

    public function jenis_sampah()
    {
        return $this->belongsTo(JenisSampah::class, 'jenis_sampah_id', 'id');
    }
}

// INSERT INTO transaksi (tanggal_transaksi, nasabah_id, jenis_sampah_id, status) VALUES
// ('2023-07-01', 1, 1, '4.00/kg'),
// ('2023-07-02', 2, 2, '3.50/kg'),
// ('2023-07-03', 3, 3, '4.20/kg'),
// ('2023-07-04', 4, 4, '5.10/kg'),
// ('2023-07-05', 5, 5, '4.80/kg'),
// ('2023-07-06', 6, 6, '3.90/kg'),
// ('2023-07-07', 7, 7, '4.50/kg'),
// ('2023-07-08', 8, 8, '4.70/kg'),
// ('2023-07-09', 9, 9, '3.80/kg'),
// ('2023-07-10', 10, 10, '4.60/kg');

