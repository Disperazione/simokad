<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class TableGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.tabel', ['guru' => Guru::select('id', 'name', 'email', 'nip', 'role')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.form', ['jabatan' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nip' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'role' => 'required|numeric',
        ]);

        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate);
        }
        $username = explode('@', $request->email);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar_resize = Image::make($avatar->getRealPath());
            $avatar_resize->fit(150);

            // Check if folder not exists
            if (!File::exists(public_path('avatars/guru'))) {
                // make the folder
                File::makeDirectory(public_path('avatars/guru'), 0777, true, true);
            }
            $avatar_resize->save(public_path('avatars/guru/' . $fileName));
            Guru::create([
                'nip' => $request->nip,
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $request->avatar,
                'username' => $username[0],
                'role' => $request->role,
                'password' => Hash::make($username[0]),
            ]);
        } else {
            Guru::create([
                'nip' => $request->nip,
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => 'avatars/default.png',
                'username' => $username[0],
                'role' => $request->role,
                'password' => Hash::make($username[0]),
            ]);
        }

        return redirect()->route(Auth::getDefaultDriver() . '.guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('page.form', ['guru' => $guru, 'jabatan' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $guru->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'avatar' => $request->avatar,
        ]);
        return redirect('admin/guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->back();
    }
}
