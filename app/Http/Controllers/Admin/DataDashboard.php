<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

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

        return view('admin.dashboard', [
            'siswa' => Siswa::all()->count(),
            'guru' => Guru::all()->count(),
            'kelas' => Kelas::all()->count(),
        ]);
    }
}
