@extends('master.master')
@section('title', 'Tambah Data Guru')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Data</h2>
                <div class="card shadow mb-4">
                    @auth('admin')
                        {{-- Form tambah data guru di Admin --}}
                        @if (Request::routeIs(Auth::getDefaultDriver() . '.guru.create'))
                            <div class="card-header">
                                <strong class="card-title">Data guru</strong>
                            </div>
                            <div class="card-body">
                                <Form action="{{ route(Auth::getDefaultDriver() . '.guru.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">NIP</label>
                                                <input type="text" id="nip" class="form-control" name="nip">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">NAMA</label>
                                                <input type="text" id="name" class="form-control" name="name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">EMAIL</label>
                                                <input type="email" id="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simple-select2">JABATAN</label>
                                                <select class="form-control select2" id="simple-select2">
                                                    <optgroup label="Jabatan">
                                                        <option value="1">Guru</option>
                                                        <option value="2">Kepala Program</option>
                                                        <option value="3">Wali Kelas</option>
                                                        <option value="4">Kurikulum</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Photos</label>
                                                <input type="text" id="simpleinput" class="form-control">
                                            </div>
                                        </div> <!-- /.col -->
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary float-right">
                                        <span class="fe fe-arrow-right fe-16 mr-2"></span>Simpan
                                    </button>
                                </Form>
                            </div>
                        {{-- Form tambah data siswa di Admin --}}
                        @elseif (Request::routeIs(Auth::getDefaultDriver() . '.siswa.create'))
                            <Form action="{{ route(Auth::getDefaultDriver() . '.siswa.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <label for="simpleinput">NIP</label>
                                            <input type="text" id="nip" class="form-control" name="nip">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="simpleinput">NAMA</label>
                                            <input type="text" id="name" class="form-control" name="name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="simpleinput">EMAIL</label>
                                            <input type="email" id="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="simple-select2">JABATAN</label>
                                            <select class="form-control select2" id="simple-select2">
                                                <optgroup label="Jabatan">
                                                    <option value="1">Guru</option>
                                                    <option value="2">Kepala Program</option>
                                                    <option value="3">Wali Kelas</option>
                                                    <option value="4">Kurikulum</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="simpleinput">Photos</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>
                                    </div> <!-- /.col -->
                                </div>
                                <button type="submit" class="btn mb-2 btn-primary float-right"><span
                                        class="fe fe-arrow-right fe-16 mr-2"></span>Simpan</button>
                            </Form>
                        @endif
                    </div> <!-- / .card -->
                @endauth
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
