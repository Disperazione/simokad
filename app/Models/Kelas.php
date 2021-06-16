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
    ];

    protected $table = 'kelas';
    public function GetSiswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id')->orderBy('siswa.name', 'ASC');
    }
    public function GetGuru()
    {
        return $this->belongsTo(Guru::class, 'id_walikelas');
    }
    public function GetJurusan()
    {
        return ucwords(preg_replace('/^\s*?[a-zA-Z]+\s+|\s+\d+\s*?$/', '', $this->name));
    }
    public function GetKelas()
    {
        $kelas = preg_split('/\s/', ucwords(preg_replace('/\sdan/', '', $this->name)), -1, PREG_SPLIT_NO_EMPTY);
        $abbreviation = '';
        foreach ($kelas as $key => $word) {
            if ($key === array_key_first($kelas)) {
                $abbreviation .= $word . ' ';
            } elseif ($key === array_key_last($kelas)) {
                $abbreviation .= ' ' . $word;
            } else {
                if (count($kelas) === 3) {
                    if ($word === "Broadcast") {
                        $abbreviation .= 'BRC';
                    } else {
                        $abbreviation .= 'MM';
                    }
                } else {
                    $abbreviation .= $word[0];
                }
            }
        }
        return $abbreviation;
    }
}
