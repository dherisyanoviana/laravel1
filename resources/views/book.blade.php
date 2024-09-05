<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        .title {
            color: rgb(238, 137, 188);
            text-align: center;

        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid rgb(255, 113, 184);
        }
        th, td {
             background-color: rgb(240, 210, 225);
            color: rgb(238, 137, 188);
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: rgb(255, 77, 166);
        }
    </style>
</head>
<body>
    <div class="title">
    <h1>Daftar Buku</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
