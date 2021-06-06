<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

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
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th rowspan="4">No.</th>
                <th rowspan="4">Nama</th>
                <th rowspan="4">kelas</th>
                <th colspan="13" class="text-center id">Penugasan</th>
                <th colspan="15" class="text-center id">Ulangan harian</th>
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
                <th colspan="12" class="id">Kompotensi dasar</th>
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
                {{-- tabel penugasan --}}
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                {{-- table UH --}}
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
                <th>3,4</th>
            </tr>
        </thead>
        <tbody>
            <tr>

            </tr>
        </tbody>
    </table>
</body>

</html>
