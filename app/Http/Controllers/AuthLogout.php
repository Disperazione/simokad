<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogout extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
        } else {
            Auth::guard('siswa')->logout();
        }
        session()->flush();
        return redirect()->route('login');
    }
}
