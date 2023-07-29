<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSampah extends Model{
    public $timestamps = false;
    protected $table = 'jenis_sampah';
}

// CREATE TABLE jenis_sampah (
//     jenis_sampah_id INT AUTO_INCREMENT PRIMARY KEY,
//     nama VARCHAR(255) NOT NULL,
//     harga_per_kg INT NOT NULL
// );

// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KORAN', 2000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('BUKU', 1500);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KARDUS', 4000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('BOTOL_MINERAL', 2000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('GELAS_WARNA', 3000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('GELAS_MINERAL', 4000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('BESI', 5000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KERTAS_HVS', 3000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KABEL', 8000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('BATERAI', 7500);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KAIN', 4000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('BOTOL KACA', 4000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KULIT', 5000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('CD/DVD Bekas', 6000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('PLASTIK_WARP', 2000);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('KAWAT_BEKAS', 6500);
// INSERT INTO jenis_sampah (nama, harga_per_kg) VALUES ('ALUMINIUM_BEKAS', 9000);
