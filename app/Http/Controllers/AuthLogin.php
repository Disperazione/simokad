<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $remember = $request->remember == 'on' ? true : false;
        $username = $request->username; //the input field has name='username' in form
        $password = $request->password;

        if (Auth::guard('siswa')->attempt(array('nipd' => $username, 'password' => $password), $remember)) {
            $request->session()->regenerate();
            return redirect()->route('siswa.dashboard');
        } else if (Auth::guard('admin')->attempt(array('username' => $username, 'password' => $password), $remember)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else if (Auth::guard('guru')->attempt(array('username' => $username, 'password' => $password), $remember) || $request->validate(['username' => 'email:rfc,dns']) && Auth::guard('guru')->attempt(array('email' => $username, 'password' => $password), $remember)) {
            //guru sent their email or username
            $request->session()->regenerate();
            return redirect()->route('guru.dashboard');
        }
        return back()->withInput($request->only('username'));
    }
}
