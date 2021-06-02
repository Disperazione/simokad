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
                            <p class="small text-muted mb-0">Guru</p>
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
        <div class="col-12 col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="card-title mb-0">Jumlah User</strong>
                </div>
                <div class="card-body">
                    <div id="userDonutChart"></div>
                </div> <!-- /.card-body -->
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
@push('css')
    <style>
        .apexcharts-svg{background-color: transparent !important;}
        .apexcharts-legend{padding: 0 !important;}
    </style>
@endpush
@push('js')
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
    <script>
        var userDonutChart, userDonutChartOptions = {
                series: @json($user[1]),
                labels: @json($user[0]),
                chart: {
                    type: "donut",
                    height: 305,
                    zoom: {
                        enabled: !1
                    },
                },
                theme: {
                    mode: colors.chartTheme,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: "35%"
                        },
                        expandOnClick: !1
                    }
                },
                legend: {
                    position: "bottom",
                    fontFamily: base.defaultFontFamily,
                    fontWeight: 400,
                    labels: {
                        colors: colors.mutedColor,
                        useSeriesColors: !1
                    },
                    horizontalAlign: "left",
                    fontFamily: base.defaultFontFamily,
                    markers: {
                        width: 10,
                        height: 10,
                        strokeWidth: 0,
                        strokeColor: "#fff",
                        radius: 6
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 2
                    },
                    onItemClick: {
                        toggleDataSeries: !0
                    },
                    onItemHover: {
                        highlightDataSeries: !0
                    }
                },
                stroke: {
                    colors: [colors.borderColor],
                    width: 1
                },
                fill: {
                    opacity: 1,
                    colors: chartColors
                }
            },
            userDonutChartCtn = document.querySelector("#userDonutChart");
        userDonutChartCtn && (userDonutChart = new ApexCharts(userDonutChartCtn, userDonutChartOptions)).render();

    </script>
@endpush
