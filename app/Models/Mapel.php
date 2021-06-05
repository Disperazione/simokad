<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id_walikelas',
        'name',
        'slug',
    ];

    protected $table = 'kelas';

    public function GetGuru()
    {
        return $this->belongsTo(Guru::class, 'id_walikelas');
    }
}
