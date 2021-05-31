@extends('master.master')
@section('title', 'Data Guru')

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
                                @auth('admin')
                                    @if (Request::is('*/guru'))
                                        <th>#</th>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>JABATAN</th>
                                        <th>ACTION</th>
                                    @endif
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            @auth('admin')
                                @if (Request::is('*/guru'))
                                    @foreach ($guru as $data)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <label class="custom-control-label"></label>
                                                </div>
                                            </td>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->GetRole->name }}</td>
                                            <td>
                                                <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a class="dropdown-item" href="{{ route('admin.guru.edit',  $data->id) }}">Edit</a>
                                                    <a class="dropdown-item" href="{{ route('admin.guru.destroy',  $data->id) }}">Remove</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endauth
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
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
