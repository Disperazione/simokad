<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Role;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DataDashboard extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $jumlah_user = ['Admin' => Admin::all()->count(), 'Siswa' => Siswa::all()->count()];
        # kalau rolenya single di table guru
        foreach (Guru::all()->groupBy('role') as $type => $list) {
            $jumlah_user[Role::where('id', $type)->first()->name] = collect($list)->count();
        }
        # kalau rolenya multiple. bikin baru :sob:
        return view('page.dashboard', [
            'siswa' => $jumlah_user['Siswa'],
            'guru' => Guru::all()->count(),
            'kelas' => Kelas::all()->count(),
            'user'=> Arr::divide($jumlah_user),
        ]);
    }
}
