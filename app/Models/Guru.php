<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guru extends Authenticatable
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
        'email',
        'username',
        'nip',
        'id_walikelas',
        'role',
        'password',
    ];
    protected $table = 'guru';

    protected $guard = 'guru';
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
    protected $casts = [];

    public function GetRole()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    public function WaliKelas()
    {
        return $this->hasOne(Kelas::class, 'id_walikelas');
    }
}
