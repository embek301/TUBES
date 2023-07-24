<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>
<body>
    <h1>Daftar Jajanan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
               <th>no</th>
            <th>Kode jajan</th>
            <th>Nama jajan</th>
            <th>Harga jajan</th>
            <th>Jenis jajan</th>
            <th>Deskripsi jajan</th>
            </tr>
        </thead>
        <tbody>
             @foreach ($jajan as $index => $jajan)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td>{{ $jajan->kode_jajan }}</td>
                <td>{{ $jajan->nama_jajan }}</td>
                <td align="center">Rp.{{ number_format($jajan->price) }}</td>
                <td>{{ $jajan->jenis->name }}</td>
                <td>{{ $jajan->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>