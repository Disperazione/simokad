@extends('master.master')
@section('title', 'Tambah Data Guru')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Data
                    {{ Request::routeIs(Auth::getDefaultDriver() . '.guru.create') ? 'Guru' : 'Siswa' }}</h2>
                <img class="" src="{{ asset('images/form.svg') }}" width="200" alt="Form">
                <div class="card shadow mb-4">
                    @auth('admin')
                        {{-- Form tambah data guru di Admin --}}
                        @if (Request::routeIs(Auth::getDefaultDriver() . '.guru.create'))
                            <div class="card-body">
                                <Form action="{{ route(Auth::getDefaultDriver() . '.guru.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="nip">NIP</label>
                                                <input type="text" id="nip" class="form-control" name="nip">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="name">Nama</label>
                                                <input type="text" id="name" class="form-control" name="name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simple-select2">Jabatan</label>
                                                <select class="form-control select2 text-capitalize" id="role" name="role">
                                                    <optgroup label="Jabatan">
                                                        @foreach ($jabatan as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Photo</label>
                                                <input type="file" id="simpleinput" class="form-control border-0" name='avatar'>
                                            </div>
                                        </div> <!-- /.col -->
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary float-right">
                                        <i class="fe fe-arrow-right fe-16 mr-2"></i>Simpan
                                    </button>
                                </Form>
                            </div>
                            {{-- Form tambah data siswa di Admin --}}
                        @elseif (Request::routeIs(Auth::getDefaultDriver() . '.siswa.create'))
                            <div class="card-body">
                                <Form action="{{ route(Auth::getDefaultDriver() . '.siswa.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">NIPD</label>
                                                <input type="text" id="nipd" class="form-control" name="nipd">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama</label>
                                                <input type="text" id="name" class="form-control" name="name">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simple-select2">Kelas</label>
                                                <select class="form-control select2" id="simple-select2" name="id_kelas">
                                                    <optgroup label="Kelas">
                                                        @foreach ($kelas as $kel)
                                                            <option value="{{ $kel->id }}">{{ $kel->slug }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="time-input2">Tempat</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control time-input" id="time-input2"
                                                            placeholder="" aria-describedby="button-addon2" name="tempat_lahir">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="date-input1">Tanggal Lahir</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="example-date" type="date" name="tanggal_lahir">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text" id="button-addon-date"><span
                                                                    class="fe fe-calendar fe-16"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Photo</label>
                                                <input type="file" id="simpleinput" class="form-control border-0" name='avatar'>
                                            </div>
                                        </div> <!-- /.col -->
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary float-right"><span
                                            class="fe fe-arrow-right fe-16 mr-2"></span>Simpan</button>
                                </Form>
                            </div>
                            {{-- Form edit data guru di Admin --}}
                        @elseif (Request::routeIs(Auth::getDefaultDriver() . '.guru.edit'))
                            <div class="card-body">
                                <Form action="{{ route(Auth::getDefaultDriver() . '.guru.update', ['guru' => $guru->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">NIPD</label>
                                                <input type="text" id="nip" class="form-control" name="nip"
                                                    value="{{ $guru->nip }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    value="{{ $guru->name }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email"
                                                    value="{{ $guru->email }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simple-select2">Kelas</label>
                                                <select class="form-control select2" id="simple-select2" name="role">
                                                    <optgroup label="Jabatan">
                                                        @foreach ($jabatan as $role)
                                                            <option value="{{ $role->id }}" @if ($guru->role === $role->id) selected @endif>
                                                                {{ $role->name }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Photo</label>
                                                <input type="file" id="simpleinput" class="form-control border-0" name="avatar"
                                                    value="{{ $guru->avatar }}">
                                            </div>
                                        </div> <!-- /.col -->
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary float-right"><span
                                            class="fe fe-arrow-right fe-16 mr-2"></span>Simpan</button>
                                </Form>
                            </div>
                            {{-- Form edit data siswa di Admin --}}
                        @elseif (Request::routeIs(Auth::getDefaultDriver() . '.siswa.edit'))
                            <div class="card-body">
                                <Form
                                    action="{{ route(Auth::getDefaultDriver() . '.siswa.update', ['siswa' => $siswa->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">NIPD</label>
                                                <input type="text" id="nipd" class="form-control" name="nipd"
                                                    value="{{ $siswa->nipd }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Nama</label>
                                                <input type="text" id="name" class="form-control" name="name"
                                                    value="{{ $siswa->name }}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="simple-select2">Kelas</label>
                                                <select class="form-control select2" id="simple-select2" name="id_kelas">
                                                    <optgroup label="Kelas">
                                                        @foreach ($kelas as $kel)
                                                            <option value="{{ $kel->id_kelas }}" @if ($siswa->Kelas === $siswa->id) selected @endif>
                                                                {{ $kel->slug }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="time-input2">Tempat</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control time-input" id="tempat_lahir"
                                                            placeholder="" aria-describedby="button-addon2" name="tempat_lahir"
                                                            value="{{ $siswa->tempat_lahir }}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label for="date-input1">Tanggal Lahir</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir"
                                                            value="{{ $siswa->tanggal_lahir}}">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text" id="button-addon-date"><span
                                                                    class="fe fe-calendar fe-16"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="simpleinput">Photo</label>
                                                <input type="file" id="avatar" class="form-control border-0" name='avatar'
                                                    value="{{ $siswa->avatar }}">
                                            </div>
                                        </div> <!-- /.col -->
                                    </div>
                                    <button type="submit" class="btn mb-2 btn-primary float-right"><span
                                            class="fe fe-arrow-right fe-16 mr-2"></span>Simpan</button>
                                </Form>
                            </div>
                        @endif
                    </div> <!-- / .card -->
                @endauth
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection

@push('js')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4',
            });
        });

    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap4.css') }}" />
    <style>
        .select2 {
            width: 100% !important;
        }

    </style>
@endpush
