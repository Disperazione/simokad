@extends('master.master')
@section('titel', 'Data Guru')
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    @endpush

@section('content')
    <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <!-- table -->
                    <table class="table datatables" id="dataTable-1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIP</th>
                                <th>NAMA</th>
                                <th>TEMPAT,TGL LAHIR</th>
                                <th>JABATAN</th>
                                <th>JENIS KELAMIN</th>
                                <th>ALAMAT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td>123123412312</td>
                                <td>Aminudin</td>
                                <td>Jakarta 29-09-1981</td>
                                <td>Guru</td>
                                <td>L</td>
                                <td>Kp. Rambutan</td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td>123123412312</td>
                                <td>Aminudin</td>
                                <td>Jakarta 29-09-1981</td>
                                <td>Guru</td>
                                <td>L</td>
                                <td>Kp. Rambutan</td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td>123123412312</td>
                                <td>Aminudin</td>
                                <td>Jakarta 29-09-1981</td>
                                <td>Guru</td>
                                <td>L</td>
                                <td>Kp. Rambutan</td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <label class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td>123123412312</td>
                                <td>Aminudin</td>
                                <td>Jakarta 29-09-1981</td>
                                <td>Guru</td>
                                <td>L</td>
                                <td>Kp. Rambutan</td>
                                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted sr-only">Action</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                        <a class="dropdown-item" href="#">Assign</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/simplebar.min.js') }}"></script>
        <script src='{{ asset('js/daterangepicker.js') }}'></script>
        <script src='{{ asset('js/jquery.stickOnScroll.js') }}'></script>
        <script src="{{ asset('js/tinycolor-min.js') }}"></script>
        <script src="{{ asset('js/config.js') }}"></script>
        <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
        <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
        <script>
            $('#dataTable-1').DataTable({
                autoWidth: true,
                "lengthMenu": [
                    [3, 16, 32, 64, -1],
                    [3, 16, 32, 64, "All"]
                ]
            });
        </script>
    @endpush
