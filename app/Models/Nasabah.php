<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabah'; // Specify the correct table name 'nasabah'
    protected $fillable = [
        'nama',
    ];
}

// INSERT INTO nasabah (nama) VALUES
// ('John Doe'),
// ('Jane Smith'),
// ('Michael Johnson'),
// ('Emily Davis'),
// ('William Wilson'),
// ('Olivia Taylor'),
// ('James Brown'),
// ('Sophia Anderson'),
// ('Robert Miller'),
// ('Isabella Martinez');
