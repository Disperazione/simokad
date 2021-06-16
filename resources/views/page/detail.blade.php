@extends('master.master')
@section('title', 'Detail')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h3 mb-4 page-title">Detail
                @if (Request::routeIs(Auth::getDefaultDriver() . '.siswa.show'))
                    Siswa
                @elseif (Request::routeIs(Auth::getDefaultDriver() . '.guru.show'))
                    Guru
                @elseif (Request::routeIs(Auth::getDefaultDriver() . '.kelas.show'))
                    Kelas
                @endif
            </h2>
            @auth('admin')
                @if (Request::routeIs(Auth::getDefaultDriver() . '.siswa.show'))
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset($siswa->avatar) }}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">{{ $siswa->name }}</h4>
                                    <a class="small mb-4"
                                        href="{{ route(Auth::getDefaultDriver() . '.kelas.show', $siswa->id_kelas) }}">
                                        <span class="badge badge-secondary">{{ $siswa->GetKelas->GetKelas() }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4 mt-2">
                                <div class="col">
                                    <p class="small mb-0 text-muted">{{ $siswa->nipd }}</p>
                                    <p class="small mb-0 text-muted">{{ $siswa->tempat_lahir }},
                                        {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->translatedFormat('d F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center my-4">
                        <div class="col col-md-4">
                            <div class="card mb-4 shadow">
                                <div class="card-body my-n3">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-lg bg-light">
                                                <i class="fe fe-user fe-24 text-primary"></i>
                                            </span>
                                        </div> <!-- .col -->
                                        <div class="col">
                                            <a href="{{ route(Auth::getDefaultDriver() . '.siswa.edit', $siswa->id) }}">
                                                <h3 class="h5 mt-4 mb-1">Edit</h3>
                                            </a>
                                            <p class="text-muted">
                                                Edit Data NIPD, Nama Peserta Didik, Tempat Lahir/Tanggal
                                                Lahir, Jenis Kelamin.
                                            </p>
                                        </div> <!-- .col -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                                <div class="card-footer">
                                    <a href="{{ route(Auth::getDefaultDriver() . '.siswa.edit', $siswa->id) }}"
                                        class="d-flex justify-content-between text-muted">
                                        <span>Edit</span><i class="fe fe-chevron-right"></i>
                                    </a>
                                </div> <!-- .card-footer -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col col-md-4">
                            <div class="card mb-4 shadow">
                                <div class="card-body my-n3">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-lg bg-light">
                                                <i class="fe fe-file-text fe-24 text-primary"></i>
                                            </span>
                                        </div> <!-- .col -->
                                        <div class="col">
                                            <a href="">
                                                <h3 class="h5 mt-4 mb-1">Data Nilai</h3>
                                            </a>
                                            <p class="text-muted">Nilai siswa merupakan representasi hasil belajar siswa yang
                                                ditempuh dalam satu semester.</p>
                                        </div> <!-- .col -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                                <div class="card-footer">
                                    <a href="" class="d-flex justify-content-between text-muted"><span>Lihat</span><i
                                            class="fe fe-chevron-right"></i></a>
                                </div> <!-- .card-footer -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                    </div> <!-- .row-->
                    <h6 class="mb-3">Nilai Terbaru</h6>
                    <table class="table table-borderless table-striped">
                        <thead>
                            <th>Nama</th>
                            <th>Mapel</th>
                            <th>Nilai</th>
                            <th>Guru</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Waktu dan Tanggal</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">UH 1</th>
                                <td>Bahasa Inggris</td>
                                <th scope="col">100</th>
                                <td>Mrs. Beauty</td>
                                <td>1 jam</td>
                                <td>13.07 - 17 Maret 2021</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @elseif (Request::routeIs(Auth::getDefaultDriver() . '.guru.show'))
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="{{ $guru->avatar }}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">{{ $guru->name }}</h4>
                                    <a class="small mb-4" href="">
                                        <span class="badge badge-dark">{{ $guru->GetRole->name }}</span>
                                        {{-- <span class="badge badge-dark">{{ $guru->WaliKelas->slug }}</span> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="row mb-4 mt-2">
                                <div class="col">
                                    <p class="small mb-0 text-muted">{{ $guru->nip }}</p>
                                    <p class="small mb-0 text-muted">{{ $guru->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center my-4">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow">
                                <div class="card-body my-n3">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-lg bg-light">
                                                <i class="fe fe-user fe-24 text-primary"></i>
                                            </span>
                                        </div> <!-- .col -->
                                        <div class="col">
                                            <a href="{{ route(Auth::getDefaultDriver() . '.guru.edit', $guru->id) }}">
                                                <h3 class="h5 mt-4 mb-1">Edit</h3>
                                            </a>
                                            <p class="text-muted">Edit Data NIP, Nama Guru, Email,
                                                Jabatan.</p>
                                        </div> <!-- .col -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                                <div class="card-footer">
                                    <a href="{{ route(Auth::getDefaultDriver() . '.guru.edit', $guru->id) }}"
                                        class="d-flex justify-content-between text-muted"><span>Edit</span><i
                                            class="fe fe-chevron-right"></i></a>
                                </div> <!-- .card-footer -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow">
                                <div class="card-body my-n3">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                                            <span class="circle circle-lg bg-light">
                                                <i class="fe fe-dollar-sign fe-24 text-primary"></i>
                                            </span>
                                        </div> <!-- .col -->
                                        <div class="col">
                                            <a href="">
                                                <h3 class="h5 mt-4 mb-1">Data ADM</h3>
                                            </a>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Deserunt, voluptates?</p>
                                        </div> <!-- .col -->
                                    </div> <!-- .row -->
                                </div> <!-- .card-body -->
                                <div class="card-footer">
                                    <a href="" class="d-flex justify-content-between text-muted"><span>Lihat</span><i
                                            class="fe fe-chevron-right"></i></a>
                                </div> <!-- .card-footer -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                    </div> <!-- .row-->
                    <h6 class="mb-3">Data ADM Terbaru</h6>
                    <table class="table table-borderless table-striped">
                        <thead>
                            <th>Tanggal</th>
                            <th>Tahun Ajaran</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17 Maret 2021</td>
                                <td>2019-2021</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Remove</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @elseif (Request::routeIs(Auth::getDefaultDriver() . '.kelas.show'))
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-3 text-center mb-2">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset($kelas->GetGuru->avatar) }}" alt="{{ $kelas->GetGuru->name }}"
                                            class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <h4 class="mb-1">{{ $kelas->GetGuru->name }}</h4>
                                            <p class="small mb-1 badge badge-secondary text-capitalize">{{ $kelas->GetGuru->GetRole->name}} {{ $kelas->GetKelas() }}</p>
                                        </div>
                                    </div>
                                    <div class="row mb-4 mt-2">
                                        <div class="col">
                                            <p class="small mb-0 text-muted">{{ $kelas->GetGuru->nip }}</p>
                                            <p class="small mb-0 text-muted">{{ $kelas->GetGuru->email }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Small table -->
                                <div class="col-md-12 my-4">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <!-- table -->
                                            <table class="table table-borderless table-hover datatables" id="dataTable-1">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Foto</th>
                                                        <th>NIPD</th>
                                                        <th>Nama</th>
                                                        <th>Tempat & Tgl Lahir</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kelas->GetSiswa as $siswa)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="avatar avatar-md">
                                                                    <img src="{{ asset($siswa->avatar) }}" alt="{{ $siswa->name }}"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <strong>{{ $siswa->nipd }}</strong>
                                                            </td>
                                                            <td>
                                                                {{ $siswa->name }}
                                                            </td>
                                                            <td>
                                                                {{ $siswa->tempat_lahir }}, <br>
                                                                {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->translatedFormat('d F Y') }}
                                                            </td>
                                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <span class="text-muted sr-only">Action</span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item"
                                                                        href="{{ route(Auth::getDefaultDriver() . '.siswa.show', $siswa->id) }}">Detail</a>
                                                                    <a class="dropdown-item"
                                                                        href="{{ route(Auth::getDefaultDriver() . '.siswa.edit', $siswa->id) }}">Edit</a>
                                                                    <button class="dropdown-item"
                                                                        form="delete{{ $siswa->id }}"
                                                                        type="submit">Remove</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- customized table -->
                            </div> <!-- end section -->
                        </div> <!-- .col-12 -->
                    </div>
                @endif
            @endauth
        </div> <!-- /.col-12 -->
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
    <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
    <script>
        $(document).ready(function() {
            $('#dataTable-1').DataTable({
                autoWidth: true,
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                "lengthMenu": [
                    [15, 30, 50, 100, -1],
                    [15, 30, 50, 100, "All"]
                ]
            });
        });

    </script>
@endpush
