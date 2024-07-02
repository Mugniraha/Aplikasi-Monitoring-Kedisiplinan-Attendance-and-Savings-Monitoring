<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'tabungan';

    // Primary key dari tabel
    protected $primaryKey = 'id_tabungan';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'id_siswa',
        'id_admin',
        'nominal',
        'tanggal',
    ];

    public function profile_siswa()
    {
        return $this->belongsTo(Profile_siswa::class, 'id_siswa', 'id_siswa');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
