<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Daftar Guru dan Siswa</title> --}}
    <title>Daftar Siswa dan Extrakurikuler</title>
</head>
<body>
    {{-- <h1>Daftar Guru dan Siswa</h1> --}}
    <h1>Daftar Siswa dan Extrakurikuler</h1>

    <table border="1" cellpading="5" cellspacing="0">
        <thead>
            <tr>
                {{-- <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Daftar Siswa</th> --}}
                <th>Nama Siswa</th>
                <th>Ekstrakurikuler yang diikuti</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($data as $teacher) --}}
            @foreach ($data as $siswa )

            @endforeach
            <tr>
                {{-- <td>{{ $teacher->nama }}</td>
                <td>{{ $teacher->mapel }}</td> --}}
                <td>{{ $siswa->nama }}</td>
                <td>
                    <ul>
                        {{-- @if ($teacher->student->isNotEmty())
                            @foreach ($teacher->student as $student)
                            <li>{{ $student->nama }}</li> --}}
                            @if ($siswa->extra->isNotEmty())
                            @foreach ($siswa->$extra as $extra )
                            <li>{{ $extra->nama }} - {{ $extra->jadwal }}</li>
                            @endforeach
                            @else
                            {{-- <li><em>Tidak ada Siswa</em></li> --}}
                            <li>Tidak mengikuti extrakurikuler</li>
                        @endif
                    </ul>
                </td>
            </tr>

        </tbody>
    </table>
</body>
</html>
