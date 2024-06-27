<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_siswa extends Model
{
    use HasFactory;

    protected $table = 'profile_siswa';


    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nama_siswa',
        'nisn',
        'nis',
        'tgl_lahir',
        'jenis_kelamin',
        'orangtua',
        'foto',
        'no_telpon',
        'email',
        'password',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_siswa', 'id_siswa');
    }
}
