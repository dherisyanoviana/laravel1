<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Tanggal: {{ $date }}</p>

    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualanBukus as $buku)
            <tr>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->stok }}</td>
                <td>{{ $buku->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
