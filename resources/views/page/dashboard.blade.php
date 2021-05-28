@extends('master.master')
@section('title', 'Dashboard')

@section('content')
    {{-- Card dashboard --}}
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col">
                            <p class="small text-muted mb-0">Siswa</p>
                            <span class="h3 mb-0">{{ $siswa }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col">
                            <p class="small text-muted mb-0">Guru & Staff</p>
                            <span class="h3 mb-0">{{ $guru }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col">
                            <p class="small text-muted mb-0">Kelas</p>
                            <span class="h3 mb-0">{{ $kelas }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-book text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col">
                            <p class="small text-muted mb-0">Mata pelajaran</p>
                            <span class="h3 mb-0">database?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- tutup --}}

    {{-- chart --}}
    <div class="row" style="margin-top: 5%">
        <div class="col-12 col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title mb-0">Jumlah user</strong>
                </div>
                <div class="card-body text-center">
                    <div id="multiRadialbar"></div>
                </div> <!-- / .card-body -->
            </div> <!-- /.card -->
        </div> <!-- /. col -->

        <div class="col-12 col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title mb-0">Laporan</strong>
                </div>
                <div class="card-body text-center">
                    <div id="donutChart"></div>
                </div> <!-- /.card-body -->
            </div> <!-- /.card -->
        </div> <!-- /. col -->
    </div> <!-- end section -->


    {{-- tutup --}}
@endsection
@push('js')
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
@endpush
