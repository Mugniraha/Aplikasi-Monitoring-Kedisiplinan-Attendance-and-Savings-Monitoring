<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $primaryKey ='id_absensi';

    protected $fillable = [
        'id_absensi',
        'waktu',
        'tanggal',
        'bukti_absensi',
        'keterangan',
        'id_siswa'
    ];

    public function profile_siswa()
    {
        return $this->belongsTo(Profile_siswa::class, 'id_siswa', 'id_siswa');
    }
}
