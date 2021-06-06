<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $table = 'kelas';

    public function GetGuru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function GetKelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
