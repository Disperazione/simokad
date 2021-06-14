<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Role;
use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class TableSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.tabel', ['siswa' => Siswa::select('id', 'name', 'nipd', 'id_kelas', 'tempat_lahir', 'tanggal_lahir')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.form', ['kelas' => Kelas::all()]);
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
            'nipd' => 'required|numeric',
            'name' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' =>'required|Date',
            'id_kelas' => 'required|numeric',
        ]);

        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate);
        }

        $password = Carbon::parse($request->tanggal_lahir)->format('dmY');

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar_resize = Image::make($avatar->getRealPath());
            $avatar_resize->fit(150);

            // Check if folder not exists
            if (!File::exists(public_path('avatars/siswa'))) {
                // make the folder
                File::makeDirectory(public_path('avatars/siswa'), 0777, true, true);
            }
            $avatar_resize->save(public_path('avatars/siswa/' . $fileName));
            Siswa::create([
                'nipd' => $request->nipd,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'avatar' => $request->avatar,
                'id_kelas' => $request->id_kelas,
                'password' => Hash::make($password),
            ]);
        } else {
            siswa::create([
                'nipd' => $request->nipd,
                'name' => $request->name,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'avatar' => 'avatars/default.png',
                'id_kelas' => $request->id_kelas,
                'password' => Hash::make($password),
            ]);
        }

        return redirect()->route(Auth::getDefaultDriver() . '.siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {

        return view('page.detail', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('page.form', ['siswa' => $siswa, 'kelas' => Kelas::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update([
            'nipd' => $request->nipd,
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelas' => $request->id_kelas,
            'avatar' => $request->avatar,
        ]);
        return redirect('admin/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->back();
    }
}
