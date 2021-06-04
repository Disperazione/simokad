@extends('master.master')
@section('title', 'Data Guru')

@section('content')
    <!-- Small table -->
    <div class="col-md-12">
        @auth('admin')
            @if (Request::is('*/guru'))
                <h2 class="mb-2 page-title">Data Guru</h2>
                <img class="" src="{{ asset('images/guru.svg') }}" width="200" alt="Guru">
            @elseif (Request::is('*/siswa'))
                <h2 class="mb-2 page-title">Data Siswa</h2>
                <img class="" src="{{ asset('images/siswa.svg') }}" width="200" alt="Siswa">
            @endif
        @endauth

        <div class="card shadow">
            <div class="card-body">
                <!-- table -->
                <table class="table datatables" id="dataTable-1">
                    <thead>
                        <tr>
                            @auth('admin')
                                @if (Request::is('*/guru'))
                                    <th>No.</th>
                                    <th>NIP</th>
                                    <th>NAMA</th>
                                    <th>EMAIl</th>
                                    <th>JABATAN</th>
                                    <th>ACTION</th>
                                @elseif (Request::is('*/siswa'))
                                    <th>No.</th>
                                    <th>NIPD</th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                    <th>TEMPAT & TANGGAL LAHIR</th>
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nip }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->GetRole->name }}</td>
                                        <td>
                                            <form action="{{ route(Auth::getDefaultDriver().'.guru.destroy', $data->id) }}" method="POST" id="delete{{ $data->id }}">
                                            @csrf
                                            @method('DELETE')
                                            </form>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ route(Auth::getDefaultDriver() .'.guru.show', $data->id) }}">Detail</a>
                                                <a class="dropdown-item"
                                                    href="{{ route(Auth::getDefaultDriver() .'.guru.edit', $data->id) }}">Edit</a>
                                                <button class="dropdown-item" form="delete{{ $data->id }}" type="submit">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif (Request::is('*/siswa'))
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nipd }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->GetKelas->slug }}</td>
                                        <td>{{ $data->tempat_lahir }},
                                            {{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d-m-Y') }}</td>
                                        <td>
                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">Action</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.siswa.show', $data->id) }}">Detail</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.siswa.edit', $data->id) }}">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.siswa.destroy', $data->id) }}">Remove</a>
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
