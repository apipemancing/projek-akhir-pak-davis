<!DOCTYPE html>
<html>
<head>
    <title>Data Calon Siswa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Data Calon Siswa</h1>
    <a href="{{ route('siswas.create') }}">Tambah Siswa Baru</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Gender</th>
            <th>Umur</th>
            <th>Asal</th>
            <th>Tempat Tinggal</th>
            <th>Tanggal Lahir</th>
            <th>Nama Orang Tua</th>
            <th>Asal Sekolah</th>
            <th>Alasan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->gender }}</td>
                <td>{{ $siswa->umur }}</td>
                <td>{{ $siswa->asal }}</td>
                <td>{{ $siswa->tempat_tinggal }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->nama_orang_tua }}</td>
                <td>{{ $siswa->asal_sekolah }}</td>
                <td>{{ $siswa->alasan }}</td>
                <td>
                    <a href="{{ route('siswas.show', $siswa) }}">Lihat</a>
                    <a href="{{ route('siswas.edit', $siswa) }}">Edit</a>
                    <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
