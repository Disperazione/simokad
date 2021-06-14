@extends('page.exports.master')

@push('css')

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            background-color: #bdd6ee;
            color: rgb(0, 0, 0);
        }

        .id {
            background-color: #f8f8f8;
            color: rgb(0, 0, 0);
        }

    </style>
@endpush

@section('content')
    <table>
        <thead class="text-bold">
            <tr>
                <th rowspan="4">No.</th>
                <th rowspan="4">Nama</th>
                <th rowspan="4">kelas</th>

                <th colspan="13" class="text-center text-uppercase id">Penugasan</th>
                <th colspan="13" class="text-center text-uppercase id">Ulangan harian</th>

                <th rowspan="4">nilai <br> harian</th>

                <th colspan="3">UTS</th>
                <th colspan="3">UAS</th>

                <th rowspan="4">Total bobot</th>
                <th rowspan="4">Nilai Rapot</th>
                <th rowspan="4">Deskripsi pengetahuan</th>
            </tr>
            <tr>
                <th colspan="10" class="id">Kompotensi dasar</th>
                <th rowspan="4">Rata-Rata</th>
                <th rowspan="4">Bobot</th>
                <th rowspan="4">total</th>

                <th colspan="10" class="id">Kompotensi dasar</th>
                <th rowspan="4">Rata-Rata</th>
                <th rowspan="4">Bobot</th>
                <th rowspan="4">total</th>

                <th rowspan="2">P8</th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Total</th>

                <th rowspan="2">P8</th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                {{-- 10 tabel penugasan| 10 tabel uh --}}
                @for ($i = 1; $i <= 20; $i++)
                    <th>3,4</th>
                @endfor
            </tr>
        </thead>
        <tbody style="color: black">
            <tr>
                {{-- no,nama,kelas --}}
                <td>1</td>
                <td>deez nuts</td>
                <td>x candice 1</td>
                @for ($i = 1; $i <= 36; $i++)
                    <td>100</td>
                @endfor
            </tr>
        </tbody>
    </table>
@endsection
