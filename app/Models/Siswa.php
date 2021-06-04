<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'nipd',
        'id_kelas',
        'tempat_lahir',
        'tanggal_lahir',
        'password',
    ];
    protected $table = 'siswa';

    protected $guard = 'siswa';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_lahir' => 'datetime:d-m-Y',
    ];
    public function GetKelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
