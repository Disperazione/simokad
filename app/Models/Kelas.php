<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_walikelas',
        'name',
        'slug',
    ];

    protected $table = 'kelas';
    public function getSiswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id');
    }
    public function GetGuru()
    {
        return $this->belongsTo(Guru::class, 'id_walikelas');
    }
}
